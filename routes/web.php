<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\GeneraldataController;
use App\Http\Controllers\GeneralImageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Models\Banner;
use App\Models\General_Image;
use App\Models\GeneralData;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Storage;

// Route::get('/', function() {
//     $datas = GeneralData::all('value');

//     return view('page.home',[
//         'datas' => $datas,
//     ]);
// });

Route::get('/', [GeneraldataController::class, 'home']);

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

//View, Edit & update General Data
// Route::get('/dashboard/generaldata/', [GeneraldataController::class, 'index'])->name('datas');
// Route::get('/dashboard/generaldata/{id}/edit',[GeneraldataController::class, 'edit'])->name('datas.edit');
// Route::put('/dashboard/generaldata/{id}/', [GeneraldataController::class, 'update'])->name('datas.update');
// Route::delete('/dashboard/generaldata/{id}/', [GeneraldataController::class, 'destroy'])->name('datas.destroy');
// Route::get('/dashboard/generaldata/create/' ,[GeneraldataController::class, 'create'])->name('datas.create');
// Route::post('/dashboard/generaldata/', [GeneraldataController::class, 'store']);

Route::resource('/dashboard/generaldata/', GeneraldataController::class);

// Route::resource('/dashboard/generaldata/', GeneraldataController::class)
//                 ->missing(function(Request $request){
//                     return redirect::route('cms.generalsdata');
//                 });

// Route::resource('/dashboard/generaldata/', GeneraldataController::class)->withTrashed();
                
//View, Edit & update General Image
Route::get('/dashboard/generalimage/', [GeneralImageController::class, 'index'])->name('image');
Route::get('/dashboard/generalimage/{id}/edit', [GeneralImageController::class, 'edit'])->name('image.edit');
Route::put('/dashboard/generalimage/{id}', [GeneralImageController::class, 'update'])->name('image.update');

//View, Edit & update Banners 
Route::get('/dashboard/banner', [BannerController::class, 'index'])->name('banner');
Route::get('/dashboard/banner/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::put('/dashboard/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
// Route::post('/');

Route::get('/dashboard/footer', [FooterController::class, 'index'])->name('footer');
Route::get('/dashboard/footer/{id}/edit', [FooterController::class, 'edit'])->name('footer.edit');
Route::put('/dashboard/footer/{id}', [FooterController::class, 'update'])->name('footer.update');

Route::resource('/dashboard/product', ProductController::class);

Route::get('/dashboard/productcategory', function () {
    return view('cms.productcategory');
});

Route::get('/dashboard/home', function () {
    return view('cms.home');
});