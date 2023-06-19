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
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset(getAvatarCustomerFromUserTable($user->id)) }}" style="width: 150px;" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{$user->name}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('customer.updateInfoCustomer', $user->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr style="font-size: 16px; color: #989898;" class="form-group">
                                            <th class="col-sm-3"><label>Full Name</label></th>
                                            <td class="col-sm-9">
                                                <input type="text" name="name" class="form-control " value="{{$user->name}}" placeholder="Full Name">
                                            </td>
                                        </tr>
    
                                        <tr style="font-size: 16px; color: #989898;" class="form-group">
                                            <th class="col-sm-3"><label>Gender</label></th>
                                            <td class="col-sm-9" style="display: flex; justify-content: space-around;">
                                                <div style="display: flex;">
                                                    <input type="radio" name="sex" {{$user->sex == 1 ? 'checked':''}} class="form-control" value="1" style="margin: 0 15% 15% 0;">
                                                    <label>Male</label>
                                                </div>
                                                <div style="display: flex;">
                                                    <input type="radio" name="sex" {{$user->sex == 0 ? 'checked':''}} class="form-control" value="0" style="margin: 0 15% 15% 0;">
                                                    <label>Female</label>
                                                </div>
                                            </td>
                                        </tr>
    
                                        <tr style="font-size: 16px; color: #989898;" class="form-group">
                                            <th class="col-sm-3"><label>Email</label></th>
                                            <td class="col-sm-9">
                                                <input type="email" name="email" class="form-control " value="{{$user->email}}" placeholder="Email" style="cursor: no-drop; color: #989898;" disabled>
                                            </td>
                                        </tr>

                                        <tr style="font-size: 16px; color: #989898;" class="form-group">
                                            <th class="col-sm-3"><label>Avatar</label></th>
                                            <td class="col-sm-9">
                                                <input type="file" name="avatar" class="form-control">
                                            </td>
                                        </tr>
    
                                        <tr style="font-size: 16px; color: #989898;" class="form-group">
                                            <th class="col-sm-3"><label>Phone(*)</label></th>
                                            <td class="col-sm-9">
                                                <input type="text" name="phone" class="form-control " required value="{{$user->phone}}" placeholder="Phone">
                                            </td>
                                        </tr>
    
                                        <tr style="font-size: 16px; color: #989898;" class="form-group">
                                            <th class="col-sm-3"><label>Birthday</label></th>
                                            <td class="col-sm-9">
                                                <input type="date" name="birthday" class="form-control " value="{{$user->birthday}}" placeholder="Birthday">
                                            </td>
                                        </tr>
    
                                        <tr style="font-size: 16px; color: #989898;" class="form-group">
                                            <th class="col-sm-3"><label>Address(*)</label></th>
                                            <td class="col-sm-9">
                                                <input type="text" name="address" class="form-control " required value="{{$user->address_1}}" placeholder="Address">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" style="margin-right: 5%" aria-hidden="true"></i>Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection