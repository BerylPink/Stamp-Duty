<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\PartyA;
use App\PartyB;
use App\InstrumentDetails;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function __construct() {
    //     $this->middleware('auth:web');
    // }
    
    public function index()
    {
        if(Auth::check()){
            return view('assessments');
        }else{
            return back()->with('error', 'Please login to access this service.');
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validateRequest();

        $instrumentDetails = InstrumentDetails::create([
            'transaction_date'      =>  $request->input('transaction_date'),
            'no_of_extra_copies'    =>  $request->input('no_of_extra_copies'),
        ]);

        $payerAIds = $request->input('payer_id');

        $payerBIds = $request->input('party_b_payer_id');

        if($instrumentDetails){

        // foreach($payerAIds as $payerAId => $value){
        //     echo $request->input('business_or_last_name')[$payerAId].'<br>';
        // }

        // dd();
            if(!empty($payerAIds)){

                foreach($payerAIds as $payerAId => $value){

                    PartyA::create([
                        'instrument_details_id'     =>   $instrumentDetails->id,
                        'payer_id'                  =>   $request->input('payer_id')[$payerAId],
                        'business_or_last_name'     =>   $request->input('business_or_last_name')[$payerAId],
                        'firstname'                 =>   $request->input('firstname')[$payerAId],
                        'phone_no'                  =>   $request->input('phone_no')[$payerAId],
                        'email'                     =>   $request->input('email')[$payerAId],
                        'address'                   =>   $request->input('address')[$payerAId],       
                    ]);
                }
            }
                
        
            if(!empty($payerBIds)){

                foreach($payerBIds as $payerBId => $value){

                    PartyB::create([
                        'instrument_details_id'             =>   $instrumentDetails->id,
                        'party_b_payer_id'                  =>   $request->input('party_b_payer_id')[$payerBId],
                        'party_b_business_or_last_name'     =>   $request->input('party_b_business_or_last_name')[$payerBId],
                        'party_b_firstname'                 =>   $request->input('party_b_firstname')[$payerBId],
                        'party_b_phone_no'                  =>   $request->input('party_b_phone_no')[$payerBId],
                        'party_b_email'                     =>   $request->input('party_b_email')[$payerBId],       
                        'party_b_address'                   =>   $request->input('party_b_address')[$payerBId]
                    ]);
                }

            }
                return redirect('/transac-individual')->with('success', 'Assessment has be saved. You will be re-directed to Interswitch to make payments.');
            
        }
        
        return back()->withInput();
    }

    /**
     * Validate user input fields
     */
    private function validateRequest(){
        return request()->validate([
            'payer_id'                          =>  'required|unique:tbl_party_a,payer_id',
            'party_b_payer_id'                  =>  'required|unique:tbl_party_b,party_b_payer_id',
            'business_or_last_name'             =>  'required',
            'party_b_business_or_last_name'     =>  'required',
            'firstname'                         =>   '',
            'party_b_firstname'                 =>   '',
            'phone_no'                          =>   'required|unique:tbl_party_a,phone_no', 
            'email'                             =>   'required|unique:tbl_party_a,email',  
            'party_b_phone_no'                  =>   'required|unique:tbl_party_b,party_b_phone_no', 
            'party_b_email'                     =>   'required|unique:tbl_party_b,party_b_email', 
            'address'                           =>   'required',
            'party_b_address'                   =>   'required',
            'transaction_date'                    =>   'required',
            'no_of_extra_copies'                  =>   'required'
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
