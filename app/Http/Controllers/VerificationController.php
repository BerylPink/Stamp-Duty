<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Verification;
use App\StampDutyHistory;
use App\TransacIndividual;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verifications = Verification::select('assess_no', 'payera_name', 'payerb_name', 'instrument_descrp', 'paid_amount')->paginate(10);

        $data = compact('verifications');

        return view('verification', $data)
        ->with('i', (request()->input('page', 1) -1)*5);  
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
        // $stampDutyInvoice = StampDutyHistory::findOrFail($request->input('certificate_no'));
        $stampDutyInvoice = StampDutyHistory::where('certificate_no', $request->input('certificate_no'))->first();

        // return $stampDutyInvoice;

        if($stampDutyInvoice){

            $stampDutyDetails =  TransacIndividual::select('id','name', 'rate', 'extra_copy')
            ->where('id', $stampDutyInvoice->tax_stamp_duty_id)->first();

            $stampDutyAmount = ($stampDutyDetails->rate) * ($stampDutyDetails->extra_copy);

            $data = compact('stampDutyInvoice', 'stampDutyDetails', 'stampDutyAmount');

            return view('certificate', $data);

        }else{
            return back()->with('error','Certificate Number does not exist. Verifiy you entered the correct certificate number.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $userExists = Verification::findOrFail($id);

        // $transaction = DB::table('tbl_tax_stamp_duty')
        // ->select('assess_no ', 'payera_name', 'payerb_name', 'tbl_duty_instruments_name', 'paid_amount')
        // ->where('tbl_tax_stamp_duty.id', $id)->first();

        // $data = compact('verification');
        // // return response()->json($data);

        // return view('verification', $data);

        
        
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
