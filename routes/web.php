<?php

use App\Http\Controllers\api\CategoryController;
use Illuminate\Support\Facades\Route;

/**
 * Роуты api.
 */
Route::get('/categoryAll', [CategoryController::class, 'apiCategoryAll']);

Route::get('/listing/{name}', function ($name) {
    return view('pages/listing');
})->where('name', '[A-Za-z]+');


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
