<?php

namespace App\Http\Controllers;

use App\Models\SubFamAdventure;
use Illuminate\Http\Request;

class SubFamAdventureController extends Controller
{
    public function edit($id)
    {

        $subFamData = SubFamAdventure::findOrFail($id);
        $subFamData->gallery = json_decode($subFamData->gallery, true);

        // return view('layouts.edit-adventure', compact('subFamData'));
        return response()->json($subFamData);

    }



    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'price' => 'required',
            'title' => 'required',
            'model_name' => 'required',
            'subFamilyName' => 'required',
            'url' => 'required',
            'gallery.modelImage.src' => 'required',
            'gallery.modelImage.alt' => 'required',
        ]);

        $validatedData['gallery'] = json_encode($request->input('gallery'));

        $subFamAdventure = SubFamAdventure::findOrFail($id);
        $subFamAdventure->update($validatedData);

        // Redirect to a different route after updating
        return redirect()->route('view-families')->with('success', 'SubFamAdventure updated successfully');
    }
}
