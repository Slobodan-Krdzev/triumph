<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Promo;
use App\Models\SubFamily;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FamiliesController extends Controller
{
    public function index()
    {
        $familyData = Family::all();
        $subFamData = SubFamily::all();


        return view('layouts.families.view',compact('familyData', 'subFamData'));
    }

    public function edit($id)
    {
        $family = Family::findOrFail($id);
        $promos = Promo::where('category', $family->type)->get();

        return view('layouts.families.family.edit', compact('family', 'promos'));
    }

    public function update(Request $request, $id)
    {
        $family = Family::findOrFail($id);


        return Redirect::route('view-families')->with('success', 'Family updated successfully.');
    }
}
