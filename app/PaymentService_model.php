<?php

class PaymentService_model extends CI_Model{
  
  private $mac_key;
  private $response_url;
  function __construct() {
    parent::__construct();

    $this->mac_key = "E187B1191265B18338B5DEBAF9F38FEC37B170FF582D4666DAB1F098304D5EE7F3BE15540461FE92F1D40332FDBBA34579034EE2AC78B1A1B8D9A321974025C4";
    $this->response_url = "https://www.edutyng.com/kadduty/app/Frontend/webpayresponse?";
  }

  public function get_customer_details($customer_reference, $month_total_payment) 
  {
    $data = array();
    $tablename = "";
    $colname = "";
    $productname = "";
    $productcode = "";

    if(strlen($customer_reference) == 14 && substr($customer_reference, 3, 1) == '6'){
      $tablename = "tbl_tax_stamp_duty";
      $colname = "duty_amount";
      $productcode = "6";
      $productname = "Stamp Duty";
    }
    else if(strlen($customer_reference) == 12 && substr($customer_reference, 4, 1) == '6'){
      $tablename = "tbl_tax_stamp_duty";
      $colname = "duty_amount";
      $productcode = "6";
      $productname = "Stamp Duty";
    }
    else if(strlen($customer_reference) == 14 && substr($customer_reference, 3, 1) == '7'){
      $tablename = "tbl_tax_captial_gain";
      $colname = "capital_gain";
      $productcode = "7";
      $productname = "Capital Gain Tax";
    }
    else if(strlen($customer_reference) == 12 && substr($customer_reference, 4, 1) == '7'){
      $tablename = "tbl_tax_captial_gain";
      $colname = "capital_gain";
      $productcode = "7";
      $productname = "Capital Gain Tax";
    }
    else{
      return false;
    }

    $query = $this->db->query("SELECT $colname AS xpected_amount, repmobile, repemailadd, payera_name, SUM(amount_paid) AS paid_amount, a.created FROM $tablename a LEFT JOIN tbl_payment b ON TRIM(a.assess_no) = TRIM(b.assess_no) WHERE a.status = 1 AND a.assess_no = '$customer_reference' GROUP BY $colname, repmobile, repemailadd, payera_name");

    if ($query->num_rows() > 0) 
    {
      $i=0;
      foreach($query->result() as $row):
        $arr[$i]['reference'] = $customer_reference;
        $arr[$i]['alternate_reference'] = "";
        $arr[$i]['firstname'] = $row->payera_name;
        $arr[$i]['lastname'] = "";
        $arr[$i]['email_add'] = $row->repemailadd;
        $arr[$i]['phone'] = $row->repmobile;
        $arr[$i]['xpected_amount'] = abs(floatval($row->xpected_amount) - (empty($row->paid_amount) ? 0.00 : floatval($row->paid_amount)));

        if((floatval($month_total_payment) + floatval($row->xpected_amount)) >= 10000000){
          if($productcode == "6"){
            $arr[$i]['revnue_type'] = "3";
          }

          if($productcode == "7"){
            $arr[$i]['revnue_type'] = "4";
          }
        }
        else{
          if($productcode == "6"){
            $arr[$i]['revnue_type'] = "1";
          }

          if($productcode == "7"){
            $arr[$i]['revnue_type'] = "2";
          }
        }
        $arr[$i]['productcode'] = $productcode;
        $arr[$i]['productname'] = $productname;
        $arr[$i]['created'] = $row->created;
      ++$i;
      endforeach;
      return $arr;
    }

    return false;
  }

  public function get_monthly_total_payment($cur_year = "", $cur_month = ""){
    $cur_year = empty($cur_year) ? date("Y") : $cur_year;
    $cur_month = empty($cur_month) ? date("m") : $cur_month;

    $query = $this->db->query("SELECT payments FROM tbl_month_payment WHERE col_year = '$cur_year' AND col_month = '$cur_month'")->row();

    if(!empty($query)){
      return $query->payments;
    }
    return 0.00;
  }

