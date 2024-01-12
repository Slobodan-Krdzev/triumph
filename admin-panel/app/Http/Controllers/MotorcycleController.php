<?php

namespace App\Http\Controllers;

use App\Models\Families;
use App\Models\MainCarousellItem;
use App\Models\Motorcycle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    public function create()
    {
        return view('layouts.create-moto');
    }

    public function listMoto()
    {
        $data = Motorcycle::get();
        return view('layouts.view-moto', ['data' => $data]);


        // $motorcycle = Motorcycle::all();

        // return response()->json($motorcycle);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Motorcycle::create($data);

        return redirect()->route('create-moto')->with('success', 'Motorcycle data stored successfully');


    }


    public function edit($id)
    {
        $moto = Motorcycle::findOrFail($id);
        return view('layouts.edit-moto', compact('moto'));
    }


    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'subFamilyCategory' => 'required|string|max:255',
    ]);

    $moto = Motorcycle::findOrFail($id);
    $moto->update($validatedData);

    return redirect()->back()->with('success', 'Moto updated successfully');
}






}
