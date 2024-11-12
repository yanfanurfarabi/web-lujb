<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\GeneraldataController;
use App\Http\Controllers\GeneralImageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ServicepageController;
use App\Http\Controllers\ProfilepageController;
use App\Http\Controllers\ProductpageController;
use App\Http\Controllers\ContactpageController;
use App\Models\Banner;
use App\Models\General_Image;
use App\Models\GeneralData;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// Route::get('/', [GeneraldataController::class, 'show'])->name('datas');

Route::get('/', [HomepageController::class, 'index'])->name('data');

Route::get('/services', [ServicepageController::class, 'index'])->name('data');

Route::get('/profile', [ProfilepageController::class, 'index'])->name('data');

Route::get('/contact', [ContactpageController::class, 'index'])->name('data');

Route::get('/product', [ProductpageController::class, 'index'])->name('data');

Route::get('/product/{name}', [ProductPageController::class, 'show'])->name('product');

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('cms.dashboard');
});

//View, Edit & update General Data
Route::resource('dashboard/generaldata', GeneraldataController::class);
                
//View, Edit & update General Image
Route::resource('dashboard/generalimage', GeneralImageController::class);

//View, Edit & update Banners 
Route::resource('dashboard/banner', BannerController::class);

//View, Edit & update Footer 
Route::resource('dashboard/footer', FooterController::class);

Route::resource('/dashboard/product', ProductController::class);

Route::resource('/dashboard/productcategory', ProductCategoryController::class);

Route::get('/dashboard/home', function () {
    return view('cms.home');
});