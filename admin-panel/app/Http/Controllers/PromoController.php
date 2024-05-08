<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Promo;
use App\Models\SubFamily;
use App\Service\ImageStorage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PromoController extends Controller
{
    public function create($family)
    {
        return view('layouts.promos.add', ['type' => $family, 'families' => Family::get(), 'subFamilies' => SubFamily::where('familyType', $family)->get()]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string',
            'subFamilyType' => 'required|string',
        ]);

        $data = array_merge($request->all(), $validatedData);

        $promo = new Promo();

        $promo->category = $data['category'];
        $promo->title = $data['title'];
        $promo->subFamilyType = $data['subFamilyType'];
        $promo->desc = $data['desc'];
        $promo->btnBlack = $data['btnBlack'];

        $sanitizedCategory = Str::slug($data['category']);
        $sanitizedTitle = Str::slug($data['title']);

        $promo->image = ImageStorage::storeFile($request, 'image', 'promos/' . $sanitizedCategory . '/', $sanitizedTitle);


        $promo->save();

        return redirect()->back()->with('success', 'Promo data stored successfully');
    }

    public function delete($id)
    {
        try {
            $promo = Promo::findOrFail($id);
            $promo->delete();
            return back()->with('success', 'Promo item deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return back()->with('error', 'Promo item not found.');
        }
    }



    public function edit($id)
    {
        $promo = Promo::findOrFail($id);
        return view('layouts.promos.edit', ['promo' => $promo, 'families' => Family::get(), 'subFamilies' => SubFamily::where('familyType', $promo->category)->get()]);
    }


    public function update(Request $request, $id)
    {
        $promo = Promo::findOrFail($id);
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string',
            'subFamilyType' => 'required|string',
        ]);

        $data = array_merge($request->all(), $validatedData);

        $sanitizedCategory = Str::slug($data['category']);
        $sanitizedTitle = Str::slug($data['title']);

        $data['image'] = ImageStorage::storeOrUpdateFile($request, 'image', 'promos/' . $sanitizedCategory . '/', $sanitizedTitle, '',$promo->image ?? '', $promo->title);

        if (Str::slug($request->title) != Str::slug($promo->title)) {
            Storage::disk('public')->makeDirectory('promos/' . $sanitizedCategory . '/' . Str::slug($request->title));

            ImageStorage::placeFileInNewFolder(Str::slug($promo->title), Str::slug($request->title), 'promos/' . $sanitizedCategory . '/', $sanitizedTitle);

            Storage::disk('public')->deleteDirectory('promos/' . $sanitizedCategory . '/' . Str::slug($promo->title));
        }

        $promo->update($data);

        return redirect()->back()->with('success', 'Promo updated successfully.');
    }
}
