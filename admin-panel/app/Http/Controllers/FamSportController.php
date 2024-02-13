<?php

namespace App\Http\Controllers;

use App\Models\FamSport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FamSportController extends Controller
{
    public function edit($id)
    {
        $famSport = FamSport::find($id);
        return view('layouts.edit-fam-sport', compact('famSport'));
    }

    public function update(Request $request, $id)
    {
        $famSport = FamSport::findOrFail($id);

        return Redirect::route('view-families')->with('success', 'Family updated successfully.');
    }
}
