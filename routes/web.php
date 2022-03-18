<?php

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
    return view('index');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/cart', function () {
    return view('pages/cart');
});

Route::get('/contacts', function () {
    return view('pages/contacts');
});

Route::get('/delivery', function () {
    return view('pages/delivery');
});

Route::get('/checkout', function () {
    return view('pages/checkout');
});

Route::get('/listing', function () {
    return view('pages/listing');
});

Route::get('/product', function () {
    return view('pages/product');
});

Route::get('/sitemap', function () {
    return view('pages/sitemap');
});


Route::get('/order', function () {
    return view('pages/order');
});

Route::get('/orders', function () {
    return view('pages/orders');
});
