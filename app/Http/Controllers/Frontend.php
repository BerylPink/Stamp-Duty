<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/

class Frontend extends CI_Controller
{
	private $active = 4;
	private $formtitle = "Front End";
	private $breadcrumb = "Front End";
	private $assVal = 'frontend';
	private $merchant_reference;
	private $mac_key;
	
	public function __construct()
	{
		parent::__construct();

		$this->mac_key = "E187B1191265B18338B5DEBAF9F38FEC37B170FF582D4666DAB1F098304D5EE7F3BE15540461FE92F1D40332FDBBA34579034EE2AC78B1A1B8D9A321974025C4";
		$this->merchant_reference = "7190";
	}

	public function index(){
		$this->load->model('General_model');
		$data = array();
		$data['active'] = $this->active;
		$data['title'] = $this->formtitle;
		$data['js'] = $this->assVal;
		$this->load->view('frontend/webpay',$data);
	}
	
	public function php_info_fxn(){
		// if(in_array('curl', get_loaded_extensions())){
		// 	echo "There is Curl";
		// }
		// else{
		// 	echo "There is no Curl";
		// 	//It has not been loaded. Use a fallback.
		// }
		
		// echo "<br/>";
		echo phpinfo();
	}
    
    public function get_reference_details(){
        $this->load->model('PaymentService_model');

		$acode = $this->db->escape($this->input->post('id'));
		$ref_code = $this->security->xss_clean($this->input->post('ref_code'));

        $reference_details = $this->PaymentService_model->get_reference_details($ref_code);
        
		if(!empty($reference_details)){

			if(time() - intval($reference_details["created"]) > 31536000){//check if record has expired
				$arr = array(
                    'proccess_status'=>'expired'
                );
			}
			elseif(empty($reference_details["productcode"]) || empty($reference_details["xpected_amount"]) || empty($reference_details["reference"])){//check if important parameters are missing
				$arr = array(
                    'proccess_status'=>'missing'
                ); 
			}
            else{
				$sess_arr = array(
					'productcode'=>$reference_details["productcode"],
					'reference'=>$reference_details["reference"],
					'xpected_amount'=>$reference_details["xpected_amount"]
				);

				$this->session->set_userdata($sess_arr);

                $arr = array(
                    'assess_no'=>$reference_details["assess_no"],
                    'reference'=>$reference_details["reference"],
                    'payer_name'=>$reference_details["payer_name"],
                    'instrument_descrp'=>$reference_details["instrument_descrp"],
                    'xpected_amount'=>$reference_details["xpected_amount"],
                    'productcode'=>$reference_details["productcode"],
                    'pay_item_id'=>$reference_details["pay_item_id"],
                    'created'=>$reference_details["created"],
                    'hashed_var'=>$reference_details["hashed_var"],
                    'site_url'=>$reference_details["site_url"],
                    'pending_paymnt'=>$reference_details["pending_paymnt"],
                    'proccess_status'=>'success'
                );
            }
		}
		else
		{	
			$arr = array(
				'proccess_status'=>'error'
			);
		}
		
		header('Content-Type: application/json');
		echo json_encode($arr);
		exit;
	}

	public function webpayresponse(){
		$data = array();
		$data['errormsg'] = "";

		$product_id = $this->session->userdata('productcode');
		$submittedamt = $this->session->userdata('xpected_amount');
		$submittedref = $this->session->userdata('reference');//$this->security->xss_clean($this->input->get('txnref'));

		$hashv = $product_id.$submittedref.$this->mac_key;
		$hased_var = strtoupper(hash('sha512', $hashv));

		$arr_param = array(
			"productid"=>$product_id,
			"transactionreference"=>$submittedref,
			"amount"=>$submittedamt
		);

		$http_query = http_build_query($arr_param);
		
		$url = "https://sandbox.interswitchng.com/webpay/api/v1/gettransaction.json?" . $http_query;
		
		$headers = array(
			"GET /HTTP/1.1",
			"Host: sandbox.interswitchng.com",
			"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36",
			"Accept: */* ", 
			"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8", 
			"Accept-Language: en-US,en;q=0.8",
			"Keep-Alive: 300",
			"Connection: keep-alive",
			"Hash: " . $hased_var
		);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
		curl_setopt($ch, CURLOPT_POST, false );
		
		$data_array = curl_exec($ch);
		$json_array = null;

		if (curl_errno($ch)) 
		{
			$errno = curl_errno($ch);
			$error_message = curl_strerror($errno);

			$data['errormsg'] = "Error: " . $errno . "</br></br>" . $error_message;
		}
		else 
		{
			$json_array = json_decode($data_array, TRUE);

			curl_close($ch);
			
			$data['amount_paid'] = number_format((floatval($json_array["Amount"])/100), 2);
			$data['transaction_ref'] = trim($json_array["MerchantReference"]);
			$data['payment_ref'] = trim($json_array["PaymentReference"]);
			$data['transaction_date'] = trim($json_array["TransactionDate"]);
			$data['response_code'] = trim($json_array["ResponseCode"]);
			$data['response_msg'] = trim($json_array["ResponseDescription"]);

			$get_assess_no = $this->PaymentService_model->get_assess_no($json_array["MerchantReference"]);

			$pay_type = "";

			if(strlen($get_assess_no) == 14 && substr($get_assess_no, 3, 1) == '6'){
      			$tablename = "tbl_tax_stamp_duty";
				$pay_type = "6";
			}
			else if(strlen($get_assess_no) == 12 && substr($get_assess_no, 4, 1) == '6'){
				$tablename = "tbl_tax_stamp_duty";
				$pay_type = "6";
			}
			else if(strlen($get_assess_no) == 14 && substr($get_assess_no, 3, 1) == '7'){
				$tablename = "tbl_tax_captial_gain";
				$pay_type = "7";
			}
			else if(strlen($get_assess_no) == 12 && substr($get_assess_no, 4, 1) == '7'){
				$tablename = "tbl_tax_captial_gain";
				$pay_type = "7";
			}
			else{
				$data['errormsg'] = "Error: " . $errno . "</br></br>" . "There was an aerror while updating records. Please try again later";
			}

			$get_id = $this->db->query("SELECT id FROM tbl_web_payment_transaction_log WHERE assess_no = '$get_assess_no' AND response_code = '00'")->row();

			if(empty($get_id->id)){
				$this->db->trans_begin();//begin transaction

				$arr = array();
				$payment_arr = array();

				$timestamp = time();
				$var_valid = (trim($this->session->userdata('reference')) != trim($json_array["MerchantReference"])) ? 0 : 1;

				$arr['assess_no'] = $get_assess_no;
				$arr['transaction_ref'] = trim($json_array["MerchantReference"]);
				$arr['payment_ref'] = trim($json_array["PaymentReference"]);
				$arr['amount'] = floatval($json_array["Amount"])/100;
				$arr['retrieval_ref'] = trim($json_array["RetrievalReferenceNumber"]);
				$arr['payment_date'] = trim($json_array["TransactionDate"]);
				$arr['card_number'] = trim($json_array["CardNumber"]);
				$arr['lead_bank_code'] = trim($json_array["LeadBankCbnCode"]);
				$arr['lead_bank_name'] = trim($json_array["LeadBankName"]);
				$arr['split_account'] = (empty(trim($json_array["SplitAccounts"])) || !is_array($json_array["SplitAccounts"])) ? trim($json_array["SplitAccounts"]) : implode($json_array["SplitAccounts"]);
				$arr['response_code'] = trim($json_array["ResponseCode"]);
				$arr['response_descrp'] = trim($json_array["ResponseDescription"]);
				$arr['ref_not_same'] = $var_valid;
				$arr['created'] = $timestamp;
				
				$this->db->insert('tbl_web_payment_transaction_log',$arr);

				if ($this->db->trans_status() === FALSE)
				{
					$this->db->trans_rollback();
					$data['errormsg'] = "Error: " . $errno . "</br></br>" . "There was an aerror while updating records. Please try again later";
				}

				if($this->db->affected_rows() > 0)
				{
					//INSERT AND UPDATE PAYMENT TABLE
					$payment_arr['assess_no'] = $get_assess_no;
					$payment_arr['bankname'] = $this->PaymentService_model->get_bank_id($json_array["LeadBankCbnCode"]);
					$payment_arr['trans_no'] = trim($json_array["PaymentReference"]);
					$payment_arr['payment_date'] = substr(trim($json_array["TransactionDate"]), 0, 10);
					$payment_arr['amount_paid'] = floatval($json_array["Amount"])/100;
					$payment_arr['pay_type'] = $pay_type;
					$payment_arr['created'] = $timestamp;
					$payment_arr['updated'] = $timestamp;
					$payment_arr['integrate_typ'] = 3;

					$this->db->insert('tbl_payment',$payment_arr);

					if ($this->db->trans_status() === FALSE)
					{
						$this->db->trans_rollback();
						$data['errormsg'] = "Error: " . $errno . "</br></br>" . "There was an aerror while updating records. Please try again later";
					}

					$this->db->trans_complete();
				}
				else //failed insert into tbl_payment_transaction_log
				{
					$this->db->trans_rollback();
					$data['errormsg'] = "Error: " . $errno . "</br></br>" . "There was an aerror while updating records. Please try again later";
				}
			}
		}

		$this->load->view('frontend/webrepsonse',$data);
	}

