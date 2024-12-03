<?php

namespace App\Http\Controllers;

use App\Models\General_Image;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
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
            'category' => 'required'
        ]);

        $file = $request->file('image');
        $originalName = $file->getClientOriginalName();
        $destinationPath = public_path('storage/img/GeneralImage/');
        $file->move($destinationPath, $originalName);

        General_Image::create([
            'name' => $request->name,
            'image' => $originalName,
            'isActive' => $request->isActive,
            'category' => $request->category,
        ]);
        
        // if ($request->hasFile('image')) {
        //     $imageName = time().'.'.$request->image->getClientOriginalextension();
        //     $request->image->storeAs('/public/img/GeneralImage/'. $imageName);

        //     General_Image::create([
        //         'name' => $request->name,
        //         'image' => $imageName,
        //         'isActive' => $request->isActive,
        //         'category' => $request->category,
        //     ]);
        // }   
            
        return redirect()->route('generalimage.index')->with('success', 'Banner created successfully.');
    }

    public function edit($id){
        $image = General_Image::findOrFail($id);

        return view('cms.generalsimageedit', compact('image'));
    }

    public function update($id, Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'isActive' => 'nullable',
            'category' => 'nullable',
        ]);

        $image = General_Image::find($id);

        if($request->hasFile('image')){
            if($image->image){
                Storage::delete('/public/img/GeneralImage/'. $image->image);
            }
            $file = $request->file('image');
            $originalName = $file->getClientOriginalName();
            $destinationPath = public_path('storage/img/GeneralImage/');
            $file->move($destinationPath, $originalName);

            $image->image = $originalName;

            // $imageName = time().'.'.$request->image->getClientOriginalextension();
            // $request->image->storeAs('/public/img/GeneralImage/'. $imageName);
            // $image->image = $imageName;
        }

        $image->isActive = $request->isActive;
        $image->category = $request->category;
        $image->save();

        return redirect()->route('generalimage.index')->with('success', 'updated!');
    }

    public function destroy($id){
        $image = General_Image::findOrFail($id);
        $image->delete();

        return redirect()->route('generalimage.index')->with('success', 'Deleted!');
    }
}
