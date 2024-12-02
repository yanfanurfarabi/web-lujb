<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Storage;

class ClientController extends Controller
{
    public function index(){
        $client = Client::all();

        return view('cms.client', compact('client'));
    }

    public function create(){
        return view('cms.clientcreate');
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
            $clientName = time().'.'.$request->image->getClientOriginalextension();
            $request->image->storeAs('/public/img/'. $clientName);

            Client::create([
                'name' => $request->name,
                'image' => $clientName,
                'isActive' => $request->isActive,
            ]);
        }   
            
        return redirect()->route('client.index')->with('success', 'Client created successfully.');
    }

    public function edit($id){
        $client = Client::findOrFail($id);

        return view('cms.clientedit', compact('client'));
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'isActive' => 'nullable',
        ]);

        $client = Client::find($id);

        if($request->hasFile('image')){
            if($client->image){
                Storage::delete('/public/img/'. $client->image);
            }
            $clientName = time().'.'.$request->image->getClientOriginalextension();
            $request->image->storeAs('/public/img/'. $clientName);

            $client->image = $clientName;
        }

        $client->isActive = $request->isActive;
        $client->name = $request->name;
        $client->save();

        return redirect()->route('client.index')->with('success', 'updated!');
    }

    public function destroy($id){
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('client.index')->with('success', 'Deleted!');
    }
}
