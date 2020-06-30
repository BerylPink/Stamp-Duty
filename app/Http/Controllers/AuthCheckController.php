<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use Auth;

class AuthCheckController extends Controller
{
    //

    public function redirectAfterAuth(){

        $roleCheck = new LoginController();

        if(Auth::check()){
            if($roleCheck->roleCheck() == 'IA'){               
                //redirect Individual Account Dashboard                                  
                return redirect()->route('ia.dashboard');
            }

            if($roleCheck->roleCheck() == 'CA'){               
                //redirect Corporate Account Dashboard                                 
                return redirect()->route('ca.dashboard');
            }
        }else{
            return redirect()->route('login');
        }
    }
}
