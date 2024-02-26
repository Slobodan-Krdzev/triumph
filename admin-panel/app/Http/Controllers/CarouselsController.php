<?php

namespace App\Http\Controllers;

use App\Models\LatestCarousell;
use App\Models\MainCarousell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarouselsController extends Controller
{
    public function index()
    {
        return view('layouts.add-carousels');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|string',
        ]);

        LatestCarousell::create($validatedData);

        return redirect()->route('add-carousels')->with('success', 'Your data has been stored successfully.');
    }


    public function listCarousels()
    {
        $mainCarousels = MainCarousell::get();
        $latestCarousels = LatestCarousell::get();
        return view('layouts.view-carousels', compact('latestCarousels', 'mainCarousels'));
    }

    public function edit($id)
    {

        $latestCarousels = LatestCarousell::find($id);

        return view('layouts.edit-latest-carousell', compact('latestCarousels'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|string',
        ]);

        $latestCarousels = LatestCarousell::findOrFail($id);
        $latestCarousels->update($validatedData);

        return redirect()->route('edit-latest-carousell', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }
}
