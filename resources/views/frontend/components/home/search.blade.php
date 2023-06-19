@extends('frontend.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/categories_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/categories_responsive.css') }}">
    <style>
        .small.text-muted {
            display: none;
        }
    </style>
@endsection

@section('js')
    <script src="{{ asset('assetFE/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ asset('assetFE/assets/js/categories_custom.js') }}"></script>
   
@endsection

@section('content')


<div class="container product_section_container">
    <div class="row">
        <div class="col product_section clearfix">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>PC</a></li>
                </ul>
            </div>

            <!-- Sidebar -->

            <div class="sidebar">
                <div class="sidebar_section">
                    <div class="sidebar_title">
                        <h5>Product Category</h5>
                    </div>
                    <ul class="sidebar_categories">
                        <li class="">
                            <a href="{{ route('customer.categoryProductLaptop') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Laptop</a>
                        </li>
                        <li class="">
                            <a href="{{ route('customer.categoryProductPC') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>PC</a>
                        </li>
                        <li class="">
                            <a href="{{ route('customer.categoryProductMonitor') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Monitor</a>
                        </li>
                        <li class="">
                            <a href="{{ route('customer.categoryProductKeyboard') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Keyboard</a>
                        </li>
                        <li class="">
                            <a href="{{ route('customer.categoryProductMouse') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Mouse</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Main Content -->

            <div class="main_content">

                <!-- Products -->

                <div class="products_iso">
                    <div class="row">
                        <div class="col">

                            <!-- Product Sorting -->

                            <div class="product_sorting_container product_sorting_container_top">
                                <div class="pages d-flex flex-row align-items-center">
                                    {{-- {{$products->links()}} --}}
                                </div>

                            </div>

                            <!-- Product Grid -->
                            <div class="product-grid">
                                <!-- View Product  -->
                            @if ($products->count())
                                @foreach ($products as $product)
                                    <a href="{{ route('customer.detail', $product->id) }}">
                                        <div class="product-item men">
                                            <div class="product discount product_filter">
                                                <div class="product_image">
                                                    <img src="{{ asset($product->feature_image_path) }}" alt="{{$product->feature_image_name}}">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                                <div class="product_info">
                                                    <h6 class="product_name" style="margin-top: 10px;"><a>{{$product->name}}</a></h6>
                                                    <div class="product_price">{{number_format($product->promotion_price)}} VNĐ
                                                    <p style="font-size: 12px; margin-left: 10px; color: #b5aec4; text-decoration: line-through;">{{number_format($product->normal_price)}} VNĐ</p></div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="{{ route('customer.detail', $product->id) }}">Xem chi tiết</a></div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div>
                                    <h3>There are no record.</h3>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection