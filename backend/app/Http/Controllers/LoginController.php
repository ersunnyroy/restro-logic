<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    function login(Request $request){
        
        $email      = $request->email;
        $password   = $request->password;
         
    }
}
