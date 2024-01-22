<?php

namespace App\Http\Controllers;

use App\Models\Families;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function editPromo($id)
    {

        // $promo = Families::find($id);


        // return view('layouts.edit-promo', ['promo' => $promo]);

        $promo = Families::findOrFail($id);

        return view('layouts.edit-promo', compact('promo'));
    }

    public function updatePromo(Request $request, $id, $promoId)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
        ]);

        $family = Families::find($id);

        $promo = $family->promo()->find($promoId);

        $promo->update($validatedData);

        return redirect()->route('your.route.name')->with('success', 'Promo updated successfully');
    }
}
