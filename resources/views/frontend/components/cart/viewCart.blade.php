@extends('frontend.layouts.master')

@section('css')


    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/single_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/single_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assetFE/components/cart/index.css') }}">
@endsection

@section('js')
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script src="{{ asset('assetFE/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ asset('assetFE/assets/js/single_custom.js') }}"></script>
    <script>
      
      $("#list_cart").on("click", "#detele_cart", function() {
        console.log($(this).data('url'));
        $.ajax({
          type: "get",
          url: $(this).data('url'),
        }).done(function(data) {
          renderCart(data);
          alertify.success('Đã xoá sản phẩm');
        });
      })

      $("#list_cart").on("change", "#update_cart", function() {
        let id = $(this).data('id');
        let quantity = $(".item_quantity_"+id).val();
        $.ajax({
          type: "get",
          url: $(this).data('url'),
          data: {
            id: id,
            quantity: quantity
          }
        }).done(function(data) {
          renderCart(data);
          alertify.success('Cập nhật thành công');
        });
      })

      function renderCart(data) {
        $("#list_cart").empty();
        $("#list_cart").html(data);
        $("#total_show_quantity").text($("#total_quantity_cart").val());
      }
    </script>

@endsection


@section('content')

    <div class="fs_menu_overlay"></div>

    <!-- Hamburger Menu -->

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

    <div class="container px-3 my-5 clearfix" style="margin-top: 12% !important;">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2 style="font-family: Arial, Helvetica, sans-serif;">Shopping Cart</h2>
            </div>
            @if (session()->has('cart') != null)
            <div class="card-body" id="list_cart">
              
              <div class="table-responsive">
                <table class="table table-bordered m-0">
                  <thead>
                    <tr>
                      <!-- Set columns width -->
                      <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                      <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                      <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                      <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                      <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach (session()->get('cart')->products as $item)
                    
                    <tr>
                      <td class="p-4">
                        <div class="media align-items-center">
                          <img src="{{ asset($item['productInfo']->feature_image_path) }}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                          <div class="media-body">
                            <a href="#" class="d-block text-dark">{{$item['productInfo']->name}}</a>
                          </div>
                        </div>
                      </td>
                      <td class="text-right font-weight-semibold align-middle p-4">{{number_format($item['productInfo']->promotion_price)}} VNĐ</td>
                      <td class="align-middle p-4"><input type="number" min="1" class="form-control text-center item_quantity_{{$item['productInfo']->id}}" data-id="{{$item['productInfo']->id}}" id="update_cart"  data-url="{{ route('customer.updateCart') }}" value="{{$item['quantity']}}"></td>
                      <td class="text-right font-weight-semibold align-middle p-4">{{number_format($item['price'])}} VNĐ</td>
                      <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" id="detele_cart" data-url="{{ route('customer.deleteCart', $item['productInfo']->id) }}">×</a></td>
                    </tr>
                      
                  @endforeach 
          
          
                  </tbody>
                </table>
              </div>
              <!-- / Shopping cart table -->
          
              <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                <div class="mt-4">
                  <label class="text-muted font-weight-normal">Promocode</label>
                  <input type="text" placeholder="ABC" class="form-control">
                </div>
                <div class="d-flex">
                  <div class="text-right mt-4 mr-5">
                    <label class="text-muted font-weight-normal m-0">Total quantity</label>
                    <input hidden id="total_quantity_cart" type="number" value="{{session()->get('cart')->totalQuantity}}">
                    <div class="text-large"><strong>{{session()->get('cart')->totalQuantity}}</strong></div>
                  </div>
                  <div class="text-right mt-4">
                    <label class="text-muted font-weight-normal m-0">Total price</label>
                    
                    <div class="text-large"><strong>{{number_format(session()->get('cart')->totalPrice)}}đ</strong></div>
                  </div>
                </div>
              </div>
              
              <div class="float-right">
                <div class="float-right">
                  <a href="{{ route('customer.product') }}">
                      <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
                  </a>
                  <a href="{{ route('customer.checkout') }}">
                      <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
                  </a>
                </div>
              </div>
            @else
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered m-0">
                          <div style="text-align: center; height: 150px;">
                              <p style="font-size: 25px; font-weight: 600;">Giỏ hàng hiện chưa có sản phẩm</p>
                              <div style="font-size: 18px; font-weight: 400;">
                                  <i class="ti-hand-point-right" ></i><a href="{{ route('customer.product') }}"> Tiếp tục mua hàng</a>
                              </div>
                          </div>
                      </table>
                  </div>
              </div>
            @endif

                
            
            
            </div>
        </div>

        
    </div>

@endsection