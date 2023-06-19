<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthenicateController extends Controller
{
    public function register() {
        return view('fe.auth.register');
    }

    public function processRegister(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'bail|required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        $dataRegister = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if(!empty($request->password)) {
            if(!empty($request->confirm_password) && ($request->password === $request->confirm_password)) {
                $dataRegister['password'] = Hash::make($request->confirm_password);
            } else {
                return back()->with('errors_confirm_password', 'Mật khẩu xác thực không đúng, vui lòng nhập lại mật khẩu');
            }
        }

        $user = User::create($dataRegister);

        $token = Str::random(64);

        UserVerify::create([
            'user_id' => $user->id,
            'token' => $token
        ]);

        Mail::send('frontend.auth.mailRegister', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });

        return redirect()->route('customer.register')->withSuccess('Chúc mừng bạn đăng ký, vui lòng xác minh email để đăng nhập ứng dụng');
    }

    public function verifyAccount($token) {
        $userVerify = UserVerify::where('token', $token)->first();
        $message = "Email này chưa được xác thực, vui lòng đăng kí 1 tài khoản với email khác hoặc liên hệ bộ phận cskh để được hỗ trợ";
        if(!is_null($userVerify)) {
            $user = $userVerify->user;
            if(!$user->is_email_verified) {
                $userVerify->user->is_email_verified = 1;
                $userVerify->user->save();
                $message = "Xác thực email thành công, bạn có thể bắt đầu đăng nhập";
            } else {
                $message = "Email này đã được xác thực, mời bạn đăng nhập ứng dụng";
            }
        }
        return redirect()->route('login')->with('message', $message);
    }

    public function login() {
        return view('fe.auth.login');
    }

    public function processLogin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $remember = $request->remember_me;
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials, $remember)) {
            return redirect()->route('fe.index');
        }
        return back()->with('error', 'Tài khoản hoặc mật khẩu chưa chính xác vui lòng nhập lại.');

    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('fe.index');
    }
}
