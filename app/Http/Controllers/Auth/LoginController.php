<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('auth-check');
        } else{
            return view('login');
        }
    }

    public function verifyCredentials(Request $request){
        //Check if both the email and password field are not empty with laravel validate function
        $this->validate($request, [
            'username'      =>  'required',
            'password'      =>  'required'
        ]);

        //Push values from email and password input fields into an array 
        $user_data = array(
            'username'      =>  $request->get('username'),
            'password'      =>  $request->get('password')
        );

        //Attempt to authenticate user provided credentials
        if(Auth::attempt($user_data)){
            return redirect()->route('auth.check');
        }else{
            return back()->with('error','Invalid credentials.');
        }
    }

    public function roleCheck(){

        $rolecheck = User::select('user_type')
        ->where('users.id', '=', Auth::id())->first();

        return $rolecheck->user_type;
    }

    public function userID(){
        if (Auth::check()) {
            return Auth::id();
        } else{
            return view('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')
        ->with('successs', 'You are logged out!');
    }
}
