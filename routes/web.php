<?php

use App\Http\Controllers\GeneraldataController;
use App\Http\Controllers\GeneralImageController;
use App\Models\General_Image;
use App\Models\GeneralData;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/product', function () {
    return view('page.product');
});

Route::get('/services', function () {
    return view('page.services');
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

Route::get('/dashboard/generaldata/', [GeneraldataController::class, 'indexData'])->name('datas.index');
Route::get('/dashboard/generaldata/{id}/edit',[GeneraldataController::class, 'editData'])->name('datas.edit');
Route::put('/dashboard/generaldata/{id}', [GeneraldataController::class, 'updateData'])->name('datas.update');

//View, Edit & update 
Route::get('/dashboard/generalimage', [GeneralImageController::class, 'index'])->name('generalimage');
Route::get('/dashboard/generalimage/{id}/edit', [GeneralImageController::class, 'editImage'])->name('generalimage.edit');
Route::put('/dashboard/generalimage/{id}', [GeneralImageController::class, 'updateImage'])->name('generalimage.update');

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

Route::get('/dashboard/home', function () {
    return view('cms.home');
});