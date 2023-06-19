<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class ForgotPasswordController extends Controller
{
    public function forgotPassword() {
        return view('frontend.auth.password.forgot');
    }

    public function processForgotPassword(Request $request) {
        $message = [
            'email.required' => 'Email không được để trống',
            'email.exists' => 'Email không tồn tại',
        ];
        $request->validate([
            'email'=>'bail|required|exists:users',
        ], $message);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('frontend.auth.password.mailReset', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Email Reset Password Mail');
        });

        return back()->with('message','Chúng tôi đã gửi mã reset mật khẩu, vui lòng kiểm tra email');
    }

    public function resetPassword($token) {
        return view('frontend.auth.password.reset', compact('token'));
    }

    public function processResetPassword(Request $request) {
        $message = [
            'email.required' => 'Email không được để trống',
            'email.exists' => 'Email không tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'confirm_password.required' => 'Xác nhận lại mật khẩu',
        ];

        $request->validate([
            'email' => 'bail|required|exists:users',
            'password' => 'required',
            'confirm_password' => 'required'
        ], $message);

        $checkData = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if(!$checkData) {
            return back()->with('message','Mã xác thực không tồn tại, vui lòng liên hệ bộ phần CSKH để được hỗ trợ');
        }

        if(!empty($request->password)) {
            if(!empty($request->confirm_password) && $request->password === $request->confirm_password) {
                $updatePassword = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
            } else {
                return back()->with('errors_confirm_password', 'Mật khẩu xác thực không đúng, vui lòng nhập lại mật khẩu');
            }
        }

        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        
        return redirect()->route('customer.login')->withSuccess('Mật khẩu đã đổi thành công, bạn có thể đăng nhập tài khoản bình thường');
    }
}
