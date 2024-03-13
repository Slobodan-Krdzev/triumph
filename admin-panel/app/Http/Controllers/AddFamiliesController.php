<?php

namespace App\Http\Controllers;

use App\Models\SubFamAdventure;
use App\Service\ImageStorage;
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
            'subFamilyName' => 'required|string|max:255|unique:sub_fam_adventure,subFamilyName,',
        ]);

        $data = array_merge($request->except('subFamilyName'), $validatedData);

        $title = Str::slug($validatedData['subFamilyName']);


        $data['subFamilyPageInfo']['audioSection']['logo'] = ImageStorage::storeFile($request, 'subFamilyPageInfo.audioSection.logo', 'subFamilies/', $title, '/logo');

        for ($i = 0; $i < 3; $i++) {
            $data['grayCarousell'][$i]['image'] = ImageStorage::storeFile($request, 'grayCarousell.' . $i . '.image', 'subFamilies/', $title, '/grayCarousell');
        }

        $data['reasonsToDrive']['banner']['image'] = ImageStorage::storeFile($request, 'reasonsToDrive.banner.image', 'subFamilies/', $title, '/reasonsToDriveBanner');

        $data['gallery']['modelImage']['src'] = ImageStorage::storeFile($request, 'gallery.modelImage.src', 'subFamilies/', $title, '/galleryModelImage');

        $data['gallery']['subFamilyHeroImageMobile']['src'] = ImageStorage::storeFile($request, 'gallery.subFamilyHeroImageMobile.src', 'subFamilies/', $title, '/galleryMobileImage');

        $data['gallery']['subFamilyTopSectionImage']['src'] = ImageStorage::storeFile($request, 'gallery.subFamilyTopSectionImage.src', 'subFamilies/', $title, '/galleryTopSectionImage');

        $data['gallery']['subFamilyTopSectionBGImage']['src'] = ImageStorage::storeFile($request, 'gallery.subFamilyTopSectionBGImage.src', 'subFamilies/', $title, '/galleryTopSectionBGImage');

        $data['accessory']['banner']['image'] = ImageStorage::storeFile($request, 'accessory.banner.image', 'subFamilies/', $title, '/accessoryBannerImage');


        foreach ($request->accessory['accessoryTypes'] as $key => $accessoryType) {

            $data['accessory']['accessoryTypes'][$key]['image1']['src'] = ImageStorage::storeFile($request, 'accessory.accessoryTypes.' . $key . '.image1.src', 'subFamilies/', $title, '/accessoryTypesImages');

            $data['accessory']['accessoryTypes'][$key]['image2']['src'] = ImageStorage::storeFile($request, 'accessory.accessoryTypes.' . $key . '.image2.src', 'subFamilies/', $title, '/accessoryTypesImages');

        }

        $data['gallery']['subFamilyHeroVideo']['src'] = ImageStorage::storeFile($request, 'gallery.subFamilyHeroVideo.src', 'subFamilies/', $title, '/galleryVideo');


        SubFamAdventure::create($data);


        return back()->with('success', 'Sub-Family data stored successfully');
    }
}
