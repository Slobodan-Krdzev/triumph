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

        //ddd($request->all());
        $validatedData = $request->validate([
            'subFamilyName' => 'required|string',
            'familyType' => 'required|string',
            'title' => 'required|string',
            'price' => 'nullable|numeric',
            'url' => 'nullable|string',
            'specs.*.desc' => 'nullable|string',
            'specs.*.data' => 'nullable|string',
            'subFamilyPageInfo.heroSlogans' => 'nullable|array',
            'subFamilyPageInfo.fullSpecs.engineTransmission.*.title' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.engineTransmission.*.desc' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.frame.*.title' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.frame.*.desc' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.dimension.*.title' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.dimension.*.desc' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.fuelConsumption.*.title' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.fuelConsumption.*.desc' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.service.*.title' => 'nullable|string',
            'subFamilyPageInfo.fullSpecs.service.*.desc' => 'nullable|string',
            'subFamilyPageInfo.grayCarousell.*.id' => 'nullable|string',
            'subFamilyPageInfo.grayCarousell.*.title' => 'nullable|string',
            'subFamilyPageInfo.grayCarousell.*.desc' => 'nullable|string',
            'subFamilyPageInfo.grayCarousell.*.image' => 'nullable|image|max:2048',
            'subFamilyPageInfo.audioSection.title' => 'nullable|string',
            'subFamilyPageInfo.audioSection.desc' => 'nullable|string',
            'subFamilyPageInfo.audioSection.audio' => 'nullable|string',
            'subFamilyPageInfo.specNumbers.*.data' => 'nullable|string',
            'subFamilyPageInfo.specNumbers.*.info' => 'nullable|string',
            'accessory.banner.image' => 'nullable|image|max:2048',
            'accessory.infoText.title' => 'nullable|string',
            'accessory.accessoryTypes.*.title' => 'nullable|string',
            'accessory.accessoryTypes.*.desc' => 'nullable|string',
            'accessory.accessoryTypes.*.image1.src' => 'nullable|image|max:2048',
            'accessory.accessoryTypes.*.image1.alt' => 'nullable|string',
            'accessory.accessoryTypes.*.image2.src' => 'nullable|image|max:2048',
            'accessory.accessoryTypes.*.image2.alt' => 'nullable|string',
            'gallery.modelImage.src' => 'nullable|image|max:2048',
            'gallery.modelImage.alt' => 'nullable|string',
            'gallery.subFamilyHeroVideo.src' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
            'gallery.subFamilyHeroVideo.alt' => 'nullable|string',
            'gallery.subFamilyHeroImageMobile.src' => 'nullable|image|max:2048',
            'gallery.subFamilyHeroImageMobile.alt' => 'nullable|string',
            'gallery.subFamilyTopSectionImage.src' => 'nullable|image|max:2048',
            'gallery.subFamilyTopSectionImage.alt' => 'nullable|string',
            'gallery.subFamilyTopSectionBGImage.src' => 'nullable|image|max:2048',
            'gallery.subFamilyTopSectionBGImage.alt' => 'nullable|string',
        ]);

        // Define an array to hold the paths of all uploaded images
        $title = Str::slug($request->subFamilyName);

        //ddd($request->subFamilyName);

        ddd($request->grayCarousell[0]['image']->getClientOriginalName());

        if ($request->hasFile('subFamilyPageInfo[audioSection][logo]')) {
            $image = $request->file('subFamilyPageInfo[audioSection][logo]')->getClientOriginalName();
            $imagePath = $request->file('subFamilyPageInfo[audioSection][logo]')->storeAs('subFamilies/' . $title . '/logo', $image, 'public');
            $validatedData['subFamilyPageInfo[audioSection][logo]'] = Storage::url($imagePath);
        }

        for($i = 0; $i <3; $i++){
            if ($request->hasFile('grayCarousell[' . $i . '][image]')) {
                $image = $request->file('grayCarousell[' . $i . '][image]')->getClientOriginalName();
                $imagePath = $request->file('grayCarousell[' . $i . '][image]')->storeAs('subFamilies/' . $title . '/grayCarousell', $image, 'public');
                $validatedData['grayCarousell[' . $i . '][image]'] = Storage::url($imagePath);
            }
        }

        if ($request->hasFile('reasonsToDrive[banner][image]')) {
            $image = $request->file('reasonsToDrive[banner][image]')->getClientOriginalName();
            $imagePath = $request->file('reasonsToDrive[banner][image]')->storeAs('subFamilies/' . $title . '/reasonsToDriveBanner', $image, 'public');
            $validatedData['reasonsToDrive[banner][image]'] = Storage::url($imagePath);
        }

        if ($request->hasFile('gallery[modelImage][src]')) {
            $image = $request->file('gallery[modelImage][src]')->getClientOriginalName();
            $imagePath = $request->file('gallery[modelImage][src]')->storeAs('subFamilies/' . $title . '/galleryModelImage', $image, 'public');
            $validatedData['gallery[modelImage][src]'] = Storage::url($imagePath);
        }

        if ($request->hasFile('gallery[subFamilyHeroImageMobile][src]')) {
            $image = $request->file('gallery[subFamilyHeroImageMobile][src]')->getClientOriginalName();
            $imagePath = $request->file('gallery[subFamilyHeroImageMobile][src]')->storeAs('subFamilies/' . $title . '/galleryMobileImage', $image, 'public');
            $validatedData['gallery[subFamilyHeroImageMobile][src]'] = Storage::url($imagePath);
        }

        if ($request->hasFile('gallery[subFamilyTopSectionImage][src]')) {
            $image = $request->file('gallery[subFamilyTopSectionImage][src]')->getClientOriginalName();
            $imagePath = $request->file('gallery[subFamilyTopSectionImage][src]')->storeAs('subFamilies/' . $title . '/galleryTopSectionImage', $image, 'public');
            $validatedData['gallery[subFamilyTopSectionImage][src]'] = Storage::url($imagePath);
        }

        if ($request->hasFile('gallery[subFamilyTopSectionBGImage][src]')) {
            $image = $request->file('gallery[subFamilyTopSectionBGImage][src]')->getClientOriginalName();
            $imagePath = $request->file('gallery[subFamilyTopSectionBGImage][src]')->storeAs('subFamilies/' . $title . '/galleryTopSectionBGImage', $image, 'public');
            $validatedData['gallery[subFamilyTopSectionBGImage][src]'] = Storage::url($imagePath);
        }

        if ($request->hasFile('accessory[banner][image]')) {
            $image = $request->file('accessory[banner][image]')->getClientOriginalName();
            $imagePath = $request->file('accessory[banner][image]')->storeAs('subFamilies/' . $title . '/accessoryBannerImage', $image, 'public');
            $validatedData['accessory[banner][image]'] = Storage::url($imagePath);
        }

        if ($request->hasFile('accessory[accessoryTypes][][image1][src]')) {
            $image = $request->file('accessory[accessoryTypes][][image1][src]')->getClientOriginalName();
            $imagePath = $request->file('accessory[accessoryTypes][][image1][src]')->storeAs('subFamilies/' . $title . '/accessoryTypesImages', $image, 'public');
            $validatedData['accessory[accessoryTypes][][image1][src]'] = Storage::url($imagePath);
        }

        if ($request->hasFile('accessory[accessoryTypes][][image2][src]')) {
            $image = $request->file('accessory[accessoryTypes][][image2][src]')->getClientOriginalName();
            $imagePath = $request->file('accessory[accessoryTypes][][image2][src]')->storeAs('subFamilies/' . $title . '/accessoryTypesImages', $image, 'public');
            $validatedData['accessory[accessoryTypes][][image2][src]'] = Storage::url($imagePath);
        }

        if ($request->hasFile('gallery[subFamilyHeroVideo][src]')) {
            $video = $request->file('gallery[subFamilyHeroVideo][src]')->getClientOriginalName();
            $videoPath = $request->file('gallery[subFamilyHeroVideo][src]')->storeAs('subFamilies/' . $title . '/galleryVideo', $video, 'public');
            $validatedData['gallery[subFamilyHeroVideo][src]'] = Storage::url($videoPath);
        }

        $subFamily = new SubFamAdventure();
        $subFamily->fill($validatedData);

        $subFamily->save();

        return back()->with('success', 'Sub-Family data stored successfully');
    }
}
