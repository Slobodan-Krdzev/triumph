<?php

namespace App\Http\Controllers;

use App\Models\FamRoadsters;
use App\Models\PromoRoadsters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FamRoadstersController extends Controller
{
    public function edit($id)
    {

        $famRoadsters = FamRoadsters::find($id);

        $promos = PromoRoadsters::all()->map(function ($promo) {
            $promo->promo_data = json_decode($promo->promo_data, true);
            return $promo;
        });
        $famRoadsters = FamRoadsters::findOrFail($id);

        return view('layouts.edit-fam-roadsters', compact('famRoadsters', 'promos'));
    }

    public function update(Request $request, $id)
    {
        $famRoadsters = FamRoadsters::findOrFail($id);


        return Redirect::route('view-families')->with('success', 'Family updated successfully.');
    }
}
