<?php

namespace App\Http\Controllers;

use App\Models\FamClassics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FamClassicsController extends Controller
{
    public function edit($id)
    {

        $famClassic = FamClassics::find($id);

        return view('layouts.edit-fam-classics', compact('famClassic'));
    }

    public function update(Request $request, $id)
    {
        $family = FamClassics::findOrFail($id);


        return Redirect::route('view-families')->with('success', 'Family updated successfully.');
    }
}
