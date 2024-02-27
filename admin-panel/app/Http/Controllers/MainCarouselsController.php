<?php

namespace App\Http\Controllers;

use App\Models\MainCarousell;
use Illuminate\Http\Request;

class MainCarouselsController extends Controller
{
    public function index()
    {
        return view('layouts.add-main-carousels');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'video' => 'required|string|max:255',
    //         'image' => 'required|string|max:255',
    //         'imageMobile' => 'required|string|max:255',
    //         'title' => 'required|string|max:255',
    //         'desc' => 'required|string',
    //         'link1.url' => 'required|string|max:255',
    //         'link1.text' => 'required|string|max:255',
    //         'link2.url' => 'required|string|max:255',
    //         'link2.text' => 'required|string|max:255',
    //     ]);

    //     $videoPath = $request->input('video');
    //     $imagePath = $request->input('image');
    //     $imageMobilePath = $request->input('imageMobile');

    //     $carouselItem = MainCarousell::create([
    //         'video' => $videoPath,
    //         'image' => $imagePath,
    //         'imageMobile' => $imageMobilePath,
    //         'title' => $request->input('title'),
    //         'desc' => $request->input('desc'),
    //         'link1' => [
    //             'url' => $request->input('link1.url'),
    //             'text' => $request->input('link1.text'),
    //         ],
    //         'link2' => [
    //             'url' => $request->input('link2.url'),
    //             'text' => $request->input('link2.text'),
    //         ],
    //     ]);



    //     return redirect()->route('add-main-carousels')->with('success', 'Your data has been stored successfully.');
    // }


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


        $urls = [];

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $imageUrl = '/storage/' . $imagePath;
            $urls['image'] = $imageUrl;
        }

        if ($request->file('imageMobile')) {
            $imageMobilePath = $request->file('imageMobile')->store('images/mobile', 'public');
            $imageMobileUrl = '/storage/' . $imageMobilePath;
            $urls['imageMobile'] = $imageMobileUrl;
        }

        if ($request->file('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
            $videoUrl = '/storage/' . $videoPath;
            $urls['video'] = $videoUrl;
        }

        $carousel = new MainCarousell;
        $carousel->title = $request->title;
        $carousel->desc = $request->desc;
        $carousel->link1 = $request->link1;
        $carousel->link2 = $request->link2;
        $carousel->image = $urls['image'] ?? null;
        $carousel->imageMobile = $urls['imageMobile'] ?? null;
        $carousel->video = $urls['video'] ?? null;
        $carousel->save();

        return back()->with('success', 'Files and details uploaded successfully')->with('files', $urls);
    }




    public function edit($id)
    {

        $mainCarousels = MainCarousell::find($id);

        return view('layouts.edit-main-carousels', compact('mainCarousels'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'video' => 'required|string',
            'image' => 'nullable',
            'imageMobile' => 'string',
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'link1.url' => 'required|url',
            'link1.text' => 'required|string',
            'link2.url' => 'required|url',
            'link2.text' => 'required|string',
        ]);

        $mainCarousels = MainCarousell::findOrFail($id);
        $mainCarousels->update($validatedData);

        return redirect()->route('edit-main-carousels', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }
}
