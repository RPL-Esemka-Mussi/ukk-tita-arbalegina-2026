<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        if(Auth::attempt($request->only("email","password"))) {
            $request->session()->regenerate();
            return redirect()->intended("dashboard");
        }else{
            return redirect()->route('login');
        }
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }

    public function dashboard(Request $request)
    {
        return view("dashboard");
    }
}
