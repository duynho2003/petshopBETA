@extends('frontend.layouts.auth')

@section('css')

@endsection

@section('js')

@endsection

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
                    <section class='alert alert-success'>{{session('alert')}}</section>
                @endif
                @if(session('success'))
                    <section class='alert alert-success'>{{session('success')}}</section>
                @endif
            </div>
            <div class="back_store_wrapper" >
                <a href="{{ route('customer.index') }}" class="back_store_link"> Back Store</a><i class="zmdi zmdi-long-arrow-return back_store_icon"></i>
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ asset('assetFE/TestAuth/assets/images/signin-image.jpg') }}" alt="sing up image"></figure>
                    <a href="{{ route('customer.register') }}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign in</h2>
                    <form action="{{ route('customer.processLogin') }}" method="POST" class="register-form" id="login-form">
                        @csrf   
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
                        <div style="display: flex; justify-content: space-evenly; align-items: baseline;">
                            <div class="form-group">
                                <input type="checkbox" name="remember_me" id="remember_me" class="agree-term" />
                                <label for="remember_me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('customer.forgotPassword') }}" class="signup-image-link" style="font-size: 13px;">Forgot Password ?</a>
                            </div>
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

