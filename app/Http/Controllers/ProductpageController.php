<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use App\Models\General_Image;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Footer;
use Illuminate\Http\Request;

class ProductpageController extends Controller
{
    public function index(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['Product'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Product'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $products = Product::all();
        $footers = Footer::all();

        return view('page.product', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }

    public function indexFuel(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['Product'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Product'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $category = ['Fuel Pump'];
        $products = Product::where('category', $category)->get();
        $footers = Footer::all();

        return view('page.product', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }

    public function indexATG(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['Product'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Product'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $category = ['Guihe ATG'];
        $products = Product::where('category', $category)->get();
        $footers = Footer::all();

        return view('page.product', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }

    public function indexHose(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['Product'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Product'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $category = ['Dantec Composite Hose'];
        $products = Product::where('category', $category)->get();
        $footers = Footer::all();

        return view('page.product', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }

    public function indexSTP(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['Product'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Product'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $category = ['Red Robe'];
        $products = Product::where('category', $category)->get();
        $footers = Footer::all();

        return view('page.product', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }

    public function indexLCP(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['Product'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Product'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $category = ['LCP Flowmeters'];
        $products = Product::where('category', $category)->get();
        $footers = Footer::all();

        return view('page.product', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }

    public function indexHalock(){
        $datas = GeneralData::all();
        $inquiry = ['General'];
        $inquire = General_Image::where('category', $inquiry)->get();
        $imagecat = ['Product'];
        $images = General_Image::where('category', $imagecat)->get();
        $bannercat = ['Product'];
        $banners = Banner::where('BannerCategory', $bannercat)->get();
        $category = ['Halock Polythlyene Flexible Pipes'];
        $products = Product::where('category', $category)->get();
        $footers = Footer::all();

        return view('page.product', [
            'datas' => $datas,
            'images' => $images,
            'inquire' => $inquire,
            'banners' => $banners,
            'products' => $products,
            'footers' => $footers
        ]);
    }

    public function show($name){
        $productdesc = Product::where('name', $name)->firstOrFail();

        return view ('page.productdesc', compact('productdesc'));
    }

    // public function showHose($category){
    //     $producthose = Product::where('category', $category)->firstOrFail();

    //     return view ('page.productdesc', compact('producthose'));
    // }

    // public function showATG($category){
    //     $productatg = Product::where('category', $category)->firstOrFail();

    //     return view ('page.productdesc', compact('productatg'));
    // }

    // public function showpanel($category){
        
    //     $producthose = Product::where('category', $category)->firstOrFail();

    //     return view ('page.productdesc', compact('producthose'));
    // }

    // public function indexFuel(){
    //     $category = 'Fuel Pump';
    //     $products_fuel = Product::where('category', $category)->firstOrFail();

    //     return view('page.productdesc', compact('products_fuel'));
    // }
}
