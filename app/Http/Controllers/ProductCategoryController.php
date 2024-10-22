<?php

namespace App\Http\Controllers;

use App\Models\Product_Category;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index(){
        $productcat = Product_Category::all();

        return view('cms.productcategory', compact('productcat'));
    }

    public function create(){
        return view('cms.productcategorycreate');
    }

    public function store(Request $request){
        $request->validate([
            'category' => 'required',
            'isActive' => 'required',
            'sortOrder' => 'required',
        ]);

        Product_Category::create([
            'category' => $request->category,
            'isActive' => $request->isActive,
            'sortOrder' => $request->sortOrder,
        ]);

        return redirect()->route('productcategory.index')->with('success', 'Added new data!');
    }

    public function edit($id){
        $productcat = Product_Category::findOrFail($id);

        return view('cms.productcategoryedit', compact('productcat'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'category' => 'required',
            'isActive' => 'required',
            'sortOrder' => 'required',
        ]);

        $productcat = Product_Category::findOrFail($id);

        $productcat->category = $request->input('category');
        $productcat->isActive = $request->input('isActive');
        $productcat->sortOrder = $request->input('sortOrder');
        $productcat->save();

        return redirect()->route('productcategory.index')->with('Success!', 'Updated!');
    }

    public function destroy($id){
        $productcat = Product_Category::findOrFail($id);
        $productcat->delete();

        return redirect()->route('productcategory.index')->with('Success!', 'Update!');
    }
}
