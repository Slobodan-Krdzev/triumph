<?php

namespace App\Http\Controllers;

use App\Models\AdventureFam;
use App\Models\FamAdventure;
use App\Models\Promo;
use App\Models\SubFamAdventure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FamiliesController extends Controller
{
    public function index()
    {
        $famAdventureData = FamAdventure::get();
        $subFamData = SubFamAdventure::get();


        return view('layouts.view-families', compact('famAdventureData', 'subFamData'));
    }

    public function edit($id)
    {
        $promos = Promo::all()->map(function ($promo) {
            $promo->promo_data = json_decode($promo->promo_data, true);
            return $promo;
        });
        $family = FamAdventure::findOrFail($id);
        return view('layouts.edit-fam-adventure', compact('family', 'promos'));
    }

    public function update(Request $request, $id)
    {
        $family = FamAdventure::findOrFail($id);


        return Redirect::route('view-families')->with('success', 'Family updated successfully.');
    }
}
