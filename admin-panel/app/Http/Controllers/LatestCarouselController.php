<?php

namespace App\Http\Controllers;

use App\Models\LatestCarousell;
use App\Models\MainCarousell;
use App\Service\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Nette\Utils\Image;

class LatestCarouselController extends Controller
{
    public function index()
    {
        $mainCarousels = MainCarousell::get();
        $latestCarousels = LatestCarousell::get();
        return view('layouts.carousels.view', compact('latestCarousels', 'mainCarousels'));
    }
    public function create()
    {
        return view('layouts.carousels.latest-carousel.add');
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
    public function edit($id)
    {

        $latestCarousels = LatestCarousell::find($id);

        return view('layouts.carousels.latest-carousel.edit', compact('latestCarousels'));
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

        $validatedData['image'] = ImageStorage::storeOrUpdateFile($request, 'image', 'latestCarousel/', $title, '/images', $carousel->image ?? '', $carousel->title);

        if (Str::slug($request->title) != Str::slug($carousel->title)) {
            Storage::disk('public')->makeDirectory('latestCarousel/' . Str::slug($request->title));

            ImageStorage::placeFileInNewFolder(Str::slug($carousel->title), Str::slug($request->title), 'latestCarousel/','/images' );

            Storage::disk('public')->deleteDirectory('latestCarousel/' . Str::slug($carousel->title));
        }

        $carousel->update($validatedData);

        return redirect()->route('edit-latest-carousel', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }
}
