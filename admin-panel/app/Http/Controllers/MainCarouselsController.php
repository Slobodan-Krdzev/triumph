<?php

namespace App\Http\Controllers;

use App\Models\MainCarousell;
use App\Service\DecodeHtmlEntities;
use App\Service\ImageStorage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class MainCarouselsController extends Controller
{
    public function create()
    {
        return view('layouts.carousels.main-carousel.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:main_carousell,title,',
            'desc' => 'required|string',
            'link1.url' => 'nullable|string',
            'link1.text' => 'nullable|string',
            'link2.url' => 'nullable|string',
            'link2.text' => 'nullable|string',
            'image' => 'nullable',
            'imageMobile' => 'required|max:2048',
            'video' => 'nullable',
            'videoPoster' => 'nullable',
        ]);

        $carousel = new MainCarousell();
        $carousel->title = $request->title;
        $carousel->desc = $request->desc;
        $carousel->link1 = $request->link1;
        $carousel->link2 = $request->link2;

        $sanitizedTitle = Str::slug($request->title);

        $carousel->image = ImageStorage::storeFile($request, 'image', 'mainCarousel/',$sanitizedTitle, '/images');

        $carousel->imageMobile = ImageStorage::storeFile($request, 'imageMobile', 'mainCarousel/',$sanitizedTitle, '/mobileImages');

        $carousel->video = ImageStorage::storeFile($request, 'video', 'mainCarousel/',$sanitizedTitle, '/videos');

        $carousel->videoPoster = ImageStorage::storeFile($request, 'videoPoster', 'mainCarousel/',$sanitizedTitle, '/videoPosters');

        DecodeHtmlEntities::decodeHtmlEntities($carousel);

        $carousel->save();

        return redirect()->route('view-carousels')->with('success', 'Main Carousel Item ' . $carousel->title . ' stored successfully.');
    }


    public function edit($id)
    {

        $mainCarousels = MainCarousell::find($id);

        return view('layouts.carousels.main-carousel.edit', compact('mainCarousels'));
    }


    public function update(Request $request, $id)
    {
        $carousel = MainCarousell::findOrFail($id);

        $validatedData = $request->validate([
            'title' => ['required', Rule::unique('main_carousell', 'title')->ignore($carousel)],
            'desc' => 'required|string',
            'link1.url' => 'nullable|string',
            'link1.text' => 'nullable|string',
            'link2.url' => 'nullable|string',
            'link2.text' => 'nullable|string',
            'image' => 'nullable',
            'imageMobile' => 'nullable',
            'video' => 'nullable',
            'videoPoster' => 'nullable',
        ]);


        $title = Str::slug($request->title);

        $validatedData['image'] = ImageStorage::storeOrUpdateFile($request, 'image', 'mainCarousel/', $title, '/images', $carousel->image ?? '', $carousel->title);

        $validatedData['imageMobile'] = ImageStorage::storeOrUpdateFile($request, 'imageMobile', 'mainCarousel/', $title, '/mobileImages', $carousel->imageMobile ?? '', $carousel->title);

        $validatedData['video'] = ImageStorage::storeOrUpdateFile($request, 'video', 'mainCarousel/', $title, '/videos', $carousel->video ?? '', $carousel->title);

        $validatedData['videoPoster'] = ImageStorage::storeOrUpdateFile($request, 'videoPoster', 'mainCarousel/', $title, '/videoPosters', $carousel->videoPoster ?? '', $carousel->title);


        if (Str::slug($request->title) != Str::slug($carousel->title)) {
            Storage::disk('public')->makeDirectory('mainCarousel/' . Str::slug($request->title));

            ImageStorage::placeFileInNewFolder(Str::slug($carousel->title), Str::slug($request->title),'mainCarousel/','/images');
            ImageStorage::placeFileInNewFolder(Str::slug($carousel->title), Str::slug($request->title),'mainCarousel/','/mobileImages');
            ImageStorage::placeFileInNewFolder(Str::slug($carousel->title), Str::slug($request->title),'mainCarousel/','/videos');
            ImageStorage::placeFileInNewFolder(Str::slug($carousel->title), Str::slug($request->title),'mainCarousel/','/videoPosters');

            Storage::disk('public')->deleteDirectory('mainCarousel/' . Str::slug($carousel->title));
        }

        DecodeHtmlEntities::decodeHtmlEntities($carousel);

        $carousel->update($validatedData);

        return redirect()->back()->with('success', 'Main Carousel Item ' . $validatedData['title'] . ' updated successfully.');
    }

    public function destroy($id){
        try {
            $carousel = MainCarousell::findOrFail($id);
            $carousel->delete();
            return back()->with('success', 'Main Carousel item deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return back()->with('error', 'Main Carousel item not found.');
        }
    }

}
