<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect()->back()->withErrors('Credentiale invalide');
    }

    public function logout(){
        Auth::logout();
        return redirect("login");
    }
}
