<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Storage;

class BannerController extends Controller
{
    public function index(){
        
        $banner = Banner::all();

        return view('cms.banners', compact('banner'));
    }

    public function create(){
        return view('cms.bannerscreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'bannercategory' => 'required',
        ]);

        // Proses upload image
        if ($request->hasFile('image')) {
            $bannerName = time() . '.' . $request->image->getClientOriginalextension();
            $request->image->storeAs('public/banners'.$bannerName);

            Banner::create([
                'name' => $request->name,
                'image' => $bannerName,
                'bannercategory' => $request->bannercategory
            ]);
        }

        return redirect()->route('cms.banners')->with('success', 'Banner created successfully.');
    }

    public function edit($id) {
        $banner = Banner::findOrFail($id);

        return view('cms.bannersedit', compact('banner'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'BannerCategory' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $banner = Banner::findOrFail($id);

        if($request->hasFile('image')){
            if($banner->image){
                Storage::delete('/public/img'. $banner->image);
            }
            $bannerName = time().'.'.$request->image->getClientOriginalextension();
            $request->image->storeAs('/public/img/'. $bannerName);
            $banner->image = $bannerName;
        }
        
        $banner->name = $request->name;
        $banner->save();
        
        return redirect()->route('banner')->with('success', 'updated');
    }
    }