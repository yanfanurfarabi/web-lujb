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

        // dd ($request->all());
        $request->validate([
            'name' => 'required',
            'desc' => ' required',
            'spec' => 'nullable',
            'sortOrder' => 'nullable',
            'isActive' => 'nullable',
            'bannerimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->hasFile('bannerimage')){
            $ProductName = time().".".$request->bannerimage->getClientOriginalextension();
            $request->bannerimage->storeAs('/public/img/'. $ProductName);
            
            Product::create([
                'name' => $request->name,
                'spec' => $request->spec,
                'desc' => $request->desc,
                'sortOrder' => $request->sortOrder,
                'isActive' => $request->isActive,
                'bannerimage' => $ProductName,
            ]);
        }

        return redirect()->route('product.index')->with('success', 'Added!');
    }

    public function edit($id){
        $product = Product::findOrFail($id);

        return view('cms.productedit', compact('product'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'desc' => ' required',
            'spec' => 'nullable',
            'sortOrder' => 'nullable',
            'isActive' => 'nullable',
            'bannerimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $product = Product::findOrFail($id);

        if($request->hasFile('bannerimage')){
            if($product->image){
                Storage::delete('/public/img/'. $product->image);
            }
            $bannerimage = time().".".$request->image->getClientOriginalextension();
            $request->image->storeAs('/public/img/'. $bannerimage);
            $product->image = $bannerimage;
        }

        $product->name = $request->name;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Updated!');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Deleted!');
    }
}
