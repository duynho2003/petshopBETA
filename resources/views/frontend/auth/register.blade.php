@extends('frontend.layouts.auth')

@section('css')
    <style>
        label {
            padding-bottom: 10px;
            height: 33px;
        }
        .invalid-feedback {
            color: red;
        }
    </style>
@endsection

@section('content')
    <section class="signup">
        <div class="container">
            <div style="padding-top: 5%;">
                @if(session('success'))
                    <section class='alert alert-success'>{{session('success')}}</section>
                @endif
            </div>
            <div class="back_store_wrapper" >
                <a href="{{ route('customer.index') }}" class="back_store_link"> Back Store</a><i class="zmdi zmdi-long-arrow-return back_store_icon"></i>
            </div>
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="{{ route('customer.processRegister') }}" method="POST" class="register-form" id="register-form">
                        @csrf
                        <div class="form-group">
                            <div>
                                <label for="name"><i class="zmdi zmdi-account material-icons-name" style="font-size: 15px;">*</i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="{{old('name')}}" class=" @error('email') is-invalid @enderror"/>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="email"><i class="zmdi zmdi-email">*</i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" class=" @error('email') is-invalid @enderror"/>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="pass"><i class="zmdi zmdi-lock">*</i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" class=" @error('email') is-invalid @enderror"/>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline">*</i></label>
                                <input type="password" name="confirm_password" id="re_pass" placeholder="Confirm your password" class=" @error('email') is-invalid @enderror"/>
                                <span style="color: red; font-family: inherit;">
                                    {{ session()->get('errors_confirm_password') }}
                                </span>
                            </div>
                            @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" checked/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{ asset('assetFE/TestAuth/assets/images/signup-image.jpg') }}" alt="sing up image"></figure>
                    <a href="{{ route('customer.login') }}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
@endsection