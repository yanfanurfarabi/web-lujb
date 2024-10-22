<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use Illuminate\Http\Request;

class GeneraldataController extends Controller
{
    public function index(){
        $datas = GeneralData::all();

        return view('cms.generalsdata', compact('datas'));
    }

    public function create(){
        return view('cms.generalsdatacreate');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);

        GeneralData::create([
            'name' => $request->name,
            'value' => $request->value,
        ]);

        return redirect()->route('generaldata.index')->with('success', 'Added!');
    }

    public function edit($id){
        $datas = GeneralData::findOrFail($id);

        return view('cms.generalsdataedit', compact('datas'));
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);

        $datas = GeneralData::findOrFail($id);

        $datas->name = $request->input('name');
        $datas->value = $request->input('value');
        $datas->save();

        return redirect()->route('generaldata.index')->with('success', 'updated!');
    }

    public function destroy($id){
        $datas = GeneralData::findOrFail($id);
        $datas->delete();

        return redirect()->route('generaldata.index');
    }

}
