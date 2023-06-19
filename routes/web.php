<?php


use App\Http\Controllers\FrontEnd\AuthenicateController;
use App\Http\Controllers\FrontEnd\CartController;
use App\Http\Controllers\FrontEnd\ForgotPasswordController;
use App\Http\Controllers\FrontEnd\InforController;
use App\Http\Controllers\FrontEnd\RenderProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home'); 
Route::get('/product', [HomeController::class, 'product'])->name('customer.product'); 
Route::post('/search', [HomeController::class, 'search'])->name('customer.search'); 
Route::get('/detail/{id}/detail', [HomeController::class, 'detail'])->name('customer.detail'); 
Route::get('/contact', [HomeController::class, 'contact'])->name('customer.contact');

Route::get('/dog-list', [HomeController::class, 'doglist'])->name('doglist');

Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::get('/adoption', [HomeController::class, 'adoption'])->name('adoption');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/blogdetails1', [HomeController::class, 'blogdetails1'])->name('blogdetails1');

Route::get('/blogdetails2', [HomeController::class, 'blogdetails2'])->name('blogdetails2');

Route::get('/blogdetails3', [HomeController::class, 'blogdetails3'])->name('blogdetails3');

Route::get('/forgot', [AuthenticateController::class, 'forgot'])->name('forgot');


// render product view

Route::get('/category-product-laptop', [RenderProductController::class, 'categoryProductLaptop'])->name('customer.categoryProductLaptop'); 
Route::get('/category-product-pc', [RenderProductController::class, 'categoryProductPC'])->name('customer.categoryProductPC'); 
Route::get('/category-product-monitor', [RenderProductController::class, 'categoryProductMonitor'])->name('customer.categoryProductMonitor'); 
Route::get('/category-product-keyboard', [RenderProductController::class, 'categoryProductKeyboard'])->name('customer.categoryProductKeyboard'); 
Route::get('/category-product-mouse', [RenderProductController::class, 'categoryProductMouse'])->name('customer.categoryProductMouse'); 



// Cart
Route::get('/cart', [CartController::class, 'cart'])->name('customer.cart'); 
Route::get('/add-cart/{id}', [CartController::class, 'addCart'])->name('customer.addCart'); 
Route::get('/update-cart', [CartController::class, 'updateCart'])->name('customer.updateCart'); 
Route::get('/delete-cart/{id}', [CartController::class, 'deleteCart'])->name('customer.deleteCart'); 



// Xử lí register
Route::get('/register', [AuthenicateController::class, 'register'])->name('customer.register');
Route::post('/register', [AuthenicateController::class, 'processRegister'])->name('customer.processRegister');

// Xử lí verifies email
Route::get('/verify-account/{token}', [AuthenicateController::class, 'verifyAccount'])->name('customer.verifyAccount');

// Xử lí login
Route::get('/login', [AuthenicateController::class, 'login'])->name('customer.login');

// Xử lí forgot password
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('customer.forgotPassword');
Route::post('/forgot-password', [ForgotPasswordController::class, 'processForgotPassword'])->name('customer.processForgotPassword');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('customer.resetPassword');
Route::post('/reset-password', [ForgotPasswordController::class, 'processResetPassword'])->name('customer.processResetPassword');

// Xử lí logout
Route::get('logout', [AuthenicateController::class, 'logout'])->name('customer.logout');

Route::post('/login', [AuthenicateController::class, 'processLogin'])->name('customer.processLogin');   

Route::middleware(['auth','user.isVerifiedEmail'])->group(function() {

    // xử lý check out
    Route::get('/check-out', [CartController::class, 'checkout'])->name('customer.checkout'); 
    Route::post('/check-out', [CartController::class, 'processCheckout'])->name('customer.processCheckout'); 

    //xử lý infor
    Route::get('infor', [InforController::class, 'infoCustomer'])->name('customer.infoCustomer'); 
    Route::post('infor-user/{id}', [InforController::class, 'updateInfoCustomer'])->name('customer.updateInfoCustomer');
    Route::get('infor-cart/{id}/infor-cart', [InforController::class, 'infoCart'])->name('customer.infoCart'); 
    Route::get('infor-cart/{id}/infor-cart-detail', [InforController::class, 'infoCartDetail'])->name('customer.infoCartDetail');
    Route::get('infor-cart-cancel/{id}/infor-cart-detail-cancel', [InforController::class, 'infoCartDetailCancel'])->name('customer.infoCartDetailCancel');
    Route::post('infor-cart-search', [InforController::class, 'infoCartSearch'])->name('customer.infoCartSearch'); 
});


