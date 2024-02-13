<?php

namespace App\Http\Controllers;

use App\Models\FamClassics;
use App\Models\PromoClassics;
use Illuminate\Http\Request;

class PromoClassicsController extends Controller
{
    public function index($id)
    {
        $promos = PromoClassics::all()->map(function ($promo) {
            $promo->promo_data = json_decode($promo->promo_data, true);
            return $promo;
        });
        $famClassic = FamClassics::findOrFail($id);

        return view('layouts.edit-fam-classics', compact('promos', 'famClassic'));
    }



    public function create()
    {
        return view('layouts.add-promo-classics');
    }

    public function store(Request $request)
    {

        $promoData = $request->input('promo_data', []);

        $promo = new PromoClassics();
        $promo->promo_data = json_encode($promoData);
        $promo->save();

        return redirect()->route('add-promo-classics')->with('success', 'Promo data stored successfully');
    }

    public function delete($id)
    {
        $promo = PromoClassics::findOrFail($id);
        $promo->delete();

        return back()->with('success', 'Promo item deleted successfully.');
    }



    public function edit($id)
    {
        $promo = PromoClassics::findOrFail($id);
        $promo->promo_data = json_decode($promo->promo_data, true);
        return view('layouts.edit-promo-classics', compact('promo'));
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

        $promo = PromoClassics::findOrFail($id);

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
