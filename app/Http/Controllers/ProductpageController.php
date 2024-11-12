<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use App\Models\General_Image;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\Footer;
use Illuminate\Http\Request;

class ProductpageController extends Controller
{
    public function index(){
        $datas = GeneralData::all();
        $images = General_Image::all();
        $banners = Banner::all();
        $products = Product::all();
        $productscat = Product_Category::all();
        $footers = Footer::all();

        return view('page.product', [
            'datas' => $datas,
            'images' => $images,
            'banners' => $banners,
            'products' => $products,
            'productscat' => $productscat,
            'footers' => $footers
        ]);
    }
    public function show($name){
        $product = Product::where('name', $name)->firstOrFail();

        return view ('page.productdesc', compact('product'));
    }

    public function showHose($category){
        $producthose = Product::where('category', $category)->firstOrFail();

        return view ('page.productdesc', compact('producthose'));
    }

    public function showATG($category){
        $productatg = Product::where('category', $category)->firstOrFail();

        return view ('page.productdesc', compact('productatg'));
    }

    public function showpanel($category){
        $producthose = Product::where('category', $category)->firstOrFail();

        return view ('page.productdesc', compact('producthose'));
    }
}
