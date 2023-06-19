@extends('frontend.layouts.master')

@section('content')
    <section class="sign-in">
        <div class="container">
            <div style="padding-top: 5%;">
                @if(session('message'))
                    <section class='alert alert-success'>{{session('message')}}</section>
                @endif
                @if(session('error'))
                    <section class='alert alert-success'>{{session('error')}}</section>
                @endif
                @if(session('alert'))
                    <section class='alert alert-success'>{{session('error')}}</section>
                @endif
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ asset('assetFE/TestAuth/assets/images/signin-image.jpg') }}" alt="sing up image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title" style="font-size: 30px;">Change Password</h2>
                    <form action="{{ route('customer.processResetPassword') }}" method="POST" class="register-form" id="login-form">
                        @csrf   
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" placeholder="Your Email" value="{{old('email')}}" class=" @error('email') is-invalid @enderror"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password"  placeholder="Password" class=" @error('password') is-invalid @enderror"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="confirm_password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="confirm_password"  placeholder="confirm_password" class=" @error('confirm_password') is-invalid @enderror"/>
                            @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <p style="font-size: 16px; color: red; padding: 16px;">
                                {!! session()->get('errors_confirm_password') !!}
                            </p>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>

                    
                    

                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection