<?php

namespace App\Http\Controllers;

use App\Models\LatestCarousell;
use App\Models\MainCarousell;
use App\Service\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            'image' => 'required|image',
        ]);

        $carousel = new LatestCarousell();
        $carousel->title = $validatedData['title'];
        $carousel->desc = $validatedData['desc'];
        $carousel->url = $validatedData['url'];

        $sanitizedTitle = Str::slug($validatedData['title']);

        $carousel->image = ImageStorage::storeFile($request, 'image', 'latestCarousel/',$sanitizedTitle, '/images');


        $carousel->save();

        return back()->with('success', 'Your data has been stored successfully.');
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
        $carousel = LatestCarousell::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'url' => 'required|string',
            'image' => 'nullable',
        ]);

        $title = Str::slug($request->title);

        $validatedData['image'] = ImageStorage::updateFile($request, 'image', 'latestCarousel/', $title, '/images', $carousel->image, $carousel->title);

        if (Str::slug($request->title) != Str::slug($carousel->title)) {
            $images = 'latestCarousel/' . Str::slug($carousel->title) . '/images';
            $newImages = 'latestCarousel/' . Str::slug($request->title) . '/images';
            Storage::disk('public')->makeDirectory('latestCarousel/' . Str::slug($request->title));


            $file = Storage::disk('public')->files($images);
            if (!empty($file)) {
                $filename = pathinfo($file[0], PATHINFO_BASENAME);
                Storage::disk('public')->move($images . '/' . $filename, $newImages . '/' . $filename);
            }

            Storage::disk('public')->deleteDirectory('latestCarousel/' . Str::slug($carousel->title));
        }

        $carousel->update($validatedData);

        return redirect()->route('edit-latest-carousell', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }
}
