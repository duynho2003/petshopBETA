<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function cart() {
        return view('frontend.components.cart.viewCart');
    }

    public function addCart(Request $request, $id) {
        $product = Product::find($id);
        if($product != null) {
            $oldCart = session()->get('cart');
            $newCart = new Cart($oldCart);
            $newCart->addCartDetail($id, $request->quantity, $product);
            session()->put('cart', $newCart);
            return response()->json([
                'code' => 200,
                'message' => 'success',
            ], status: 200);
        } else {
            // trả về trang lỗi
        }
    }

    public function deleteCart($id) {
        $oldCart = session()->get('cart');
        $newCart = new Cart($oldCart);
        $newCart->deleteCartDetail($id);
        if(count($newCart->products) > 0) {
            session()->put('cart', $newCart);
        } else {
            session()->forget('cart');
        }
        return view('frontend.components.cart.listCart');
    }

    public function updateCart(Request $request) {
        $oldCart = session()->get('cart');
        $newCart = new Cart($oldCart);
        $newCart->updateCartDetail($request->id, $request->quantity);
        session()->put('cart', $newCart);
        return view('frontend.components.cart.listCart');
    }

    public function checkout() {
        $user = auth()->user();
        return view('frontend.components.cart.checkout', compact('user'));
    }

    public function processCheckout(Request $request) {
        // dd($request->email);
        if(session()->has('cart')) {
            $cart = session()->get('cart');
            $order = Order::create([
                'user_id' => $request->id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'payment' => $request->payment,
                'quantity' => $cart->totalQuantity,
                'total' => $cart->totalPrice,
            ]);
            
            // lưu xuống orderProduct
            if(!empty($cart)) {
                foreach ($cart->products as $key => $value) {
                    $order->products()->attach($key, ['quantity' => $value['quantity']]);   
                }
            }

            $name = $request->name;
            session()->forget('cart');
            return view('frontend.components.cart.confirmCheckout', compact('name'));
        } else {
            return redirect()->route('customer.product');
        }
    }
}
