<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use App\Models\General_Image;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Product;
use App\Models\Footer;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $datas = GeneralData::all();
        $imagecat = ['Home'];
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Home'];
        $banner = Banner::where('BannerCategory', $bannercat)->get();
        $products = Product::all();
        $footers = Footer::all();
        $client = Client::all();

        return view('page.home', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banner,
            'products' => $products,
            'footers' => $footers,
            'client' => $client,
        ]);
    }

}
