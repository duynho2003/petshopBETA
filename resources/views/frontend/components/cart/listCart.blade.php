@if (session()->has('cart') != null)
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
                    <td class="align-middle p-4"><input type="number" min="1" class="form-control text-center item_quantity_{{$item['productInfo']->id}}" data-id="{{$item['productInfo']->id}}" id="update_cart" data-url="{{ route('customer.updateCart') }}" value="{{$item['quantity']}}"></td>
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
        <a href="{{ route('customer.product') }}">
            <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
        </a>
        <a href="{{ route('customer.checkout') }}">
            <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
        </a>
    </div>

@else
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
@endif