	public function web_pay_requery(){
		$data = array();
		$data['errormsg'] = "";

		$product_id = $this->session->userdata('productcode');
		$submittedamt = $this->session->userdata('xpected_amount');
		$submittedref = $this->session->userdata('reference');

		$hashv = $product_id.$submittedref.$this->mac_key;
		$hased_var = strtoupper(hash('sha512', $hashv));

		$arr_param = array(
			"productid"=>$product_id,
			"transactionreference"=>$submittedref,
			"amount"=>$submittedamt
		);

		$http_query = http_build_query($arr_param);
		
		$url = "https://sandbox.interswitchng.com/webpay/api/v1/gettransaction.json?" . $http_query;
		
		$headers = array(
			"GET /HTTP/1.1",
			"Host: sandbox.interswitchng.com",
			"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36",
			"Accept: */* ", 
			"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8", 
			"Accept-Language: en-US,en;q=0.8",
			"Keep-Alive: 300",
			"Connection: keep-alive",
			"Hash: " . $hased_var
		);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
		curl_setopt($ch, CURLOPT_POST, false );
		
		$data_array = curl_exec($ch);
		$json_array = null;

		if (curl_errno($ch)) 
		{
			$errno = curl_errno($ch);
			$error_message = curl_strerror($errno);

			$data['errormsg'] = "Error: " . $errno . "</br></br>" . $error_message;
		}
		else 
		{
			$json_array = json_decode($data_array, TRUE);

			curl_close($ch);
			
			$data['amount_paid'] = number_format((floatval($json_array["Amount"])/100), 2);
			$data['transaction_ref'] = trim($json_array["MerchantReference"]);
			$data['payment_ref'] = trim($json_array["PaymentReference"]);
			$data['transaction_date'] = trim($json_array["TransactionDate"]);
			$data['response_code'] = trim($json_array["ResponseCode"]);
			$data['response_msg'] = trim($json_array["ResponseDescription"]);

			$get_assess_no = $this->PaymentService_model->get_assess_no($json_array["MerchantReference"]);

			$pay_type = "";

			if(strlen($get_assess_no) == 14 && substr($get_assess_no, 3, 1) == '6'){
      			$tablename = "tbl_tax_stamp_duty";
				$pay_type = "6";
			}
			else if(strlen($get_assess_no) == 12 && substr($get_assess_no, 4, 1) == '6'){
				$tablename = "tbl_tax_stamp_duty";
				$pay_type = "6";
			}
			else if(strlen($get_assess_no) == 14 && substr($get_assess_no, 3, 1) == '7'){
				$tablename = "tbl_tax_captial_gain";
				$pay_type = "7";
			}
			else if(strlen($get_assess_no) == 12 && substr($get_assess_no, 4, 1) == '7'){
				$tablename = "tbl_tax_captial_gain";
				$pay_type = "7";
			}
			else{
				$data['errormsg'] = "Error: " . $errno . "</br></br>" . "There was an aerror while updating records. Please try again later";
			}

			$get_id = $this->db->query("SELECT id FROM tbl_web_payment_transaction_log WHERE assess_no = '$get_assess_no' AND response_code = '00'")->row();

			if(empty($get_id->id)){
				$this->db->trans_begin();//begin transaction

				$arr = array();
				$payment_arr = array();

				$timestamp = time();
				$var_valid = (trim($this->session->userdata('reference')) != trim($json_array["MerchantReference"])) ? 0 : 1;

				$arr['assess_no'] = $get_assess_no;
				$arr['transaction_ref'] = trim($json_array["MerchantReference"]);
				$arr['payment_ref'] = trim($json_array["PaymentReference"]);
				$arr['amount'] = floatval($json_array["Amount"])/100;
				$arr['retrieval_ref'] = trim($json_array["RetrievalReferenceNumber"]);
				$arr['payment_date'] = trim($json_array["TransactionDate"]);
				$arr['card_number'] = trim($json_array["CardNumber"]);
				$arr['lead_bank_code'] = trim($json_array["LeadBankCbnCode"]);
				$arr['lead_bank_name'] = trim($json_array["LeadBankName"]);
				$arr['split_account'] = (empty(trim($json_array["SplitAccounts"])) || !is_array($json_array["SplitAccounts"])) ? trim($json_array["SplitAccounts"]) : implode($json_array["SplitAccounts"]);
				$arr['response_code'] = trim($json_array["ResponseCode"]);
				$arr['response_descrp'] = trim($json_array["ResponseDescription"]);
				$arr['ref_not_same'] = $var_valid;
				$arr['created'] = $timestamp;
				
				$this->db->insert('tbl_web_payment_transaction_log',$arr);

				if ($this->db->trans_status() === FALSE)
				{
					$this->db->trans_rollback();
					$data['errormsg'] = "Error: " . $errno . "</br></br>" . "There was an aerror while updating records. Please try again later";
				}

				if($this->db->affected_rows() > 0)
				{

					//INSERT AND UPDATE PAYMENT TABLE
					$payment_arr['assess_no'] = $get_assess_no;
					$payment_arr['bankname'] = $this->PaymentService_model->get_bank_id($json_array["LeadBankCbnCode"]);
					$payment_arr['trans_no'] = trim($json_array["PaymentReference"]);
					$payment_arr['payment_date'] = substr(trim($json_array["TransactionDate"]), 0, 10);
					$payment_arr['amount_paid'] = floatval($json_array["Amount"])/100;
					$payment_arr['pay_type'] = $pay_type;
					$payment_arr['created'] = $timestamp;
					$payment_arr['updated'] = $timestamp;
					$payment_arr['integrate_typ'] = 3;

					$this->db->insert('tbl_payment',$payment_arr);

					if ($this->db->trans_status() === FALSE)
					{
						$this->db->trans_rollback();
						$data['errormsg'] = "Error: " . $errno . "</br></br>" . "There was an aerror while updating records. Please try again later";
					}

					$this->db->trans_complete();
				}
				else //failed insert into tbl_payment_transaction_log
				{
					$this->db->trans_rollback();
					$data['errormsg'] = "Error: " . $errno . "</br></br>" . "There was an aerror while updating records. Please try again later";
				}
			}
		}

		$this->load->view('frontend/webrepsonse',$data);
	}

