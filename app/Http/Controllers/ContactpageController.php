<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use App\Models\General_Image;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Footer;
use Illuminate\Http\Request;

class ContactpageController extends Controller
{
    public function index(){
        $datas = GeneralData::all();
        $images = General_Image::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $bannercat = ['Contact Us'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $products = Product::all();
        $footers = Footer::all();

        return view('page.contact', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }
}
