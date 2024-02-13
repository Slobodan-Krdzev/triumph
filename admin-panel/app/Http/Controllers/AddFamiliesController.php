<?php

namespace App\Http\Controllers;

use App\Models\SubFamAdventure;
use Illuminate\Http\Request;

class AddFamiliesController extends Controller
{
    public function index()
    {
        return view('layouts.add-families',);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        SubFamAdventure::create($data);

        return redirect()->route('add-families')->with('success', 'Sub-Family data stored successfully');
    }
}