  public function verify_customer_reference($customer_reference){
    $tablename = "";
    $colname = "";

    if(strlen($customer_reference) == 14 && substr($customer_reference, 3, 1) == '6'){
      $tablename = "tbl_tax_stamp_duty";
      $colname = "duty_amount";
    }
    else if(strlen($customer_reference) == 12 && substr($customer_reference, 4, 1) == '6'){
      $tablename = "tbl_tax_stamp_duty";
      $colname = "duty_amount";
    }
    else if(strlen($customer_reference) == 14 && substr($customer_reference, 3, 1) == '7'){
      $tablename = "tbl_tax_captial_gain";
      $colname = "capital_gain";
    }
    else if(strlen($customer_reference) == 12 && substr($customer_reference, 4, 1) == '7'){
      $tablename = "tbl_tax_captial_gain";
      $colname = "capital_gain";
    }
    else{
      return false;
    }

    $query = $this->db->query("SELECT assess_no FROM $tablename WHERE `status` = 1 AND TRIM(assess_no) = '$customer_reference'");

    if($query->num_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }

  public function verify_payment_notification($customer_reference, $payment_log_id){

    $query = $this->db->query("SELECT id FROM tbl_payment_transaction_log WHERE `status` = 1 AND TRIM(assess_no) = '$customer_reference' AND payment_log_id = $payment_log_id");

    if($query->num_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }

  public function verify_payment_reversal($customer_reference, $payment_log_id){

    $query = $this->db->query("SELECT id FROM tbl_payment_transaction_failure WHERE `status` = 1 AND TRIM(assess_no) = '$customer_reference' AND payment_log_id = $payment_log_id");

    if($query->num_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }

  public function get_bank_id($bank_cbn_code){

    $query = $this->db->query("SELECT id FROM tbl_banks WHERE `status` = 1 AND cbn_code = '$bank_cbn_code'")->row();

    if(!empty($query)){
      return $query->id;
    }
    return "";
  }

  public function get_reference_details($customer_reference) 
  {
    $acode = $this->db->escape($customer_reference);
    $arr = array();
    $tablename = "";
    $colname = "";
    $productname = "";
    $productcode = "01";

    if(strlen($customer_reference) == 14 && substr($customer_reference, 3, 1) == '6'){
      $tablename = "tbl_tax_stamp_duty";
      $colname = "duty_amount";
      //$productcode = "6";
      $productname = "Stamp Duty";
    }
    else if(strlen($customer_reference) == 12 && substr($customer_reference, 4, 1) == '6'){
      $tablename = "tbl_tax_stamp_duty";
      $colname = "duty_amount";
      //$productcode = "6";
      $productname = "Stamp Duty";
    }
    else if(strlen($customer_reference) == 14 && substr($customer_reference, 3, 1) == '7'){
      $tablename = "tbl_tax_captial_gain";
      $colname = "capital_gain";
      //$productcode = "7";
      $productname = "Capital Gain Tax";
    }
    else if(strlen($customer_reference) == 12 && substr($customer_reference, 4, 1) == '7'){
      $tablename = "tbl_tax_captial_gain";
      $colname = "capital_gain";
      //$productcode = "7";
      $productname = "Capital Gain Tax";
    }
    else{
      return false;
    }

    $query = $this->db->query("SELECT $colname AS xpected_amount, payera_name, payerb_name, SUM(amount_paid) AS paid_amount, a.created, a.instrument_descrp, a.web_pay_ref FROM $tablename a LEFT JOIN tbl_payment b ON TRIM(a.assess_no) = TRIM(b.assess_no) WHERE a.status = 1 AND a.assess_no = $acode GROUP BY $colname, payera_name, payerb_name, a.created, a.instrument_descrp, a.web_pay_ref");

    if ($query->num_rows() > 0) 
    {
      foreach($query->result() as $row):
        $arr['assess_no'] = $customer_reference;

        if(!empty($row->web_pay_ref)){
          $request_reference = $row->web_pay_ref;
          $arr['pending_paymnt'] = "1";  
        }
        else{
          $request_reference = substr($row->created, -4).time();
          $arr['pending_paymnt'] = "0";  
        }
        
        $arr['reference'] = $request_reference;

        $payername = $row->payera_name;

				if(!empty($row->payerb_name)){
					$payername .= " >> " . $row->payerb_name;
				}
        $arr['payer_name'] = $payername;
        $arr['instrument_descrp'] = $row->instrument_descrp;
        $xpected_amount = abs(floatval($row->xpected_amount) - (empty($row->paid_amount) ? 0.00 : floatval($row->paid_amount))) * 100;
        $arr['xpected_amount'] = $xpected_amount;
        $arr['productcode'] = "6204";
        $arr['pay_item_id'] = "103";
        $arr['created'] = $row->created;
        $data_var = $request_reference . "6204" . "103" . $xpected_amount . $this->response_url . $this->mac_key;
        $arr['hashed_var'] = strtoupper(hash('sha512', $data_var));
        $arr['site_url'] = $this->response_url;          
      endforeach;

      //UPDATE PENDING STATUS
      if(empty($row->web_pay_ref)){
        $query = $this->db->query("UPDATE $tablename SET web_pay_ref = '$request_reference' WHERE assess_no = $acode");
      }

      return $arr;
    }

    return false;
  }

  public function get_assess_no($customer_reference) 
  {
    $acode = $this->db->escape($customer_reference);
    $assess_no = "";

    $query = $this->db->query("(SELECT assess_no FROM tbl_tax_stamp_duty WHERE web_pay_ref = $acode)
    UNION
    (SELECT assess_no FROM tbl_tax_captial_gain WHERE web_pay_ref = $acode)")->row();

    if (!empty($query)) 
    {
      $assess_no = $query->assess_no;
    }

    return $assess_no;
  }
}
