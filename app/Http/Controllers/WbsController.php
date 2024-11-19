<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use App\Models\General_Image;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Footer;
use Illuminate\Http\Request;

class WbsController extends Controller
{
    public function index(){
        $datas = GeneralData::all();
        $bannercat = ['WBS'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $products = Product::all();
        $footers = Footer::all();

        return view('page.wbs', [
            'datas' => $datas,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }
}
