<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Product;
use App\Models\Slider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::where("active", 1)->get();
        $products = Product::where("active",1)->inRandomOrder()->limit(10)->get();
        return view('fe.index', compact('sliders','products'));
    }

    public function product()
    {
        $max_price = Product::max('normal_price');
        $max_price_range = $max_price + 10000000;
        $min_price = Product::min('normal_price');
        $min_price_range = $min_price - $min_price;
        $categories = Category::where("active", 1)->get();
        $products = Product::where('active',1)->inRandomOrder()->paginate(20);  
        return view('frontend.components.home.product', compact('categories','products','max_price','min_price','max_price_range','min_price_range'));
    }

    public function detail($id)
    {
        $spec_laptop = $spec_pc = $spec_monitor = $spec_keyboard = $spec_mouse = null;
        $product = Product::find($id); 
        $productType = $product->type_id;
        switch ($productType) {
            case 1:
                $spec_laptop = $product->specLaptop;
                break;
            case 2:
                $spec_pc = $product->specPC;
                break;
            case 3:
                $spec_monitor = $product->specMonitor;
                break;
            case 4:
                $spec_keyboard = $product->specKeyBoard;
                break;
            case 5:
                $spec_mouse = $product->specMouse;
                break;
            default: break;
        }        
        return view('frontend.components.home.detail', compact('product','spec_laptop','spec_pc','spec_monitor','spec_keyboard','spec_mouse'));
    } 

    public function search(Request $request) {
        
        if ($request->has('search')) {
            $products = null;
            switch ($request->type) {
                case 0:
                    $products = Product::search($request->search)->get();
                    break;
                case 1:
                    $products = Product::search($request->search)->where("category_id",1)->get();
                    break;
                case 2:
                    $products = Product::search($request->search)->where("category_id",2)->get();
                    break;
                case 3:
                    $products = Product::search($request->search)->where("category_id",3)->get();
                    break;
                case 4:
                    $products = Product::search($request->search)->where("category_id",4)->get();
                    break;
                case 5:
                    $products = Product::search($request->search)->where("category_id",5)->get();
                    break;
                default: break;
            }
        } elseif ($request->has('max_price') && $request->has('min_price')) {
            $products = Product::whereBetween('promotion_price', [$request->max_price, $request->min_price])->get();
        } else {
            $products = Product::get();
        }
        return view('frontend.components.home.search', compact('products'));
    }
 
    public function doglist() 
    {
        return view("fe.dog");
    }

    public function shop() 
    {
        return view("fe.shop");
    }

    public function adoption() 
    {
        return view("fe.adoption");
    }

    public function contact() 
    {
        return view("fe.contact");
    }

    public function blogdetails1() 
    {
        return view("fe.blogdetails1");
    }

    public function blogdetails2() 
    {
        return view("fe.blogdetails2");
    }

    public function blogdetails3() 
    {
        return view("fe.blogdetails3");
    }
}
