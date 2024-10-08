<?php

namespace App\Http\Controllers;
use App\Models\GeneralData;
use Illuminate\Http\Request;

class GeneraldataController extends Controller
{
    public function indexData(){
        $datas = GeneralData::all();
        // $titles = GeneralData::where('name');
        // $values = GeneralData::where('value');

        return view('cms.generalsdata', compact('datas'));
    }

    public function editData($id){
        $datas = GeneralData::findOrFail($id);

        return view('cms.generalsdata', compact('datas'));
    }

    public function updateData($id, Request $request){
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);

        $datas = GeneralData::findOrFail($id);

        $datas->name = $request->input('name');
        $datas->value = $request->input('value');
        $datas->save();

        return redirect()->route('cms.generalsdata')->with('success', 'updated!');
    }

}
