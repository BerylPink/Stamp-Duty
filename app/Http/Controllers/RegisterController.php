<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Register;
use App\Localgovernment;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        
        $tbl_lga = Localgovernment::select('id', 'descrp')->get();

        // $tbl_lga = compact('tbl_lga');
        dd($tbl_lga);

        return view('layouts.partials.register' , $tbl_lga);
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

        //INSERT INTO `users` table
        

        $Register = Register::create([
            
            'tbl_lga_id'                        => $request->input('tbl_lga_id'),
            'firstname'                         => $request->input('firstname'),
            'lastname'                          => $request->input('lastname'),
            'phone_no'                          => $request->input('phone_no'),
            'email'                             => $request->input('email'),
            'password'                          =>   Hash::make($request->input('password')),
            'gender'                            => $request->input('gender'),
            'address'                           =>   $request->input('address'),
        ]);

        //If successfully created go to login page
        if($Register){
            return redirect()->route('layouts.partials.login')->with('success', 'account has been created!');
        }

        //If errors occur, return back to  individual account registration page
        return back()->withInput();
    }


    private function validateRequest(){
        return request()->validate([
           
            'firstname'                 =>   'required',
            'lastname'                  =>   'required', 
            'email'                     =>   'required|email|unique', 
            'phone_no'                  =>   'required|Numeric|unique',
            'gender'                    =>   'required', 
            'tbl_lga_id'                =>   'required',
            'address'                   =>   'required',
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
