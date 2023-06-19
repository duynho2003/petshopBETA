<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Trait\UpLoadImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class InforController extends Controller
{
    use UpLoadImage;
    public function infoCustomer() {
        $user = auth()->user();
        return view('frontend.components.user.inforUser', compact('user'));
    }

    public function updateInfoCustomer(Request $request, $id) {

        try {
            DB::beginTransaction();
            $dataCustomerUpdate = [
                'name' => $request->name,
                'phone' => $request->phone,
                'birthday' => $request->birthday,
                'sex' => $request->sex,
                'address_1' =>$request->address,
            ];

            // xử lý ảnh feature
            
            $dataUpdateAvatarCustomer = $this->TraitUpLoadFile($request, 'avatar', 'assetFE/images/user');

            if(!empty($dataUpdateAvatarCustomer)) {
                $dataCustomerUpdate['image_name'] = $dataUpdateAvatarCustomer['image_name'];
                $dataCustomerUpdate['avatar'] = $dataUpdateAvatarCustomer['image_path'];
            }
            $user = User::find($id)->update($dataCustomerUpdate);

            DB::commit();
            return redirect()->route('customer.infoCustomer');
            
        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }
    }

    public function infoCart($id) {
        $orders = Order::where("user_id", $id)->paginate(5);
        return view('frontend.components.user.inforCart', compact('orders'));
    }

    public function infoCartDetail($id) {
        $order = Order::find($id);
        $listProduct = DB::table('order_products')
                                    ->join('products', 'order_products.product_id', '=', 'products.id')
                                    ->select('order_products.quantity','order_products.order_id', 'products.name', 'products.promotion_price')
                                    ->get();
        $productItem = $listProduct->where('order_id', $id);
        // dd($productItem);
        return view('frontend.components.user.inforCartDetail', compact('order','productItem'));
    }

    public function infoCartDetailCancel($id) {
        
        $order = Order::find($id)->update([
            'status' => "cancel",
        ]);
        return redirect()->back();
    }

    public function infoCartSearch(Request $request) {
        if ($request->has('search')) {
            $orders = Order::search($request->search)->get();
        } elseif ($request->has('create_date')) {
            $date = Carbon::parse($request->create_date)->format("Y-m-d");
            $orders = DB::table('orders')->whereDate('created_at', $date)->get();
        } else {
            $order = Order::get();
        }
        return view('frontend.components.user.inforCartSearch', compact('orders'));
    }
}
