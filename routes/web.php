<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::group(['prefix' => 'panel'], function() {
Route::resource('hoadon',admin\HoaDonController::class);
Route::resource('danhmuc',admin\DanhMucController::class);
Route::resource('sanpham',admin\SanPhamController::class);
Route::resource('loaisp',admin\LoaiSPController::class);
Route::resource('nhacungcap',admin\NhaCungCapController::class);
Route::resource('users',admin\UsersController::class);
});


    Route::get('/panel/login','admin\CheckoutAdminController@login');

    Route::get('/panel/index','admin\CheckoutAdminController@index');

    Route::post('/panel/trangchu','admin\CheckoutAdminController@trangchu');

    Route::get('/panel/logout','admin\CheckoutAdminController@logout');

    Route::get('/panel/register','admin\CheckoutAdminController@register');
    
    Route::post('/panel/createAccount','admin\CheckoutAdminController@createAccount');





Route::group(['prefix' => 'user', 'namespace' => 'user'], function() {
    Route::get('index','PageController@index')->name('user.index');
    Route::get('single','PageController@single')->name('user.single');
    Route::get('single/{id}','PageController@single')->name('user.single');
    Route::get('product', 'PageController@product')->name('user.product');
    Route::get('product1/{id}', 'PageController@product1')->name('user.product1');
    Route::get('product2/{id}', 'PageController@product2')->name('user.product2');
    Route::get('contact','PageController@contact')->name('user.contact');
    Route::get('about','PageController@about')->name('user.about');
    
});


Route::post('/save-cart','user\CartController@save_cart');
Route::get('/show_cart','user\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','user\CartController@delete_to_cart');
Route::post('/update-cart-quantity','user\CartController@update_cart_quantity');


Route::get('/login-checkout','admin\CheckoutController@login_checkout');
Route::get('/logout-checkout','admin\CheckoutController@logout_checkout');
Route::post('/login-customer','admin\CheckoutController@login_customer');
Route::post('/login-customer-shop','admin\CheckoutController@login_customer_shop');
Route::get('/register','admin\CheckoutController@register');
Route::post('/add-user','admin\CheckoutController@add_user');
Route::post('/add-user-shop','admin\CheckoutController@add_user_shop');
Route::get('/checkout','admin\CheckoutController@checkout');
Route::post('/save-checkout-customer','admin\CheckoutController@save_checkout_customer');
Route::get('/bill','admin\CheckoutController@bill');
Route::get('/index','admin\CheckoutController@index');




