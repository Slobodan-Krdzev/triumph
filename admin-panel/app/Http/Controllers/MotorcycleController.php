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

        // return response()->json($motorcycles);
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

        $view = match ($category) {
            'classics' => 'layouts.edit-classics',
            'roadsters' => 'layouts.edit-roadster',
            'adventure' => 'layouts.edit-moto-default',
            'rocket-3' => 'layouts.edit-rocket-3',
            'sport' => 'layouts.edit-sport',
            'off-road' => 'layouts.edit-off-road',
            default => 'layouts.edit-default',
        };

        return view($view, ['moto' => $moto]);
    }


    public function updateImage(Request $request, Motorcycle $motorcycle)
    {
        $request->validate([
            'image' => 'required|image|max:2048', // Example validation rules for image upload
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        // Update the image path in the database
        $motorcycle->image = '/public/' . $imagePath;
        $motorcycle->save();

        return redirect()->route('view-moto')->with('success', 'Image updated successfully.');
    }


    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'image' => 'required|image|max:2048',
        'category' => 'required|string|max:255',
        'subFamilyCategory' => 'required|string|max:255',
        'specs.cc' => 'nullable|string|max:255',
        'specs.hp' => 'nullable|string|max:255',
        'specs.torque' => 'nullable|string|max:255',
    ]);



    $imagePath = $request->file('image')->store('images', 'public');
    $moto = Motorcycle::findOrFail($id);
    $moto->image = '/public/' . $imagePath;
    $moto->update($validatedData);

    return redirect()->back()->with('success', 'Moto updated successfully');
    }







}
