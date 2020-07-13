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
        $stampDutyHistories = StampDutyHistory::select('id', 'created_at')
        ->where('users_id', Auth::id())->orderBy('created_at', 'DESC')->paginate(4);

        $data = compact('stampDutyHistories');

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

        $data = compact('stampDutyInvoice', 'stampDutyDetails', 'stampDutyAmount');

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
