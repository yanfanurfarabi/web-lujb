<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use App\Models\General_Image;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Footer;
use App\Models\Client;
use Illuminate\Http\Request;

class ProfilepageController extends Controller
{
    public function index(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['About Us'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['About Us'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $products = Product::all();
        $footers = Footer::all();
        $client = Client::all();

        return view('page.profile', [
            'datas' => $datas,
            'images' => $images,
            'banners' => $banners,
            'inquire' => $inquire,
            'products' => $products,
            'footers' => $footers,
            'client' => $client
        ]);
    }
}
