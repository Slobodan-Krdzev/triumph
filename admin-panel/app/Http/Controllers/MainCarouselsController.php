<?php

namespace App\Http\Controllers;

use App\Models\MainCarousell;
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
            'image' => 'required|image|max:2048',
            'imageMobile' => 'required|image|max:2048',
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000',
        ]);

        // Prepare the carousel instance
        $carousel = new MainCarousell();
        $carousel->title = $request->title;
        $carousel->desc = $request->desc;
        $carousel->link1 = $request->link1;
        $carousel->link2 = $request->link2;

        // Sanitize the title to create a directory name
        $sanitizedTitle = Str::slug($request->title);

        // Process main image
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('mainCarousel/' . $sanitizedTitle . '/images', $image, 'public');
            $carousel->image = Storage::url($imagePath);
        }

        // Process mobile image
        if ($request->hasFile('imageMobile')) {
            $imageMobile = $request->file('imageMobile')->getClientOriginalName();
            $imageMobilePath = $request->file('imageMobile')->storeAs('mainCarousel/' . $sanitizedTitle . '/mobileImages', $imageMobile, 'public');
            $carousel->imageMobile = Storage::url($imageMobilePath);
        }

        // Process video
        if ($request->hasFile('video')) {
            $video = $request->file('video')->getClientOriginalName();
            $videoPath = $request->file('video')->storeAs('mainCarousel/' . $sanitizedTitle . '/videos', $video, 'public');
            $carousel->video = Storage::url($videoPath);
        }

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
        if ($request->hasFile('image')) {
            $storage->delete(str_replace('storage/', '', $carousel->image));
            $imagePath = $request->file('image')->storeAs('mainCarousel/' . $title . '/images', $request->file('image')->getClientOriginalName(), 'public');
            $validatedData['image'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($carousel->title), $title, $carousel->image);
            $validatedData['image'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        // Process mobile image
        if ($request->hasFile('imageMobile')) {
            $storage->delete(str_replace('storage/', '', $carousel->imageMobile));
            $imageMobilePath = $request->file('imageMobile')->storeAs('mainCarousel/' . $title . '/mobileImages', $request->file('imageMobile')->getClientOriginalName(), 'public');
            $validatedData['imageMobile'] = str_starts_with($imageMobilePath, '/storage/') ? $imageMobilePath : '/storage/' . $imageMobilePath;
        } else {
            $newImageMobilePath = str_replace(Str::slug($carousel->title), $title, $carousel->imageMobile);
            $validatedData['imageMobile'] = str_starts_with($newImageMobilePath, '/storage/') ? $newImageMobilePath : '/storage/' . $newImageMobilePath;
        }


        // Process video
        if ($request->hasFile('video')) {
            $storage->delete(str_replace('storage/', '', $carousel->video));
            $videoPath = $request->file('video')->storeAs('mainCarousel/' . $title . '/videos', $request->file('video')->getClientOriginalName(), 'public');
            $validatedData['video'] = str_starts_with($videoPath, '/storage/') ? $videoPath : '/storage/' . $videoPath;
        } else {
            $newVideoPath = (str_replace(Str::slug($carousel->title), $title, $carousel->video));
            $validatedData['video'] = str_starts_with($newVideoPath, '/storage/') ? $newVideoPath : '/storage/' . $newVideoPath;
        }


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


            // After moving files, delete the original directory
            Storage::disk('public')->deleteDirectory('mainCarousel/' . Str::slug($carousel->title));
        }


        // Update other attributes
        $carousel->update($validatedData);

        return redirect()->route('edit-main-carousels', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }

}
