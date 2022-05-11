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
    return view('front/pages/index/index');
});

Route::get('/cart', function () {
    return view('front/pages/cart/cart');
});

Route::get('/checkout', function () {
    return view('front/pages/checkout/checkout');
});

Route::get('/contacto', function () {
    return view('front/pages/contacto/contacto');
});

Route::get('/index', function () {
    return view('front/pages/index/index');
});

Route::get('/producto', function () {
    return view('front/pages/producto/producto');
});

Route::get('/productos', function () {
    return view('front/pages/productos/productos');
});

Route::get('/FAQS', function () {
    return view('front/pages/FAQS/FAQS');
});

Route::get('/admin-panel', function () {
    return view('admin/pages/admin-panel/admin-panel');
});



