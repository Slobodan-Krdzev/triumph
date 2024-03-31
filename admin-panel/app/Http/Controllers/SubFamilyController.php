<?php

namespace App\Http\Controllers;

use App\Models\SubFamily;
use App\Service\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SubFamilyController extends Controller
{
    public function create()
    {
        return view('layouts.families.sub-family.add');
    }public function store(Request $request)
{
    $validatedData = $request->validate([
        'subFamilyName' => 'required|string|max:255|unique:sub_fam_adventure,subFamilyName,',
    ]);

    $data = array_merge($request->except('subFamilyName'), $validatedData);

    $title = Str::slug($validatedData['subFamilyName']);

    $data['subFamilyPageInfo']['audioSection']['audio'] = ImageStorage::storeFile($request, 'subFamilyPageInfo.audioSection.audio', 'subFamilies/', $title, '/audio');

    $data['subFamilyPageInfo']['audioSection']['logo'] = ImageStorage::storeFile($request, 'subFamilyPageInfo.audioSection.logo', 'subFamilies/', $title, '/logo');

    for ($i = 0; $i < count($request->input('reasonsToDrive.reasons')); $i++) {
        $data['reasonsToDrive']['reasons'][$i]['image'] = ImageStorage::storeFile($request, 'reasonsToDrive.reasons.' . $i . '.image', 'subFamilies/', $title, '/reasonsToDriveReasons');
    }

    for ($i = 0; $i < count($request->input('grayCarousell')); $i++) {
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


    SubFamily::create($data);


    return back()->with('success', 'Sub-Family data stored successfully');
}
    public function edit($id)
    {
        $subFamData = SubFamily::findOrFail($id);
        return view('layouts.families.sub-family.edit', compact('subFamData'));
    }

    public function update(Request $request, $id)
    {
        $subFamAdventure = SubFamily::findOrFail($id);

        $validatedData = $request->validate([
            'subFamilyName' => ['required', Rule::unique('sub_fam_adventure', 'subFamilyName')->ignore($subFamAdventure)],
        ]);

        $data = array_merge($request->except('subFamilyName'), $validatedData);

        $title = Str::slug($validatedData['subFamilyName']);

        $data['subFamilyPageInfo']['audioSection']['audio'] = ImageStorage::storeOrUpdateFile($request, 'subFamilyPageInfo.audioSection.audio', 'subfamilies/', $title, '/audio', $subFamAdventure['subFamilyPageInfo']['audioSection']['audio'] ?? '', $subFamAdventure->subFamilyName);

        $data['subFamilyPageInfo']['audioSection']['logo'] = ImageStorage::storeOrUpdateFile($request, 'subFamilyPageInfo.audioSection.logo', 'subfamilies/', $title, '/logo', $subFamAdventure['subFamilyPageInfo']['audioSection']['logo'] ?? '', $subFamAdventure->subFamilyName);

        if ($request->has('reasonsToDrive.reasons')) {
            $reasonsArray = array_values($request->input('reasonsToDrive.reasons'));

            $data['reasonsToDrive']['reasons'] = $reasonsArray;
            foreach ($reasonsArray as $i=> $reasons) {
                $data['reasonsToDrive']['reasons'][$i]['image'] = ImageStorage::storeOrUpdateFile($request, 'reasonsToDrive.reasons.' . $i. '.image', 'subfamilies/', $title, '/reasonsToDriveReasons', $subFamAdventure['reasonsToDrive']['reasons'][$i]['image'] ?? '', $subFamAdventure->subFamilyName);
            }
        }

        if ($request->has('grayCarousell')) {
            $grayCarousellArray = array_values($request->input('grayCarousell'));

            $data['grayCarousell'] = $grayCarousellArray;
            foreach ($grayCarousellArray as $i=> $carousel) {
                    $data['grayCarousell'][$i]['image'] = ImageStorage::storeOrUpdateFile($request, 'grayCarousell.' . $i . '.image', 'subfamilies/', $title, '/grayCarousell', $subFamAdventure['grayCarousell'][$i]['image'] ?? '', $subFamAdventure->subFamilyName);
            }
        }

        $data['reasonsToDrive']['banner']['image'] = ImageStorage::storeOrUpdateFile($request, 'reasonsToDrive.banner.image', 'subfamilies/', $title, '/reasonsToDriveBanner', $subFamAdventure['reasonsToDrive']['banner']['image'] ?? '', $subFamAdventure->subFamilyName);

        $data['gallery']['modelImage']['src'] = ImageStorage::storeOrUpdateFile($request, 'gallery.modelImage.src', 'subfamilies/', $title, '/galleryModelImage', $subFamAdventure['gallery']['modelImage']['src'] ?? '', $subFamAdventure->subFamilyName);

        $data['gallery']['subFamilyHeroImageMobile']['src'] = ImageStorage::storeOrUpdateFile($request, 'gallery.subFamilyHeroImageMobile.src', 'subfamilies/', $title, '/galleryMobileImage', $subFamAdventure['gallery']['subFamilyHeroImageMobile']['src'] ?? '', $subFamAdventure->subFamilyName);

        $data['gallery']['subFamilyTopSectionImage']['src'] = ImageStorage::storeOrUpdateFile($request, 'gallery.subFamilyTopSectionImage.src', 'subfamilies/', $title, '/galleryTopSectionImage', $subFamAdventure['gallery']['subFamilyTopSectionImage']['src'] ?? '', $subFamAdventure->subFamilyName);

        $data['gallery']['subFamilyTopSectionBGImage']['src'] = ImageStorage::storeOrUpdateFile($request, 'gallery.subFamilyTopSectionBGImage.src', 'subfamilies/', $title, '/galleryTopSectionBGImage', $subFamAdventure['gallery']['subFamilyTopSectionBGImage']['src'] ?? '', $subFamAdventure->subFamilyName);

        $data['accessory']['banner']['image'] = ImageStorage::storeOrUpdateFile($request, 'accessory.banner.image', 'subfamilies/', $title, '/accessoryBannerImage', $subFamAdventure['accessory']['banner']['image'] ?? '', $subFamAdventure->subFamilyName);

        if (isset($request['accessory']['accessoryTypes'])) {
            $accessoryTypes = array_values($request->input('accessory.accessoryTypes'));

            $data['accessory']['accessoryTypes'] = $accessoryTypes;
            foreach ($accessoryTypes as $i => $accessoryType) {
                    $data['accessory']['accessoryTypes'][$i]['image1']['src'] = ImageStorage::storeOrUpdateFile($request, 'accessory.accessoryTypes.' . $i . '.image1.src', 'subfamilies/', $title, '/accessoryTypesImages', $subFamAdventure['accessory']['accessoryTypes'][$i]['image1']['src'] ?? '', $subFamAdventure->subFamilyName);

                    $data['accessory']['accessoryTypes'][$i]['image2']['src'] = ImageStorage::storeOrUpdateFile($request, 'accessory.accessoryTypes.' . $i . '.image2.src', 'subfamilies/', $title, '/accessoryTypesImages', $subFamAdventure['accessory']['accessoryTypes'][$i]['image2']['src'] ?? '', $subFamAdventure->subFamilyName);

            }
        }


        $data['gallery']['subFamilyHeroVideo']['src'] = ImageStorage::storeOrUpdateFile($request, 'gallery.subFamilyHeroVideo.src', 'subfamilies/', $title, '/galleryVideo', $subFamAdventure['gallery']['subFamilyHeroVideo']['src'] ?? '', $subFamAdventure->subFamilyName);


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

            $reasonsToDriveReasons = 'subFamilies/' . $oldTitle . '/reasonsToDriveReasons';
            $newReasonsToDriveReasons = 'subFamilies/' . $newTitle . '/reasonsToDriveReasons';

            $grayCarousell = 'subFamilies/' . $oldTitle . '/grayCarousell';
            $newGrayCarousell = 'subFamilies/' . $newTitle . '/grayCarousell';

            $logo = 'subFamilies/' . $oldTitle . '/logo';
            $newLogo = 'subFamilies/' . $newTitle . '/logo';

            $audio = 'subFamilies/' . $oldTitle . '/audio';
            $newAudio = 'subFamilies/' . $newTitle . '/audio';

            $reasonsToDriveBanner = 'subFamilies/' . $oldTitle . '/reasonsToDriveBanner';
            $newReasonsToDriveBanner = 'subFamilies/' . $newTitle . '/reasonsToDriveBanner';

            Storage::disk('public')->makeDirectory('subFamilies/' . $newTitle);

            $files = Storage::disk('public')->files($grayCarousell);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newGrayCarousell . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($reasonsToDriveReasons);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newReasonsToDriveReasons . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($accessoryBannerImage);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newAccessoryBannerImage . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($accessoryTypesImages);
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
}
