<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\StampDutyHistory;
use App\TransacIndividual;
use App\InstrumentDetails;

class StampDutyHistoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stampDutyHistory = StampDutyHistory::select('id', 'created_at')
        ->where('users_id', Auth::id())->latest('created_at')->first();

        $data = compact('stampDutyHistory');

        return view('stamp-duty-history', $data)
        ->with('i', (request()->input('page', 1) -1)*4); ;
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $stampDutyInvoice = StampDutyHistory::findOrFail($id);

        $stampDutyDetails =  TransacIndividual::select('id','name', 'rate', 'extra_copy')
        ->where('id', $stampDutyInvoice->tax_stamp_duty_id)->first();

        $stampDutyAmount = ($stampDutyDetails->rate) * ($stampDutyDetails->extra_copy);

        $txn_ref = time() . rand(10*45, 100*98);
        $pay_item_id = '103';
        $site_redirect_url = 'https://www.edutyng.com/kadduty/app/Frontend/webpayresponse';
        $MAC_KEY = 'E187B1191265B18338B5DEBAF9F38FEC37B170FF582D4666DAB1F098304D5EE7F3BE15540461FE92F1D40332FDBBA34579034EE2AC78B1A1B8D9A321974025C4';

        $data_var = $txn_ref.'6204'.$pay_item_id.($stampDutyAmount*100).$site_redirect_url.$MAC_KEY;
        $arr['hash'] = strtoupper(hash('sha512', $data_var));

        $data = compact('stampDutyInvoice', 'stampDutyDetails', 'stampDutyAmount', 'txn_ref', 'arr', 'pay_item_id', 'site_redirect_url');

        return view('invoice', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stampDutyInvoice = StampDutyHistory::findOrFail($id);

        $stampDutyDetails =  TransacIndividual::select('id','name', 'rate', 'extra_copy')
        ->where('id', $stampDutyInvoice->tax_stamp_duty_id)->first();

        $stampDutyAmount = ($stampDutyDetails->rate) * ($stampDutyDetails->extra_copy);

        $data = compact('stampDutyInvoice', 'stampDutyDetails', 'stampDutyAmount');

        return view('certificate', $data);
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
