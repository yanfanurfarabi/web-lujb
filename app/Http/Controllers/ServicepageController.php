<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use App\Models\General_Image;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Footer;
use Illuminate\Http\Request;

class ServicepageController extends Controller
{
    public function index(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['Service'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Service'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $products = Product::all();
        $footers = Footer::all();

        return view('page.services', [
            'datas' => $datas,
            'images' => $images,
            'banners' => $banners,
            'inquire' => $inquire,
            'products' => $products,
            'footers' => $footers
        ]);
    }
}
