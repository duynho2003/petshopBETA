<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdmimEmailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; 

class AdminForgotPasswordController extends Controller
{
    public function getEmail() {
        return view('be.auth.email');
    }

    public function postEmail(AdmimEmailRequest $request) {
        $token = Str::random(64);
        DB::table('admin_password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now() 
        ]); 

        
    }
}
