<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function create()
    {
        return view('layouts.promos.add');
    }

    public function store(Request $request)
    {

        $promoData = $request->input('promo_data', []);

        $promo = new Promo();
        $promo->promo_data = json_encode($promoData);
        $promo->save();

        return redirect()->route('add-promos')->with('success', 'Promo data stored successfully');
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
        return view('layouts.promos.edit', compact('promo'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'promos.*.title' => 'required',
            'promos.*.subFamilyType' => 'required',
            'promos.*.desc' => 'required',
            'promos.*.image' => 'required',
            'promos.*.btnBlack' => 'required|boolean',
        ]);

        $promo = Promo::findOrFail($id);

        $promoData = json_decode($promo->promo_data, true);

        foreach ($request->promo as $key => $promoItem) {
            $promoData[$key]['title'] = $promoItem['title'];
            $promoData[$key]['subFamilyType'] = $promoItem['subFamilyType'];
            $promoData[$key]['desc'] = $promoItem['desc'];
            $promoData[$key]['image'] = $promoItem['image'];
            $promoData[$key]['btnBlack'] = $promoItem['btnBlack'];
        }

        $promo->promo_data = json_encode($promoData);
        $promo->save();

        return redirect()->back()->with('success', 'Promo updated successfully.');
    }
}
