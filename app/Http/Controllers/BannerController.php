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

    public function store(Request $request){

        // dd ($request->all());
        $request->validate([
            'name' => 'required',
            'BannerCategory' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        // // Proses upload image
        if ($request->hasFile('image')) {
            $bannerName = time().'.'.$request->image->getClientOriginalextension();
            $request->image->storeAs('/public/img/Banner/'. $bannerName);

            Banner::create([
                'name' => $request->name,
                'BannerCategory' => $request->BannerCategory,
                'image' => $bannerName,
            ]);
        }

        // $path = $request->file('image')->store('/public/img/');
            
            
        return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
    }

    public function edit($id) {
        $banner = Banner::findOrFail($id);

        return view('cms.bannersedit', compact('banner'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $banner = Banner::findOrFail($id);

        if($request->hasFile('image')){
            if($banner->image){
                Storage::delete('/public/img/Banner/'. $banner->image);
            }
            $bannerName = time().'.'.$request->image->getClientOriginalextension();
            $request->image->storeAs('/public/img/Banner/'. $bannerName);
            $banner->image = $bannerName;
        }
        
        $banner->save();
        
        return redirect()->route('banner.index')->with('success', 'updated');
    }

    public function destroy($id){
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('banner.index')->with('sucess', 'Deleted!');
    }
    }