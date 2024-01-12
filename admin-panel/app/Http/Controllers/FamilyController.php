<?php

namespace App\Http\Controllers;

use App\Models\Families;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function listfamilies()
    {
        $data = Families::get();
        return view('layouts.view-families', ['data' => $data]);
    }

    public function addFamilies()
    {
        return view('layouts.add-families');
    }

    public function editFamilies($id)
    {
        $family = Families::findOrFail($id);
        return view('layouts.edit-families', compact('family'));
    }

    public function updateFamily(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'subFamilyCategory' => 'required|string|max:255',
        ]);

        $family = Families::findOrFail($id);
        $family->update($validatedData);

        return redirect()->back()->with('success', 'Family updated successfully');
    }




}
