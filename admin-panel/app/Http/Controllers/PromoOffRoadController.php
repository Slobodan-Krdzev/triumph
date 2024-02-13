<?php

namespace App\Http\Controllers;

use App\Models\FamOffRoad;
use App\Models\PromoOffRoad;
use Illuminate\Http\Request;

class PromoOffRoadController extends Controller
{
    public function index($id)
    {
        $promos = PromoOffRoad::all()->map(function ($promo) {
            $promo->promo_data = json_decode($promo->promo_data, true);
            return $promo;
        });
        $famOffRoad = FamOffRoad::findOrFail($id);

        return view('layouts.edit-fam-off-road', compact('promos', 'famOffRoad'));
    }



    public function create()
    {
        return view('layouts.add-promo-off-road');
    }

    public function store(Request $request)
    {

        $promoData = $request->input('promo_data', []);

        $promo = new PromoOffRoad();
        $promo->promo_data = json_encode($promoData);
        $promo->save();

        return redirect()->route('add-promo-off-road')->with('success', 'Promo data stored successfully');
    }

    public function delete($id)
    {
        $promo = PromoOffRoad::findOrFail($id);
        $promo->delete();

        return back()->with('success', 'Promo item deleted successfully.');
    }



    public function edit($id)
    {
        $promo = PromoOffRoad::findOrFail($id);
        $promo->promo_data = json_decode($promo->promo_data, true);
        return view('layouts.edit-promo-off-road', compact('promo'));
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

        $promo = PromoOffRoad::findOrFail($id);

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
