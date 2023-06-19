<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Polyfill\Intl\Idn\Resources\unidata\Regex;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout','admins');
    }

    public function admins(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('be.auth.login');
    }
    
    public function login() {
        return view('be.auth.login');
    }

    public function processLogin(AdminLoginRequest $request) {
        $remember = $request->remember;
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials, $remember)) {
            return redirect()->route('admin.dashboard');    
        }
        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
