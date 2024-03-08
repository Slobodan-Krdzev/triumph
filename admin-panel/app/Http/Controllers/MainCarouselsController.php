<?php

namespace App\Http\Controllers;

use App\Models\MainCarousell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'title' => ['required', Rule::unique('main-carousell-items','title')->ignore($carousel)],
            'desc' => 'required|string',
            'link1.url' => 'required|string',
            'link1.text' => 'required|string',
            'link2.url' => 'required|string',
            'link2.text' => 'required|string',
            'image' => 'required|file',
            'imageMobile' => 'required|file',
            'video' => 'required|file',
        ]);

        // Check if the title has been changed
        if ($request->title !== $carousel->title) {
            $exists =  Storage::disk('public')
                ->exists('public/mainCarousel/' . Str::slug($carousel->title));
            if ($exists)
                Storage::disk('public/mainCarousel')->move(Str::slug($carousel->title), Str::slug($request->title));
        }

        $title = $request->title;

        ddd($request->all());

        // Process main image
        if ($request->hasFile('image')) {
            $this->deleteFileIfExists($carousel->image);
            $imagePath = $request->file('image')->storeAs('mainCarousel/' . $title . '/images', $request->file('image')->getClientOriginalName(), 'public');
            $validatedData['image'] = Storage::url($imagePath);
        }

        // Process mobile image
        if ($request->hasFile('imageMobile')) {
            $this->deleteFileIfExists($carousel->imageMobile);
            $imageMobilePath = $request->file('imageMobile')->storeAs('mainCarousel/' . $title . '/mobileImages', $request->file('imageMobile')->getClientOriginalName(), 'public');
            $validatedData['imageMobile'] = Storage::url($imageMobilePath);
        }

        // Process video
        if ($request->hasFile('video')) {
            $this->deleteFileIfExists($carousel->video);
            $videoPath = $request->file('video')->storeAs('mainCarousel/' . $title . '/videos', $request->file('video')->getClientOriginalName(), 'public');
            $validatedData['video'] = Storage::url($videoPath);
        }

        // Update other attributes
        $carousel->update($validatedData);

        return redirect()->route('edit-main-carousels', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }

    private function deleteFileIfExists($file)
    {
        if ($file && Storage::exists($file)) {
            Storage::delete($file);
        }
    }


}
