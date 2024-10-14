<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();

        return view ('cms.product', compact('product'));
    }

    public function create(){
        return view('cms.productcreate');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'desc' => ' required',
            'spec' => 'nullable',
            'bannerimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->hasFile('bannerimage')){
            $bannerimage = time().".".$request->image->getClientOriginalextension();
            $request->image->storeAs('public/product'.$bannerimage);
            
            Product::create([
                'name' => $request->name,
                'spec' => $request->spec,
                'desc' => $request->desc,
                'bannerimage' => $bannerimage,
            ]);
        }

        return redirect()->route('cms.product')->with('success', 'Added!');
    }

    public function edit($id){
        $product = Product::findOrFail($id);

        return view('cms.productedit', compact('edit'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        $product = Product::findOrFail($id);

        if($request->hasFile('image')){
            if($product->image){
                Storage::delete('public/img'. $product->image);
            }
            $bannerimage = time().".".$request->image->getClientOriginalextension();
            $request->image->storeAs('public/img');
            $product->image = $bannerimage;
        }

        $product->name = $request->name;
        $product->save();

        return redirect()->route('cms.product')->with('success', 'Updated!');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('cms.product')->with('success', 'Deleted!');
    }
}
