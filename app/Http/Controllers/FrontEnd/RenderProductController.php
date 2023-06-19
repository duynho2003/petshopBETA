<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class RenderProductController extends Controller
{
    public function categoryProductLaptop() {
        $max_price = Product::max('normal_price');
        $max_price_range = $max_price + 10000000;
        $min_price = Product::min('normal_price');
        $min_price_range = $min_price - $min_price;
        $products = Product::where("category_id", 1)->where("active", 1)->latest()->paginate(8);
        return view('frontend.components.home.product', compact('products','max_price','min_price','max_price_range','min_price_range'));    
    }

    public function categoryProductPC() {
        $max_price = Product::max('normal_price');
        $max_price_range = $max_price + 10000000;
        $min_price = Product::min('normal_price');
        $min_price_range = $min_price - $min_price;
        $products = Product::where("category_id", 2)->where("active", 1)->latest()->paginate(8);
        return view('frontend.components.home.product', compact('products','max_price','min_price','max_price_range','min_price_range'));    
    }

    public function categoryProductMonitor() {
        $max_price = Product::max('normal_price');
        $max_price_range = $max_price + 10000000;
        $min_price = Product::min('normal_price');
        $min_price_range = $min_price - $min_price;
        $products = Product::where("category_id", 3)->where("active", 1)->latest()->paginate(8);
        return view('frontend.components.home.product', compact('products','max_price','min_price','max_price_range','min_price_range'));    
    }

    public function categoryProductKeyboard() {
        $max_price = Product::max('normal_price');
        $max_price_range = $max_price + 10000000;
        $min_price = Product::min('normal_price');
        $min_price_range = $min_price - $min_price;
        $products = Product::where("category_id", 4)->where("active", 1)->latest()->paginate(8);
        return view('frontend.components.home.product', compact('products','max_price','min_price','max_price_range','min_price_range'));    
    }

    public function categoryProductMouse() {
        $max_price = Product::max('normal_price');
        $max_price_range = $max_price + 10000000;
        $min_price = Product::min('normal_price');
        $min_price_range = $min_price - $min_price;
        $products = Product::where("category_id", 5)->where("active", 1)->latest()->paginate(8);
        return view('frontend.components.home.product', compact('products','max_price','min_price','max_price_range','min_price_range'));    
    }

}