	private function fineTuneAmt($val){
		$value = 0;
		if(trim($val) == "" || is_null($val))
		{
			$value = 0;
		}
		else
		{
			$value = str_replace(',', '', $val);
		}
		return $value;
	}

	/******************* API REQUEST **********************/
    private function jsonOutput($arr){
        $this->output->set_content_type('application/json')->set_output(json_encode($arr));
	}

    private function cleanvar($varstrng)
    {
       return $this->security->xss_clean($varstrng);
    }
	
	public function post_assessment_details($arr, $api_end_point_url){
		if(!empty($arr) && is_array($arr)){
			$api_end_point_url = $api_end_point_url;
			$api_headers = array("Content-type: application/json"); 

			$jsonDataEncoded = json_encode($arr);

			//curl request
			$curapi = curl_init();
			curl_setopt($curapi, CURLOPT_URL, $api_end_point_url);
			curl_setopt($curapi, CURLOPT_HTTPHEADER, $api_headers);
			curl_setopt($curapi, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curapi, CURLOPT_CONNECTTIMEOUT, 900);
			curl_setopt($curapi, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curapi, CURLOPT_POST, 1);
			curl_setopt($curapi, CURLOPT_POSTFIELDS, $jsonDataEncoded);
	
			$result = curl_exec($curapi);
			
			if(curl_errno($curapi)){
				return 'REQUEST ERROR:' . curl_error($curapi);
			}
	
			curl_close($curapi);
	
			return  $result;

		}
		else{
			$resultarr = array('status' => FALSE, 'message' => 'DATA WAS NOT IN THE RIGHT FORMAT');
			$this->jsonOutput($resultarr);
		}
	}
	/************************END API REQUEST ***************************/
}