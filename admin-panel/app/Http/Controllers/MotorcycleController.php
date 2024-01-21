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
        return view('layouts.create-moto',);
    }

    public function listMoto(Request $request)
    {
        $data = Motorcycle::get();
        return view('layouts.view-moto', ['data' => $data]);


        $motorcycle = Motorcycle::all();

        return response()->json($motorcycle);

        $category = $request->input('category');

        $motorcycles = Motorcycle::when($category, function ($query) use ($category) {
            return $query->where('category', $category);
        })->get();

        return response()->json($motorcycles);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Motorcycle::create($data);

        return redirect()->route('create-moto')->with('success', 'Motorcycle data stored successfully');


    }


    public function edit($id, $category)
    {
        // $moto = Motorcycle::findOrFail($id);
        // return view('layouts.edit-moto', compact('moto'));

        $moto = Motorcycle::findOrFail($id);

        // Adjust the view based on the category
        $view = match ($category) {
            'classics' => 'layouts.edit-classics',
            'roadster' => 'layouts.edit-roadster',
            'adventure' => 'layouts.edit-adventure',
            'rocket-3' => 'layouts.edit-rocket-3',
            default => 'layouts.edit-default',
        };

        return view($view, ['moto' => $moto]);
    }


    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'subFamilyCategory' => 'required|string|max:255',
        'specs.cc' => 'nullable|string|max:255',
        'specs.hp' => 'nullable|string|max:255',
        'specs.torque' => 'nullable|string|max:255',
    ]);

    $moto = Motorcycle::findOrFail($id);
    $moto->update($validatedData);

    return redirect()->back()->with('success', 'Moto updated successfully');
}







}
