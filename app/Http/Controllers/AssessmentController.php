<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Assessment;

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

        DB::beginTransaction();

        $tbl_partya_payers = Assessment::create([
            'tbl_partya_payers_id'                  =>   $tbl_partya_payers->id,
            'assess_no'                             =>   $request->input('assess_no'),
            'lname'                                 =>   $request->input('lname'),
            'othername'                             =>   $request->input('othername'),
            'phoneno'                               =>   $request->input('phoneno'),
            'emailadd'                              =>   $request->input('emailadd'),
            'raddress'                              =>   $request->input('raddress'),       
        ]);

        $tbl_partyb_payers = Assessment::create([
            'tbl_partyb_payers_id'                  =>   $tbl_partyb_payers->id,
            'assess_no'                             =>   $request->input('assess_no'),
            'lname'                                 =>   $request->input('lname'),
            'othername'                             =>   $request->input('othername'),
            'phoneno'                               =>   $request->input('phoneno'),
            'emailadd'                              =>   $request->input('emailadd'),
            'raddress'                              =>   $request->input('raddress'),       
        ]);

        DB::commit();

        if($tbl_partya_payers AND $tbl_partyb_payers){
            return redirect()->route('#')->with('you will be  directed to Interswitch',  'Please make Payments here');
        }

    
        return back()->withInput();
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
