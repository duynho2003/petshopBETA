@extends('frontend.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/categories_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/categories_responsive.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assetFE/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ asset('assetFE/assets/js/categories_custom.js') }}"></script>
@endsection

@section('content')
    <section style="background-color: #eee; margin-top: 10%;">
        <div class="container py-5">
            <div class="row card">
                <div class="card-body">
                    <h4 class="card-title">Show Order</h4>
                   
                    {{-- <form action="{{ route('order.search') }}" method="post" class="form_search_date">
                        @csrf
                        <div class="justify-content-end d-flex margin_right">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <input type="date" name="create_date" id="" class="edit_input_date">   
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-rounded btn-fw">Search</button>
                        </div>
                    </form> --}}
    
                    <div style="display: flex">
                        <div class="table-responsive pt-3 col-md-5" >
                            <h4>Information Receiver</h4>
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td>{{$order->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email </th>
                                    <td>{{$order->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$order->phone}}</td>
                                </tr>  
                                <tr>
                                    <th>Address</th>
                                    <td>{{$order->address}}</td>
                                </tr> 
                                <tr>
                                    <th>Phương thức thanh toán</th>
                                    <td>{{$order->payment == 0 ? "Thanh toán bằng ví điện tử":"Thanh toán khi nhận hàng"}}</td>
                                </tr> 
                                <tr>
                                    <th>Status</th>
                                    @switch($order->status)
                                        @case("process")
                                            <td>
                                                <label class="badge badge-warning" style="font-size: 17px;">{{$order->status}}</label>
                                            </td>
                                            @break
                                        @case("shipping")
                                            <td>
                                                <label class="badge badge-info" style="font-size: 17px;">{{$order->status}}</label>
                                            </td>
                                            @break
                                        @case("success")
                                            <td>
                                                <label class="badge badge-success" style="font-size: 17px;">{{$order->status}}</label>
                                            </td>
                                            @break
                                        @case("cancel")
                                            <td>
                                                <label class="badge badge-danger" style="font-size: 17px;">{{$order->status}}</label>
                                            </td>
                                            @break
                                        @default
                                    @endswitch
                                    
                                </tr>                    
                            </table>
                        </div>

                        <div class="table-responsive pt-3 col-md-7" >
                            <h4>Information Order</h4>
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center">
                                        <th class="col-md-7">Name</th>
                                        <th class="col-md-2">Quantity</th>
                                        <th class="col-md-3">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productItem as $item)
                                        <tr>
                                            <td class="col-md-7">{{$item->name}}</td>
                                            <td class="col-md-2" style="text-align: center">{{$item->quantity}}</td>
                                            <td class="col-md-3" style="text-align: right">{{number_format($item->promotion_price)}} VNĐ</td>
                                        </tr>
                                    @endforeach
                                </tbody>               
                            </table>
                            <table class="table table-hover table-striped table-bordered margin_top">
                                <tr>
                                    <th>Total Quantity</th>
                                    <td style="text-align: right;">{{$order->quantity}}</td>
                                </tr>
                                <tr>
                                    <th>Total Price</th>
                                    <td style="text-align: right;">{{number_format($order->total)}} VNĐ</td>
                                </tr>                                        
                            </table>
                        </div>
                    </div>

                    @if ($order->status === "process")
                        <div style="text-align: right;">
                            <a href="{{ route('customer.infoCartDetailCancel', $order->id) }}">
                                <button type="submit" style="cursor: pointer;" class="btn btn-lg btn-danger"><i class="fa fa-times-circle-o" style="margin-right: 5%" aria-hidden="true"></i>Cancel</button>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection