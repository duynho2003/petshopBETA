@extends('frontend.layouts.master')

@section('css')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endsection

@section('js')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

@section('content')
    <section class="sign-in">
        <div class="container">
            <div style="padding-top: 5%;">
                @if(session('message'))
                    <section class='alert alert-success'>{{session('message')}}</section>
                @endif
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ asset('assetFE/TestAuth/assets/images/signin-image.jpg') }}" alt="sing up image"></figure>
                </div>

                <div class="panel-body" style="width: 50%;">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                        <div class="panel-body">
            
                            <form action="{{ route('customer.processForgotPassword') }}" id="register-form" role="form" autocomplete="off" class="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input id="email" name="email" placeholder="Enter Email Address" class="form-control @error('email') is-invalid @enderror" type="email" value="{{old('email')}}">
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" style="display: block; font-size: 14px; text-align: left;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                                </div>
                                
                                <input type="hidden" class="hide" name="token" id="token" value=""> 
                            </form>
            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection