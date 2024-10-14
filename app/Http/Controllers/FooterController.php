<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $footer = Footer::all();

        return view('cms.footer', compact('footer'));
    }

    public function edit($id){
        $footer = Footer::findOrFail($id);

        return view('cms.footeredit', compact('footer'));
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);

        $footer = Footer::findOrFail($id);

        $footer->name = $request->input('name');
        $footer->value = $request->input('value');
        $footer->save();

        return redirect()->route('footer')->with('success', 'updated!');
    }
}
