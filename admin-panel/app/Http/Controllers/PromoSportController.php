<?php

namespace App\Http\Controllers;

use App\Models\FamSport;
use App\Models\PromoSport;
use Illuminate\Http\Request;

class PromoSportController extends Controller
{
    public function index($id)
    {
        $promos = PromoSport::all()->map(function ($promo) {
            $promo->promo_data = json_decode($promo->promo_data, true);
            return $promo;
        });
        $famSport = FamSport::findOrFail($id);

        return view('layouts.edit-fam-sport', compact('promos', 'famSport'));
    }



    public function create()
    {
        return view('layouts.add-promo-sport');
    }

    public function store(Request $request)
    {

        $promoData = $request->input('promo_data', []);

        $promo = new PromoSport();
        $promo->promo_data = json_encode($promoData);
        $promo->save();

        return redirect()->route('add-promo-sport')->with('success', 'Promo data stored successfully');
    }

    public function delete($id)
    {
        $promo = PromoSport::findOrFail($id);
        $promo->delete();

        return back()->with('success', 'Promo item deleted successfully.');
    }



    public function edit($id)
    {
        $promo = PromoSport::findOrFail($id);
        $promo->promo_data = json_decode($promo->promo_data, true);
        return view('layouts.edit-promo-sport', compact('promo'));
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

        $promo = PromoSport::findOrFail($id);

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
