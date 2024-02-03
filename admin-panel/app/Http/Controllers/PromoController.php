<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function create()
    {
        return view('layouts.add-promo');
    }

    public function store(Request $request)
    {

        $promoData = $request->input('promo_data', []);

        $promo = new Promo();
        $promo->promo_data = json_encode($promoData);
        $promo->save();

        return redirect()->route('add-promo')->with('success', 'Promo data stored successfully');
    }

    public function delete($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return back()->with('success', 'Promo item deleted successfully.');
    }



    public function edit($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->promo_data = json_decode($promo->promo_data, true);
        return view('layouts.edit-promo', compact('promo'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'promo.*.title' => 'required',
            'promo.*.subFamilyType' => 'required',
            'promo.*.desc' => 'required',
            'promo.*.image' => 'required',
            'promo.*.btnBlack' => 'required|boolean',
        ]);

        $promo = Promo::findOrFail($id);

        // Decode the existing promo data
        $promoData = json_decode($promo->promo_data, true);

        // Update the promo data with the new values from the request
        foreach ($request->promo as $key => $promoItem) {
            $promoData[$key]['title'] = $promoItem['title'];
            $promoData[$key]['subFamilyType'] = $promoItem['subFamilyType'];
            $promoData[$key]['desc'] = $promoItem['desc'];
            $promoData[$key]['image'] = $promoItem['image'];
            $promoData[$key]['btnBlack'] = $promoItem['btnBlack'];
        }

        // Encode and update the promo data
        $promo->promo_data = json_encode($promoData);
        $promo->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Promo updated successfully.');
    }
}
