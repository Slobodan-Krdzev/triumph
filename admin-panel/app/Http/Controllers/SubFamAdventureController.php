<?php

namespace App\Http\Controllers;

use App\Models\SubFamAdventure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubFamAdventureController extends Controller
{
    public function edit($id)
    {
        $subFamData = SubFamAdventure::findOrFail($id);
        return view('layouts.edit-adventure', compact('subFamData'));
        // return response()->json($subFamData);
    }

    public function index(Request $request)
    {
        $subFamData = SubFamAdventure::all();

        return response()->json($subFamData);


        $familyType = $request->input('familyType');

        $subFamData = SubFamAdventure::when($familyType, function ($query) use ($familyType) {
            return $query->where('familyType', $familyType);
        })->get();
    }


    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        // 'title' => 'nullable|string|max:255',
        // 'subFamilyName' => 'nullable|string|max:255',
        // 'url' => 'string',
        // 'price' => 'nullable|numeric',
        // 'youtubeVideo' => 'nullable|string',
        // 'engineTransmission.*.title' => 'nullable|string|max:255',
        // 'engineTransmission.*.desc' => 'nullable|string|max:255',
        // 'subFamilyPageInfo.service.*.title' => 'nullable|string|max:255',
        // 'subFamilyPageInfo.service.*.desc' => 'nullable|string',
        // 'subFamilyPageInfo.audioSection.title' => 'nullable|string|max:255',
        // 'subFamilyPageInfo.audioSection.desc' => 'nullable|string',
        // 'subFamilyPageInfo.audioSection.audio' => 'nullable|string|max:255',
        // 'subFamilyPageInfo.topSection.title' => 'nullable|string|max:255',
        // 'subFamilyPageInfo.topSection.desc' => 'nullable|string',
        // 'subFamilyPageInfo.topSection.subtitle' => 'nullable|string|max:255',
        // 'heroSlogans.*' => 'nullable|string|max:255',
        // 'frame.*.title' => 'nullable|string|max:255',
        // 'frame.*.desc' => 'nullable|string|max:255',
        // 'dimension.*.title' => 'nullable|string|max:255',
        // 'dimension.*.desc' => 'nullable|string|max:255',
        // 'fuelConsumption.*.title' => 'nullable|string|max:255',
        // 'fuelConsumption.*.desc' => 'nullable|string|max:255',
        // 'grayCarousell.*.title' => 'nullable|string|max:255',
        // 'grayCarousell.*.desc' => 'nullable|string',
        // 'grayCarousell.*.image' => 'nullable|image|max:2048',
        // 'specNumbers.*.data' => 'nullable|string|max:255',
        // 'specNumbers.*.info' => 'nullable|string',
        // 'reasonsToDrive.banner.image' => 'nullable|image|max:2048',
        // 'reasonsToDrive.infoText.title' => 'nullable|string|max:255',
        // 'reasonsToDrive.infoText.desc' => 'nullable|string',
        // 'reasonsToDrive.reasons.*.title' => 'nullable|string|max:255',
        // 'reasonsToDrive.reasons.*.desc' => 'nullable|string',
        // 'reasonsToDrive.reasons.*.image' => 'nullable|image|max:2048',
        //  'accessory.banner.image' => 'nullable|image|max:2048',
        //  'accessory.infoText.title' => 'nullable|string|max:255',
        //  'accessory.infoText.desc' => 'nullable|string',
        //  'accessory.accessoryTypes.*.title' => 'nullable|string|max:255',
        //  'accessory.accessoryTypes.*.desc' => 'nullable|string',
        //  'accessory.accessoryTypes.*.itemsList.*' => 'nullable|string|max:255',

        //  // Short Specs Info section
        //  'shortSpecInfo.info1' => 'nullable|string|max:255',
        //  'shortSpecInfo.info2' => 'nullable|string|max:255',
        //  'shortSpecInfo.info3' => 'nullable|string|max:255',

        //  // Gallery section
        //  'gallery.modelImage.src' => 'nullable||image|max:2048',
        //  'gallery.modelImage.alt' => 'nullable|string|max:255',
        //  'gallery.subFamilyHeroVideo.src' => 'nullable|string|max:255',
        //  'gallery.subFamilyHeroVideo.alt' => 'nullable|string|max:255',
        //  'gallery.subFamilyTopSectionImage.src' => 'nullable|image|max:2048',
        //  'gallery.subFamilyTopSectionImage.alt' => 'nullable|string|max:255',
        //  'gallery.subFamilyTopSectionBGImage.src' => 'nullable|image|max:2048',
        //  'gallery.subFamilyTopSectionBGImage.alt' => 'nullable|string|max:255',

        // //  Service Section

        // 'service.0.title' => 'nullable|string|max:255',
        // 'service.0.desc' => 'nullable|string|max:255',

        // ]);

        // $validatedData['gallery'] = json_encode($request->input('gallery'));

        $subFamAdventure = SubFamAdventure::findOrFail($id);

        // // Process image uploads for the gallery section
        // if ($request->hasFile('gallery.modelImage.src')) {
        //     $modelImagePath = $request->file('gallery.modelImage.src')->store('images/gallery', 'public');
        //     $validatedData['gallery']['modelImage']['src'] = Storage::url($modelImagePath);
        // }

        // if ($request->hasFile('gallery.subFamilyTopSectionImage.src')) {
        //     $topSectionImagePath = $request->file('gallery.subFamilyTopSectionImage.src')->store('images/gallery', 'public');
        //     $validatedData['gallery']['subFamilyTopSectionImage']['src'] = Storage::url($topSectionImagePath);
        // }

        // if ($request->hasFile('gallery.subFamilyTopSectionBGImage.src')) {
        //     $topSectionBGImagePath = $request->file('gallery.subFamilyTopSectionBGImage.src')->store('images/gallery', 'public');
        //     $validatedData['gallery']['subFamilyTopSectionBGImage']['src'] = Storage::url($topSectionBGImagePath);
        // }

        // // Process image uploads for the grayCarousell section
        // if ($request->hasFile('grayCarousell')) {
        //     foreach ($request->file('grayCarousell') as $key => $file) {
        //         if ($file->isValid()) {
        //             $imagePath = $file->store('images/gray_carousell', 'public');
        //             $validatedData['grayCarousell'][$key]['image'] = Storage::url($imagePath);
        //         }
        //     }
        // }

        // // Process image upload for the reasonsToDrive section
        // if ($request->hasFile('reasonsToDrive.banner.image')) {
        //     $bannerImagePath = $request->file('reasonsToDrive.banner.image')->store('images/reasons_to_drive', 'public');
        //     $validatedData['reasonsToDrive']['banner']['image'] = Storage::url($bannerImagePath);
        // }

        // // Process the accessory banner image if uploaded
        // if ($request->hasFile('accessory.banner.image')) {
        //     // Store the uploaded image and update the path in the database
        //     $bannerImagePath = $request->file('accessory.banner.image')->store('images/accessory', 'public');
        //     $subFamAdventure->accessory->banner->image = Storage::url($bannerImagePath);
        //     $subFamAdventure->accessory->banner->save();
        // }


        $subFamAdventure->update();

        return redirect()->route('edit-sub-fam', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }
}
