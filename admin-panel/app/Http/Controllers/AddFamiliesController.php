<?php

namespace App\Http\Controllers;

use App\Models\SubFamAdventure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AddFamiliesController extends Controller
{
    public function index()
    {
        return view('layouts.add-families',);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'familyType' => 'required|string|max:255',
            'subFamilyName' => 'nullable|string|max:255',
            'url' => 'string',
            'price' => 'nullable|numeric',
            'youtubeVideo' => 'nullable|string',
            'engineTransmission.*.title' => 'nullable|string|max:255',
            'engineTransmission.*.desc' => 'nullable|string|max:255',
            'subFamilyPageInfo.service.*.title' => 'nullable|string|max:255',
            'subFamilyPageInfo.service.*.desc' => 'nullable|string',
            'subFamilyPageInfo.audioSection.title' => 'nullable|string|max:255',
            'subFamilyPageInfo.audioSection.desc' => 'nullable|string',
            'subFamilyPageInfo.audioSection.audio' => 'nullable|string|max:255',
            'subFamilyPageInfo.topSection.title' => 'nullable|string|max:255',
            'subFamilyPageInfo.topSection.desc' => 'nullable|string',
            'subFamilyPageInfo.topSection.subtitle' => 'nullable|string|max:255',
            'heroSlogans.*' => 'nullable|string|max:255',
            'frame.*.title' => 'nullable|string|max:255',
            'frame.*.desc' => 'nullable|string|max:255',
            'dimension.*.title' => 'nullable|string|max:255',
            'dimension.*.desc' => 'nullable|string|max:255',
            'fuelConsumption.*.title' => 'nullable|string|max:255',
            'fuelConsumption.*.desc' => 'nullable|string|max:255',
            'subFamilyPageInfo.grayCarousell.*.title' => 'nullable|string|max:255',
            'subFamilyPageInfo.grayCarousell.*.desc' => 'nullable|string',
            'subFamilyPageInfo.grayCarousell.*.image' => 'nullable|image|max:2048',
            'specNumbers.*.data' => 'nullable|string|max:255',
            'specNumbers.*.info' => 'nullable|string',
            'reasonsToDrive.banner.image' => 'nullable|image|max:2048',
            'reasonsToDrive.infoText.title' => 'nullable|string|max:255',
            'reasonsToDrive.infoText.desc' => 'nullable|string',
            'reasonsToDrive.reasons.*.title' => 'nullable|string|max:255',
            'reasonsToDrive.reasons.*.desc' => 'nullable|string',
            'reasonsToDrive.reasons.*.image' => 'nullable|image|max:2048',
            'accessory.banner.image' => 'nullable|image|max:2048',
            'accessory.infoText.title' => 'nullable|string|max:255',
            'accessory.infoText.desc' => 'nullable|string',
            'accessory.accessoryTypes.*.title' => 'nullable|string|max:255',
            'accessory.accessoryTypes.*.desc' => 'nullable|string',
            'accessory.accessoryTypes.*.image1.src' => 'nullable|image|max:2048',
            'accessory.accessoryTypes.*.image2.src' => 'nullable|image|max:2048',
            'shortSpecInfo.info1' => 'nullable|string|max:255',
            'shortSpecInfo.info2' => 'nullable|string|max:255',
            'shortSpecInfo.info3' => 'nullable|string|max:255',
            'gallery.modelImage.src' => 'nullable|image|max:2048',
            'gallery.modelImage.alt' => 'nullable|string|max:255',
            'gallery.subFamilyHeroVideo.src' => 'nullable|string|max:255',
            'gallery.subFamilyHeroVideo.alt' => 'nullable|string|max:255',
            'gallery.subFamilyTopSectionImage.src' => 'nullable|image|max:2048',
            'gallery.subFamilyTopSectionImage.alt' => 'nullable|string|max:255',
            'gallery.subFamilyTopSectionBGImage.src' => 'nullable|image|max:2048',
            'gallery.subFamilyTopSectionBGImage.alt' => 'nullable|string|max:255',
            'service.0.title' => 'nullable|string|max:255',
            'service.0.desc' => 'nullable|string|max:255',
        ]);

        // Define an array to hold the paths of all uploaded images
        $title = Str::slug($request->title);

        // Iterate through the request data to process each image field
        foreach ($validatedData as $key => $value) {
            // Check if the value is an instance of UploadedFile (i.e., an image file)
            if ($value instanceof \Illuminate\Http\UploadedFile) {
                // Check if the field is an image field
                if (strpos($key, 'image') !== false) {
                    $directoryPath = 'images/' . $title;
                    // Store the image and get its path
                    $imagePath = $value->store($directoryPath, 'public');
                    // Store the image path in the array
                    $imagePaths[$key] = Storage::url($imagePath);
                }
            }
        }

        // Merge the image paths with the validated data
        $validatedData = array_merge($validatedData, $imagePaths);

        SubFamAdventure::create($validatedData);

        return redirect()->route('add-families')->with('success', 'Sub-Family data stored successfully');
    }
}
