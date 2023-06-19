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

                    <form action="{{ route('customer.infoCartSearch') }}" method="post" style="display: flex; justify-content: flex-end;">
                        @csrf
                        <div class="justify-content-end d-flex margin_right">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <input type="date" name="create_date" id="" class="edit_input_date" style=" font-size: 17px; border-radius: 10px; width: 100%; height: 38px; padding: 5px 20px;">   
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-rounded btn-fw" style="cursor: pointer;">
                                <i class="fa fa-search" style="color: #fff; font-size: 1.1rem;" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                
                    <div class="table-responsive pt-3">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Phone</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Create</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->phone}}</td>
                                        <td>{{number_format($order->total)}} VND</td>
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
                                        
                                        <td>{{formatDateFromUserTable($order->created_at)}}</td>
                                        <td class="parent">
                                            <a href="{{ route('customer.infoCartDetail', $order->id) }}">
                                                <button type="button" class="btn btn-lg btn-info" style="width: 48px; cursor: pointer;"><i class="fa fa-info"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="col-md-12 margin-paginate-slider-index">
                            {{$orders->links()}}
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
@endsection