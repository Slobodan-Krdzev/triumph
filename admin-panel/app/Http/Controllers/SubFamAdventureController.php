<?php

namespace App\Http\Controllers;

use App\Models\SubFamAdventure;
use App\Service\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
        $subFamAdventure = SubFamAdventure::findOrFail($id);

        $validatedData = $request->validate([
            //        'title' => 'nullable|string|max:255',
            'subFamilyName' => ['required', Rule::unique('sub_fam_adventure', 'subFamilyName')->ignore($subFamAdventure)],
            //        'url' => 'string',
            //        'price' => 'nullable|numeric',
            //        'youtubeVideo' => 'nullable|string',
            //        'engineTransmission.*.title' => 'nullable|string|max:255',
            //        'engineTransmission.*.desc' => 'nullable|string|max:255',
            //        'subFamilyPageInfo.service.*.title' => 'nullable|string|max:255',
            //        'subFamilyPageInfo.service.*.desc' => 'nullable|string',
            //        'subFamilyPageInfo.audioSection.title' => 'nullable|string|max:255',
            //        'subFamilyPageInfo.audioSection.desc' => 'nullable|string',
            //        'subFamilyPageInfo.audioSection.audio' => 'nullable|string|max:255',
            //        'subFamilyPageInfo.topSection.title' => 'nullable|string|max:255',
            //        'subFamilyPageInfo.topSection.desc' => 'nullable|string',
            //        'subFamilyPageInfo.topSection.subtitle' => 'nullable|string|max:255',
            //        'heroSlogans.*' => 'nullable|string|max:255',
            //        'frame.*.title' => 'nullable|string|max:255',
            //        'frame.*.desc' => 'nullable|string|max:255',
            //        'dimension.*.title' => 'nullable|string|max:255',
            //        'dimension.*.desc' => 'nullable|string|max:255',
            //        'fuelConsumption.*.title' => 'nullable|string|max:255',
            //        'fuelConsumption.*.desc' => 'nullable|string|max:255',
            //        'grayCarousel.*.title' => 'nullable|string|max:255',
            //        'grayCarousel.*.desc' => 'nullable|string',
            //        'grayCarousel.*.image' => 'nullable|image|max:2048',
            //        'specNumbers.*.data' => 'nullable|string|max:255',
            //        'specNumbers.*.info' => 'nullable|string',
            //        'reasonsToDrive.banner.image' => 'nullable|image|max:2048',
            //        'reasonsToDrive.infoText.title' => 'nullable|string|max:255',
            //        'reasonsToDrive.infoText.desc' => 'nullable|string',
            //        'reasonsToDrive.reasons.*.title' => 'nullable|string|max:255',
            //        'reasonsToDrive.reasons.*.desc' => 'nullable|string',
            //        'reasonsToDrive.reasons.*.image' => 'nullable|image|max:2048',
            //         'accessory.banner.image' => 'nullable|image|max:2048',
            //         'accessory.infoText.title' => 'nullable|string|max:255',
            //         'accessory.infoText.desc' => 'nullable|string',
            //         'accessory.accessoryTypes.*.title' => 'nullable|string|max:255',
            //         'accessory.accessoryTypes.*.desc' => 'nullable|string',
            //         'accessory.accessoryTypes.*.itemsList.*' => 'nullable|string|max:255',
            //
            //         // Short Specs Info section
            //         'shortSpecInfo.info1' => 'nullable|string|max:255',
            //         'shortSpecInfo.info2' => 'nullable|string|max:255',
            //         'shortSpecInfo.info3' => 'nullable|string|max:255',
            //
            //         // Gallery section
            //         'gallery.modelImage.src' => 'nullable||image|max:2048',
            //         'gallery.modelImage.alt' => 'nullable|string|max:255',
            //         'gallery.subFamilyHeroVideo.src' => 'nullable|string|max:255',
            //         'gallery.subFamilyHeroVideo.alt' => 'nullable|string|max:255',
            //         'gallery.subFamilyTopSectionImage.src' => 'nullable|image|max:2048',
            //         'gallery.subFamilyTopSectionImage.alt' => 'nullable|string|max:255',
            //         'gallery.subFamilyTopSectionBGImage.src' => 'nullable|image|max:2048',
            //         'gallery.subFamilyTopSectionBGImage.alt' => 'nullable|string|max:255',
            //
            //        //  Service Section
            //
            //        'service.0.title' => 'nullable|string|max:255',
            //        'service.0.desc' => 'nullable|string|max:255',

        ]);

        $data = array_merge($request->except('subFamilyName'), $validatedData);


        $title = Str::slug($request->subFamilyName);
        $storage = Storage::disk('public');


        $data['subFamilyPageInfo']['audioSection']['audio'] = ImageStorage::updateFile($request, 'subFamilyPageInfo.audioSection.audio', 'subfamilies/', $title, '/audio', $subFamAdventure['subFamilyPageInfo']['audioSection']['audio'], $subFamAdventure->subFamilyName);

        $data['subFamilyPageInfo']['audioSection']['logo'] = ImageStorage::updateFile($request, 'subFamilyPageInfo.audioSection.logo', 'subfamilies/', $title, '/logo', $subFamAdventure['subFamilyPageInfo']['audioSection']['logo'], $subFamAdventure->subFamilyName);


        if ($request->has('grayCarousell')) {
            $grayCarousellData = $request->input('grayCarousell');
            for ($i = 0; $i < count($grayCarousellData); $i++) {
                $imageKey = 'grayCarousell.' . $i . '.image';
                if(isset($grayCarousellData[$i]) && isset($grayCarousellData[$i]['image'])) {
                    $data['grayCarousell'][$i]['image'] = ImageStorage::updateFile($request, $imageKey, 'subfamilies/', $title, '/grayCarousell', $subFamAdventure['grayCarousell'][$i]['image'], $subFamAdventure->subFamilyName);
                }
            }
        }

        $data['reasonsToDrive']['banner']['image'] = ImageStorage::updateFile($request, 'reasonsToDrive.banner.image', 'subfamilies/', $title, '/reasonsToDriveBanner', $subFamAdventure['reasonsToDrive']['banner']['image'], $subFamAdventure->subFamilyName);

        $data['gallery']['modelImage']['src'] = ImageStorage::updateFile($request, 'gallery.modelImage.src', 'subfamilies/', $title, '/galleryModelImage', $subFamAdventure['gallery']['modelImage']['src'], $subFamAdventure->subFamilyName);

        $data['gallery']['subFamilyHeroImageMobile']['src'] = ImageStorage::updateFile($request, 'gallery.subFamilyHeroImageMobile.src', 'subfamilies/', $title, '/galleryMobileImage', $subFamAdventure['gallery']['subFamilyHeroImageMobile']['src'], $subFamAdventure->subFamilyName);

        $data['gallery']['subFamilyTopSectionImage']['src'] = ImageStorage::updateFile($request, 'gallery.subFamilyTopSectionImage.src', 'subfamilies/', $title, '/galleryTopSectionImage', $subFamAdventure['gallery']['subFamilyTopSectionImage']['src'], $subFamAdventure->subFamilyName);

        $data['gallery']['subFamilyTopSectionBGImage']['src'] = ImageStorage::updateFile($request, 'gallery.subFamilyTopSectionBGImage.src', 'subfamilies/', $title, '/galleryTopSectionBGImage', $subFamAdventure['gallery']['subFamilyTopSectionBGImage']['src'], $subFamAdventure->subFamilyName);

        $data['accessory']['banner']['image'] = ImageStorage::updateFile($request, 'accessory.banner.image', 'subfamilies/', $title, '/accessoryBannerImage', $subFamAdventure['accessory']['banner']['image'], $subFamAdventure->subFamilyName);

        if ($request->has('accessory.accessoryTypes')) {
            foreach ($request->accessory['accessoryTypes'] as $key => $accessoryType) {
                $data['accessory']['accessoryTypes'][$key]['image1']['src'] = ImageStorage::updateFile($request, 'accessory.accessoryTypes.' . $key . '.image1.src', 'subfamilies/', $title, '/accessoryTypesImages', $subFamAdventure['accessory']['accessoryTypes'][$key]['image1']['src'], $subFamAdventure->subFamilyName);

                $data['accessory']['accessoryTypes'][$key]['image2']['src'] = ImageStorage::updateFile($request, 'accessory.accessoryTypes.' . $key . '.image2.src', 'subfamilies/', $title, '/accessoryTypesImages', $subFamAdventure['accessory']['accessoryTypes'][$key]['image2']['src'], $subFamAdventure->subFamilyName);
            }
        }

        $data['gallery']['subFamilyHeroVideo']['src'] = ImageStorage::updateFile($request, 'gallery.subFamilyHeroVideo.src', 'subfamilies/', $title, '/galleryVideo', $subFamAdventure['gallery']['subFamilyHeroVideo']['src'], $subFamAdventure->subFamilyName);


        if (Str::slug($request->subFamilyName) != Str::slug($subFamAdventure->subFamilyName)) {
            $oldTitle = Str::slug($subFamAdventure->subFamilyName);
            $newTitle = Str::slug($request->subFamilyName);

            $accessoryBannerImage = 'subFamilies/' . $oldTitle . '/accessoryBannerImage';
            $newAccessoryBannerImage = 'subFamilies/' . $newTitle . '/accessoryBannerImage';

            $accessoryTypesImages = 'subFamilies/' . $oldTitle . '/accessoryTypesImages';
            $newAccessoryTypesImages = 'subFamilies/' . $newTitle . '/accessoryTypesImages';

            $galleryMobileImage = 'subFamilies/' . $oldTitle . '/galleryMobileImage';
            $newGalleryMobileImage = 'subFamilies/' . $newTitle . '/galleryMobileImage';

            $galleryModelImage = 'subFamilies/' . $oldTitle . '/galleryModelImage';
            $newGalleryModelImage = 'subFamilies/' . $newTitle . '/galleryModelImage';

            $galleryTopSectionBGImage = 'subFamilies/' . $oldTitle . '/galleryTopSectionBGImage';
            $newGalleryTopSectionBGImage = 'subFamilies/' . $newTitle . '/galleryTopSectionBGImage';

            $galleryTopSectionImage = 'subFamilies/' . $oldTitle . '/galleryTopSectionImage';
            $newGalleryTopSectionImage = 'subFamilies/' . $newTitle . '/galleryTopSectionImage';

            $galleryVideo = 'subFamilies/' . $oldTitle . '/galleryVideo';
            $newGalleryVideo = 'subFamilies/' . $newTitle . '/galleryVideo';

            $grayCarousell = 'subFamilies/' . $oldTitle . '/grayCarousell ';
            $newGrayCarousell = 'subFamilies/' . $newTitle . '/grayCarousell ';

            $logo = 'subFamilies/' . $oldTitle . '/logo';
            $newLogo = 'subFamilies/' . $newTitle . '/logo';

            $audio = 'subFamilies/' . $oldTitle . '/audio';
            $newAudio = 'subFamilies/' . $newTitle . '/audio';

            $reasonsToDriveBanner = 'subFamilies/' . $oldTitle . '/reasonsToDriveBanner';
            $newReasonsToDriveBanner = 'subFamilies/' . $newTitle . '/reasonsToDriveBanner';

            Storage::disk('public')->makeDirectory('subFamilies/' . $newTitle);


            $files = Storage::disk('public')->files($accessoryBannerImage);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newAccessoryBannerImage . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($accessoryTypesImages);
            //ddd($files);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newAccessoryTypesImages . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($galleryMobileImage);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newGalleryMobileImage . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($galleryModelImage);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newGalleryModelImage . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($galleryTopSectionBGImage);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newGalleryTopSectionBGImage . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($galleryTopSectionImage);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newGalleryTopSectionImage . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($galleryVideo);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newGalleryVideo . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($grayCarousell);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newGrayCarousell . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($logo);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newLogo . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($audio);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newAudio . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($reasonsToDriveBanner);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newReasonsToDriveBanner . '/' . $filename);
                }
            }

            Storage::disk('public')->deleteDirectory('subFamilies/' . $oldTitle);
        }


        $subFamAdventure->update($data);


        return redirect()->route('edit-sub-fam', ['id' => $id])->with('success', 'Your data has been updated successfully.');
    }


    public function getSubFam()
    {
        $subFamData = SubFamAdventure::all();

        $subFamData->makeHidden(['created_at', 'updated_at']);

        return response()->json($subFamData);
    }
}
