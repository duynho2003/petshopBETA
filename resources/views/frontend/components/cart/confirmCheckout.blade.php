@extends('frontend.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/responsive.css') }}">">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap')">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assetsCart/assets/css/finish.css') }}">

@endsection

@section('js')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

@endsection

@section('content')
    <div class="container mb-5" style="margin-top: 10%">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">
                        <div class="text-left logo p-2 px-5">
                            <i id="logo" name="logo">
                            <img src="{{ asset('assetFE/assetsCart/images/LOGO_4_GROUP1-removebg1.png') }} "  width="20%" style="background-color:rgb(255, 255, 255); border-radius: 100px;";  >
                        </div>
                        <div class="invoice p-5">
                            <h5>Your order Confirmed!</h5>
                            <span class="font-weight-bold d-block mt-4">Hello, {{$name}}</span>
                            <span>You order has been confirmed and will be shipped in next few days!</span>
                            <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                            </div>
                                <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                                <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                                <span>N2TH Team</span>
                        </div>
                        <div class="d-flex justify-content-between footer p-3">
                            <div class="back-to-home">
                                <a href="{{ route('customer.index') }}">&leftarrow;<span class="text-muted"><i class="arrow-right"></i>Back to home</span></a>
                            </div>
                        </div>            
        </div>
            
            </div>
            
        </div>
        
    </div>
@endsection