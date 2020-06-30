<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\CorporateAccount;
use App\ContactPerson;
use App\Country;
use App\State;

class CorporateAccountController extends Controller
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

        return view('corporate-reg', $data);
        
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

        //Validate request
        $this->validateRequest();

        //INSERT INTO `users` table
        $users = User::create([
            'username'         =>   $request->input('username'),
            'password'         =>   Hash::make($request->input('password')),
            'user_type'        =>   'CA',
        ]);

        $contactPerson = ContactPerson::create([
            'firstname'                 => $request->input('firstname'),
            'middlename'                => $request->input('middlename'),
            'lastname'                  => $request->input('lastname'),
            'contact_email'             => $request->input('contact_email'),
            'contact_phone_no'          => $request->input('contact_phone_no'),
        ]);

        $corporateAccount = CorporateAccount::create([
            'users_id'                          => $users->id,
            'country_id'                        => $request->input('country_id'),
            'states_id'                         => $request->input('states_id'),
            'contact_persons_id'                => $contactPerson->id,
            'institution_name'                  => $request->input('institution_name'),
            'email'                             => $request->input('email'),
            'phone_no'                          => $request->input('phone_no'),
            'address'                           => $request->input('address'),
            'tin_number'                        => $request->input('tin_number'),
            'CAC_registration_number'           => $request->input('CAC_registration_number'),
            'date_of_incorporation'             => $request->input('date_of_incorporation'),
        ]);

        //If successfully created go to login page
        if($users AND $contactPerson AND $corporateAccount){
            return redirect()->route('login')->with('success', $request->input('institution_name').'\'s Corporate Account has been created!');
        }

        //If errors occur, return back to  corporate account registration page
        return back()->withInput();
    }

    /**
     * Validate user input fields
     */
    private function validateRequest(){
        return request()->validate([
            'tin_number'                =>   'required|unique:corporate_accounts,tin_number',
            'institution_name'          =>   'required',
            'email'                     =>   'required|email|unique:corporate_accounts,email', 
            'phone_no'                  =>   'required|Numeric|unique:corporate_accounts,phone_no',
            'address'                   =>   'required',
            'country_id'                =>   'required',
            'states_id'                 =>   'required',
            'CAC_registration_number'   =>   'required|unique:corporate_accounts,CAC_registration_number',
            'date_of_incorporation'     =>   'required',
            'firstname'                 =>   'required',
            'middlename'                =>   'required',
            'lastname'                  =>   'required', 
            'contact_email'             =>   'required|email|unique:contact_persons,contact_email',
            'contact_phone_no'          =>   'required|Numeric|unique:contact_persons,contact_phone_no',
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
