<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('index')->with('info','Bạn đã đăng nhập rồi');
        }
        return view('auth.login');
    }
}
