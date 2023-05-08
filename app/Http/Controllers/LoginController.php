<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function loginCheck(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->get('email'),'password' => $request->get('password')])){
            return redirect()->route('dashboard');
        }

    }
}
