<?php

namespace App\Http\Controllers;

use App\Models\MainCarousell;
use App\Service\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class MainCarouselsController extends Controller
{
    public function index()
    {
        return view('layouts.add-main-carousels');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:main-carousell-items,title,',
            'desc' => 'required|string',
            'link1.url' => 'required|string',
            'link1.text' => 'required|string',
            'link2.url' => 'required|string',
            'link2.text' => 'required|string',
            'image' => 'nullable',
            'imageMobile' => 'required|image|max:2048',
            'video' => 'nullable',
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

        // Save the carousel instance
        $carousel->save();

        // Redirect back with success message
        return back()->with('success', 'MainCarousel item created successfully.');
    }


    public function edit($id)
    {

        $mainCarousels = MainCarousell::find($id);

        return view('layouts.edit-main-carousels', compact('mainCarousels'));
    }


    public function update(Request $request, $id)
    {
        $carousel = MainCarousell::findOrFail($id);

        $validatedData = $request->validate([
            'title' => ['required', Rule::unique('main-carousell-items', 'title')->ignore($carousel)],
            'desc' => 'required|string',
            'link1.url' => 'required|string',
            'link1.text' => 'required|string',
            'link2.url' => 'required|string',
            'link2.text' => 'required|string',
            'image' => 'nullable',
            'imageMobile' => 'nullable',
            'video' => 'nullable|file',
        ]);


        $title = Str::slug($request->title);
        $storage = Storage::disk('public');

        // Process main image
        $validatedData['image'] = ImageStorage::updateFile($request, 'image', 'mainCarousel/', $title, '/images', $carousel->image, $carousel->title);


        // Process mobile image
        $validatedData['imageMobile'] = ImageStorage::updateFile($request, 'imageMobile', 'mainCarousel/', $title, '/mobileImages', $carousel->imageMobile, $carousel->title);



        // Process video
        $validatedData['video'] = ImageStorage::updateFile($request, 'video', 'mainCarousel/', $title, '/videos', $carousel->video, $carousel->title);



        // Check if the title has been changed
        if (Str::slug($request->title) != Str::slug($carousel->title)) {
            $images = 'mainCarousel/' . Str::slug($carousel->title) . '/images';
            $imagesMobile = 'mainCarousel/' . Str::slug($carousel->title) . '/mobileImages';
            $videos = 'mainCarousel/' . Str::slug($carousel->title) . '/videos';
            $newImages = 'mainCarousel/' . Str::slug($request->title) . '/images';
            $newImagesMobile = 'mainCarousel/' . Str::slug($request->title) . '/mobileImages';
            $newVideos = 'mainCarousel/' . Str::slug($request->title) . '/videos';
            Storage::disk('public')->makeDirectory('mainCarousel/' . Str::slug($request->title));


            $file = Storage::disk('public')->files($images);
            if (!empty($file)) {
                $filename = pathinfo($file[0], PATHINFO_BASENAME);
                Storage::disk('public')->move($images . '/' . $filename, $newImages . '/' . $filename);
            }

            $file = Storage::disk('public')->files($imagesMobile);
            if (!empty($file)) {
                $filename = pathinfo($file[0], PATHINFO_BASENAME);
                Storage::disk('public')->move($imagesMobile . '/' . $filename, $newImagesMobile . '/' . $filename);
            }

            $file = Storage::disk('public')->files($videos);
            if (!empty($file)) {
                $filename = pathinfo($file[0], PATHINFO_BASENAME);
                Storage::disk('public')->move($videos . '/' . $filename, $newVideos . '/' . $filename);
            }

            Storage::disk('public')->deleteDirectory('mainCarousel/' . Str::slug($carousel->title));
        }

        $carousel->update($validatedData);

        return redirect()->route('edit-main-carousels', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }

}
