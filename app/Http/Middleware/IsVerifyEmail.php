<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsVerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user()->is_email_verified) {
            auth()->logout();
            return redirect()->route('customer.login')->with('message','Email này chưa được xác thực. Chúng tôi đã gửi bạn mã xác thực, vui lòng kiểm tra email');
        };
        return $next($request);
    }
}
