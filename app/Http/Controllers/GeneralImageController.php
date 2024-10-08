<?php

namespace App\Http\Controllers;

use App\Models\General_Image;
use Illuminate\Http\Request;
use Storage;

class GeneralImageController extends Controller
{
    public function index(){
        $generalimage = General_Image::all();

        return view('cms.generalsimage', compact('generalimage'));
    }

    public function editImage($id){
        $generalimage = General_Image::findOrFail($id);

        return view('cms.generalsimageedit', compact('generalimage'));
    }

    public function updateImage($id, Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $generalimage = General_Image::find($id);

        if($request->hasFile('image')){
            if($generalimage->image){
                Storage::delete('public/img', $generalimage->image);
            }

            $generalimageNew = time().'.'.$request->image->extension();
            $request->image->storeAs('public/img', $generalimageNew);

            $generalimage->image = $generalimageNew;
        }

        $generalimage->name = $request->name;
        $generalimage->save();

        return redirect()->route('cms.general')->with('success', 'updated!');
    }
}
