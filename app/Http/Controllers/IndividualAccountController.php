<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\IndividualAccount;
use App\User;
use App\Country;
use App\State;

class IndividualAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::select('CountryID', 'Name')->get();

        $states = State::select('StateID', 'StateName')->get();

        $data = compact('countries', 'states');

        return view('individual-reg', $data);
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
        // return $request;
        //Validate request
        $this->validateRequest();

        //INSERT INTO `users` table
        $users = User::create([
            'username'         =>   $request->input('username'),
            'password'         =>   Hash::make($request->input('password')),
            'user_type'        =>   'IA',
        ]);

        $individualAccount = IndividualAccount::create([
            'users_id'                          => $users->id,
            'country_id'                        => $request->input('country_id'),
            'states_id'                         => $request->input('states_id'),
            'tin_number'                        => $request->input('tin_number'),
            'firstname'                         => $request->input('firstname'),
            'lastname'                          => $request->input('lastname'),
            'phone_no'                          => $request->input('phone_no'),
            'email'                             => $request->input('email'),
            'gender'                            => $request->input('gender'),
        ]);

        //If successfully created go to login page
        if($users AND $individualAccount){
            return redirect()->route('login')->with('success', $request->input('firstname').' '.$request->input('lastname').'\'s account has been created!');
        }

        //If errors occur, return back to  individual account registration page
        return back()->withInput();

    }

    /**
     * Validate user input fields
     */
    private function validateRequest(){
        return request()->validate([
            'tin_number'                =>   'required|unique:individual_accounts,tin_number',
            'firstname'                 =>   'required',
            'lastname'                  =>   'required', 
            'email'                     =>   'required|email|unique:individual_accounts,email', 
            'phone_no'                  =>   'required|Numeric|unique:individual_accounts,phone_no',
            'gender'                    =>   'required', 
            'country_id'                =>   'required',
            'states_id'                 =>   'required',
            'username'                  =>   'required',
            'password'                  =>   'required',
            'confirm_password'          =>   'required|same:password',
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
