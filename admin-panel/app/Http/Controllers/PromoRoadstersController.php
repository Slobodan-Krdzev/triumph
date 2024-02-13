<?php

namespace App\Http\Controllers;

use App\Models\FamRoadsters;
use App\Models\PromoRoadsters;
use Illuminate\Http\Request;

class PromoRoadstersController extends Controller
{
    public function index($id)
    {
        $promos = PromoRoadsters::all()->map(function ($promo) {
            $promo->promo_data = json_decode($promo->promo_data, true);
            return $promo;
        });
        $famRoadsters = FamRoadsters::findOrFail($id);

        return view('layouts.edit-fam-roadsters', compact('promos', 'famRoadsters'));
    }



    public function create()
    {
        return view('layouts.add-promo-roadsters');
    }

    public function store(Request $request)
    {

        $promoData = $request->input('promo_data', []);

        $promo = new PromoRoadsters();
        $promo->promo_data = json_encode($promoData);
        $promo->save();

        return redirect()->route('add-promo-roadsters')->with('success', 'Promo data stored successfully');
    }

    public function delete($id)
    {
        $promo = PromoRoadsters::findOrFail($id);
        $promo->delete();

        return back()->with('success', 'Promo item deleted successfully.');
    }



    public function edit($id)
    {
        $promo = PromoRoadsters::findOrFail($id);
        $promo->promo_data = json_decode($promo->promo_data, true);
        return view('layouts.edit-promo-roadsters', compact('promo'));
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

        $promo = PromoRoadsters::findOrFail($id);

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
