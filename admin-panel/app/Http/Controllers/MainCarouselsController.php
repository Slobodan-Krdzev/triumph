<?php

namespace App\Http\Controllers;

use App\Models\MainCarousell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MainCarouselsController extends Controller
{
    public function index()
    {
        return view('layouts.add-main-carousels');
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'link1' => 'required',
            'link2' => 'required',
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
            $directoryPath = 'images/' . $sanitizedTitle;
            $fileName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs($directoryPath, $fileName, 'public');
            $carousel->image = Storage::url($imagePath);
        }

        // Process mobile image
        if ($request->hasFile('imageMobile')) {
            $imageMobilePath = $request->file('imageMobile')->store('images/mobile', 'public');
            $carousel->imageMobile = Storage::url($imageMobilePath);
        }

        // Process video
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
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
        $validatedData = $request->validate([
            'video' => 'string',
            'image' => 'nullable',
            'imageMobile' => 'string',
            'title' => 'string|max:255',
            'desc' => 'string',
            'link1.url' => 'url',
            'link1.text' => 'string',
            'link2.url' => 'url',
            'link2.text' => 'string',
        ]);

        $mainCarousels = MainCarousell::findOrFail($id);
        $mainCarousels->update($validatedData);

        return redirect()->route('edit-main-carousels', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }
}
