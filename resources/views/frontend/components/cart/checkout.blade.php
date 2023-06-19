@extends('frontend.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/responsive.css') }}">">

    <link rel="stylesheet" type="text/css" href="assets/css/cart.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assetsCart/assets/css/demo.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assetFE/assets/js/custom.js') }}"></script>
@endsection

@section('content')
    <div class="fs_menu_overlay"></div>
    <div class="hamburger_menu">
        <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="hamburger_menu_content text-right">
            <ul class="menu_top_nav">
                <li class="menu_item has-children">
                    <a href="#">
                        usd
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#">cad</a></li>
                        <li><a href="#">aud</a></li>
                        <li><a href="#">eur</a></li>
                        <li><a href="#">gbp</a></li>
                        <li><a href="#">vnd</a></li>
                    </ul>
                </li>
                <li class="menu_item has-children">
                    <a href="#">
                        English
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#">French</a></li>
                        <li><a href="#">Italian</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">Spanish</a></li>
                        <li><a href="#">Vietnamese</a></li>
                    </ul>
                </li>
                <li class="menu_item has-children">
                    <a href="#">
                        My Account
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                        <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                    </ul>
                </li>
                <li class="menu_item"><a href="#">home</a></li>
                <li class="menu_item"><a href="#">shop</a></li>
                <li class="menu_item"><a href="#">promotion</a></li>
                <li class="menu_item"><a href="#">pages</a></li>
                <li class="menu_item"><a href="#">blog</a></li>
                <li class="menu_item"><a href="#">contact</a></li>
            </ul>
        </div>
    </div>

    <div class="container" style="margin-top: 13%">
        <form action="{{ route('customer.processCheckout') }}" method="post">
            @csrf
            <div class="card">
                <div class="row">
                    <div class="col-md-6 cart">
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="title">
                            <div class="row" style="padding-left: 5%">
                                <div class="col">
                                    <h4><b>Billing Address</b></h4>
                                </div>
                               
                                <div class="col align-self-center text-right text-muted" name="totalQuantity"></div>
                            </div>
                        </div>
                        <div class="row border-top border-bottom" style="padding-left: 5%">
                            <div class="row main align-items-center">
                                <div class="col">
                                    <div class="form-group"> <label class="text-muted">Name</label> <input type="text"
                                        name="name" value="{{$user->name}}" class="form-control"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-left: 5%">
                            <div class="row main align-items-center">
                                <div class="col">
                                    <div class="form-group"> <label class="text-muted">Email</label>
                                        <div class="d-flex jusify-content-start align-items-center rounded p-2" style="cursor: no-drop;"> 
                                            <input type="email" name="email" value="{{$user->email}}" readonly style="cursor: no-drop;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-bottom" style="padding-left: 5%">
                            <div class="row main align-items-center">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group"> <label>Phone</label>
                                                <div class="d-flex jusify-content-start align-items-center rounded p-2"> <input
                                                        type="text" name="phone" value="{{$user->phone}}"></div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-bottom" style="padding-left: 5%">
                            <div class="row main align-items-center">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group"> <label>Address</label>
                                                <div class="d-flex jusify-content-start align-items-center rounded p-2"> <input
                                                        type="text" name="address" value="{{$user->address_1}}"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="margin: 2%">
                            <label for="" style="font-size: 18px;">Hình thức thanh toán</label>
                            <div style="font-size: 17px;">
                                <div>
                                    <input type="radio" style="margin-right: 2%;" name="payment" value="0" checked>Thanh toán qua ví điện tử
                                </div>
                                <div>
                                    <input type="radio" style="margin-right: 2%;" name="payment" value="1">Thanh toán khi nhận hàng
                                </div>
                            </div>
                        </div>
        
                        <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                    </div>
                    @if (session()->has('cart') != null)
                        <div class="col-md-6 summary">
                            <div>
                                <h5><b> Details</b></h5>
                            </div>
                            <hr>
                            <div class="row header_name">
                                <div class="col-md-6" style="padding-left:5;">Name</div>
                                <div class="col-md-2 text-right">Quanty</div>
                                <div class="col-md-4 text-right">Price</div>
                            </div>
                            @foreach (session()->get('cart')->products as $item)
                                
                                <div class="row" style="margin: auto;">
                                    <input type="hidden" name="product_id[]" value="{{$item['productInfo']->id}}">
                                    <input type="hidden" name="quantity[]" value="{{$item['quantity']}}">
                                    <div class="col-md-6" style="padding-left:5;">{{$item['productInfo']->name}}</div>
                                    <div class="col-md-2 text-right" name="product_quantity">{{$item['quantity']}}</div>
                                    <div class="col-md-4 text-right">{{number_format($item['productInfo']->promotion_price)}} VNĐ</div>
                                </div>    
                            @endforeach
                            

                            <hr class="line">
                            <div style="margin: 3%; font-size: 20px">
                                <div class="d-flex justify-content-between information">
                                    <span>Subtotal</span><span name="totalPrice">{{number_format(session()->get('cart')->totalPrice)}} VNĐ</span>
                                </div>
                                @php
                                    $shipping = 30000;
                                    $total = session()->get('cart')->totalPrice + $shipping;
                                @endphp
                                <div class="d-flex justify-content-between information">
                                    <span>Shipping</span><span>{{number_format($shipping)}} VNĐ</span>
                                </div>
                                <div class="d-flex justify-content-between information">
                                    <span>Total</span><span>{{number_format($total)}} VNĐ</span>
                                </div>
                            </div>

                        </div>
                    @endif
                    <button class="btn btn-block mt-3" type="submit" id="buttoncheck">CHECKOUT</button>
                </div>
            </div>
        </form>
    </div>

@endsection