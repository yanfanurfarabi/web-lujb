<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/product', function () {
    return view('page.product');
});

Route::get('/award', function () {
    return view('page.award');
});

Route::get('/profile', function () {
    return view('page.profile');
});

Route::get('/contact', function () {
    return view('page.contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('cms.dashboard');
});

Route::get('/dashboard/generaldata', function () {
    return view('cms.generalsdata');
});

Route::get('/dashboard/generalimage', function () {
    return view('cms.generalsimage');
});

Route::get('/dashboard/banner', function () {
    return view('cms.banners');
});

Route::get('/dashboard/product', function () {
    return view('cms.product');
});

Route::get('/dashboard/productcategory', function () {
    return view('cms.productcategory');
});

Route::get('/dashboard/footer', function () {
    return view('cms.footer');
});