<?php

namespace App\Http\Controllers;

use App\Models\Families;
use App\Models\MainCarousellItem;
use App\Models\Motorcycle;
use App\Service\ImageStorage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:motorcycles,title,'
        ]);

        $data = array_merge($request->except('title'), $validatedData);

        $title = Str::slug($validatedData['title']);

        $data['gallery']['modelImage']['src'] = ImageStorage::storeFile($request, 'gallery.modelImage.src', 'motorcycles/', $title, '/modelImage');

        $data['bikeCollorPalletteGallery']['default'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.default', 'motorcycles/', $title, '/bikeCollorPalletteGallery');
        $data['bikeCollorPalletteGallery']['color1'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.color1', 'motorcycles/', $title, '/bikeCollorPalletteGallery');
        $data['bikeCollorPalletteGallery']['color1Reversed'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.color1Reversed', 'motorcycles/', $title, '/bikeCollorPalletteGallery');
        $data['bikeCollorPalletteGallery']['color2'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.color2', 'motorcycles/', $title, '/bikeCollorPalletteGallery');
        $data['bikeCollorPalletteGallery']['color2Reversed'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.color2Reversed', 'motorcycles/', $title, '/bikeCollorPalletteGallery');
        $data['bikeCollorPalletteGallery']['color3'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.color3', 'motorcycles/', $title, '/bikeCollorPalletteGallery');
        $data['bikeCollorPalletteGallery']['color3Reversed'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.color3Reversed', 'motorcycles/', $title, '/bikeCollorPalletteGallery');

        for ($i = 0; $i < count($request->input('customizationColors')); $i++) {
            $data['customizationColors'][$i]['image'] = ImageStorage::storeFile($request, 'customizationColors.' . $i . '.image', 'motorcycles/', $title, '/customizationColors');
        }

        for ($i = 0; $i < count($request->input('bikePageCarousell')); $i++) {
            $data['bikePageCarousell'][$i]['image'] = ImageStorage::storeFile($request, 'bikePageCarousell.' . $i . '.image', 'motorcycles/', $title, '/bikePageCarousell');
        }

        foreach ($request->bikePageImageGallery as $key => $pageImage) {
            $data['bikePageImageGallery'][$key] = ImageStorage::storeFile($request, 'bikePageImageGallery.' . $key, 'motorcycles/', $title, '/bikePageImageGallery');
        }

        foreach ($request->bikePagePromo as $key => $bikePage) {
            $data['bikePagePromo'][$key]['image'] = ImageStorage::storeFile($request, 'bikePagePromo.' . $key . '.image', 'motorcycles/', $title, '/bikePagePromo');
        }

        Motorcycle::create($data);

        return redirect()->route('create-moto')->with('success', 'Motorcycle data stored successfully');
    }


    public function edit($id, $category)

    {




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

        if (is_null($moto->bikePageCarousell)) {
            $moto->bikePageCarousell = [];
        }

        if (is_null($moto->bikePageImageGallery)) {
            $moto->bikePageImageGallery = [];
        }

        return view($view, ['moto' => $moto]);
    }


    public function updateImage(Request $request, Motorcycle $motorcycle)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
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
            'title' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'category' => 'nullable|string|max:255',
            'subFamilyCategory' => 'nullable|string|max:255',
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
