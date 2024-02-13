<?php

namespace App\Http\Controllers;

use App\Models\SubFamAdventure;
use Illuminate\Http\Request;

class SubFamAdventureController extends Controller
{
    public function edit($id)
    {

        $subFamData = SubFamAdventure::findOrFail($id);
        return view('layouts.edit-adventure', compact('subFamData'));

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
        $validatedData = $request->validate([
        'title' => 'nullable|string|max:255',
        'subFamilyName' => 'nullable|string|max:255',
        'url' => 'string',
        'price' => 'nullable|numeric',
        'youtubeVideo' => 'nullable|url',
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
        'grayCarousell.*.title' => 'nullable|string|max:255',
        'grayCarousell.*.desc' => 'nullable|string',
        'grayCarousell.*.image' => 'nullable|string|max:255',
        'specNumbers.*.data' => 'nullable|string|max:255',
        'specNumbers.*.info' => 'nullable|string',
        'reasonsToDrive.banner.image' => 'nullable|string|max:255',
        'reasonsToDrive.infoText.title' => 'nullable|string|max:255',
        'reasonsToDrive.infoText.desc' => 'nullable|string',
        'reasonsToDrive.reasons.*.title' => 'nullable|string|max:255',
        'reasonsToDrive.reasons.*.desc' => 'nullable|string',
        'reasonsToDrive.reasons.*.image' => 'nullable|string|max:255',
         // Accessory section
         'accessory.banner.image' => 'nullable|string|max:255',
         'accessory.infoText.title' => 'nullable|string|max:255',
         'accessory.infoText.desc' => 'nullable|string',
         'accessory.accessoryTypes.*.title' => 'nullable|string|max:255',
         'accessory.accessoryTypes.*.desc' => 'nullable|string',
         'accessory.accessoryTypes.*.itemsList.*' => 'nullable|string|max:255',

         // Short Specs Info section
         'shortSpecInfo.info1' => 'nullable|string|max:255',
         'shortSpecInfo.info2' => 'nullable|string|max:255',
         'shortSpecInfo.info3' => 'nullable|string|max:255',

         // Gallery section
         'gallery.modelImage.src' => 'nullable|string|max:255',
         'gallery.modelImage.alt' => 'nullable|string|max:255',
         'gallery.subFamilyHeroVideo.src' => 'nullable|string|max:255',
         'gallery.subFamilyHeroVideo.alt' => 'nullable|string|max:255',
         'gallery.subFamilyTopSectionImage.src' => 'nullable|string|max:255',
         'gallery.subFamilyTopSectionImage.alt' => 'nullable|string|max:255',
         'gallery.subFamilyTopSectionBGImage.src' => 'nullable|string|max:255',
         'gallery.subFamilyTopSectionBGImage.alt' => 'nullable|string|max:255',

        //  Service Section

        'service.0.title' => 'nullable|string|max:255',
        'service.0.desc' => 'nullable|string|max:255',

        ]);

        // $validatedData['gallery'] = json_encode($request->input('gallery'));

        $subFamAdventure = SubFamAdventure::findOrFail($id);
        $subFamAdventure->update($validatedData);

        return redirect()->route('edit-sub-fam', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }
}
