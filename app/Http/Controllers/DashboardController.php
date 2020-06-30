<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use Auth;
use App\IndividualAccount;
use App\CorporateAccount;
use App\ContactPerson;
use App\Country;
use App\State;

class DashboardController extends Controller
{
    // var $userID;

    /**
     * This method will redirect users back to the login page if not properly authenticated
     * @return void
     */  
    public function __construct() {
        $this->middleware('auth:web');
    }

    public function indvidualDashboard(){


        $userDetails = IndividualAccount::where('users_id', $this->loggedUserID())->first();

        $userCountry = Country::select('Name')->where('CountryID', $userDetails->country_id)->first();

        $userState = State::select('StateName')->where('StateID', $userDetails->states_id)->first();

        $data = compact('userDetails', 'userCountry', 'userState');

        return view('individual.index', $data);
    }

    public function corporateDashboard(){
        return view('corporate.index');
    }

    public function loggedUserID(){
        $this->userID = new LoginController();

        return $this->userID->userID();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
