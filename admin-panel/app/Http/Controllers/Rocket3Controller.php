<?php

namespace App\Http\Controllers;

use App\Models\FamRocket3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Rocket3Controller extends Controller
{
    public function edit($id)
    {
        $famRocket3 = FamRocket3::find($id);
        return view('layouts.edit-fam-rocket-3', compact('famRocket3'));
    }

    public function update(Request $request, $id)
    {
        $famRocket3 = FamRocket3::findOrFail($id);

        return Redirect::route('view-families')->with('success', 'Family updated successfully.');
    }
}
