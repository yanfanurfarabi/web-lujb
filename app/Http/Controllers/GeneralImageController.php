<?php

namespace App\Http\Controllers;

use App\Models\General_Image;
use Illuminate\Http\Request;
use Storage;

class GeneralImageController extends Controller
{
    public function index(){
        $image = General_Image::all();

        return view('cms.generalsimage', compact('image'));
    }

    public function create(){
        return view('cms.generalsimagecreate');
    }

    public function store(Request $request){
        
        // dd ($request->all());
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'isActive' => 'nullable',
        ]);
        
        // // Proses upload image
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalextension();
            $request->image->storeAs('/public/img/'. $imageName);

            Banner::create([
                'name' => $request->name,
                'image' => $imageName,
                'isActive' => $request->isActive,
            ]);
        }   
            
        return redirect()->route('index')->with('success', 'Banner created successfully.');
    }

    public function edit($id){
        $image = General_Image::findOrFail($id);

        return view('cms.generalsimageedit', compact('image'));
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = General_Image::find($id);

        if($request->hasFile('image')){
            if($image->image){
                Storage::delete('/public/img'. $image->image);
            }
            $imageName = time().'.'.$request->image->getClientOriginalextension();
            $request->image->storeAs('/public/img/'. $imageName);

            $image->image = $imageName;
        }

        $image->name = $request->name;
        $image->save();

        return redirect()->route('image')->with('success', 'updated!');
    }

    public function destroy($id){
        $image = General_Image::findOrFail($id);
        $image->delete();

        return redirect()->route('index')->with('success', 'Deleted!');
    }
}
