<?php

namespace App\Http\Controllers;

use App\Models\SubFamAdventure;
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
            //        'grayCarousell.*.title' => 'nullable|string|max:255',
            //        'grayCarousell.*.desc' => 'nullable|string',
            //        'grayCarousell.*.image' => 'nullable|image|max:2048',
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

        //ddd($request->hasFile('subFamilyPageInfo.audioSection.logo'));

        if ($request->hasFile('subFamilyPageInfo.audioSection.logo')) {
            $storage->delete(str_replace('storage/', '', $subFamAdventure['subFamilyPageInfo']['audioSection']['logo']));
            $imagePath = $request->file('subFamilyPageInfo.audioSection.logo')->storeAs('subFamilies/' . $title . '/logo', $request->file('subFamilyPageInfo.audioSection.logo')->getClientOriginalName(), 'public');
            $data['subFamilyPageInfo']['audioSection']['logo'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['subFamilyPageInfo']['audioSection']['logo']);
            $data['subFamilyPageInfo']['audioSection']['logo'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        for ($i = 0; $i < 3; $i++) {
            if ($request->hasFile('grayCarousell.' . $i . '.image')) {
                $storage->delete(str_replace('storage/', '', $subFamAdventure['grayCarousell'][$i]['image']));
                $imagePath = $request->file('grayCarousell.' . $i . '.image')->storeAs('subFamilies/' . $title . '/grayCarousell', $request->file('grayCarousell.' . $i . '.image')->getClientOriginalName(), 'public');
                $data['grayCarousell'][$i]['image'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
            } else {
                $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['grayCarousell'][$i]['image']);
                $data['grayCarousell'][$i]['image'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
            }
        }





        if ($request->hasFile('reasonsToDrive.banner.image')) {
            $storage->delete(str_replace('storage/', '', $subFamAdventure['reasonsToDrive']['banner']['image']));
            $imagePath = $request->file('reasonsToDrive.banner.image')->storeAs('subFamilies/' . $title . '/reasonsToDriveBanner', $request->file('reasonsToDrive.banner.image')->getClientOriginalName(), 'public');
            $data['reasonsToDrive']['banner']['image'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['reasonsToDrive']['banner']['image']);
            $data['reasonsToDrive']['banner']['image'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        if ($request->hasFile('gallery.modelImage.src')) {
            $storage->delete(str_replace('storage/', '', $subFamAdventure['gallery']['modelImage']['src']));
            $imagePath = $request->file('gallery.modelImage.src')->storeAs('subFamilies/' . $title . '/galleryModelImage', $request->file('gallery.modelImage.src')->getClientOriginalName(), 'public');
            $data['gallery']['modelImage']['src'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['gallery']['modelImage']['src']);
            $data['gallery']['modelImage']['src'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        if ($request->hasFile('gallery.subFamilyHeroImageMobile.src')) {
            $storage->delete(str_replace('storage/', '', $subFamAdventure['gallery']['subFamilyHeroImageMobile']['src']));
            $imagePath = $request->file('gallery.subFamilyHeroImageMobile.src')->storeAs('subFamilies/' . $title . '/galleryMobileImage', $request->file('gallery.subFamilyHeroImageMobile.src')->getClientOriginalName(), 'public');
            $data['gallery']['subFamilyHeroImageMobile']['src'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['gallery']['subFamilyHeroImageMobile']['src']);
            $data['gallery']['subFamilyHeroImageMobile']['src'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        if ($request->hasFile('gallery.subFamilyTopSectionImage.src')) {
            $storage->delete(str_replace('storage/', '', $subFamAdventure['gallery']['subFamilyTopSectionImage']['src']));
            $imagePath = $request->file('gallery.subFamilyTopSectionImage.src')->storeAs('subFamilies/' . $title . '/galleryTopSectionImage', $request->file('gallery.subFamilyTopSectionImage.src')->getClientOriginalName(), 'public');
            $data['gallery']['subFamilyTopSectionImage']['src'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['gallery']['subFamilyTopSectionImage']['src']);
            $data['gallery']['subFamilyTopSectionImage']['src'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        if ($request->hasFile('gallery.subFamilyTopSectionBGImage.src')) {
            $storage->delete(str_replace('storage/', '', $subFamAdventure['gallery']['subFamilyTopSectionBGImage']['src']));
            $imagePath = $request->file('gallery.subFamilyTopSectionBGImage.src')->storeAs('subFamilies/' . $title . '/galleryTopSectionBGImage', $request->file('gallery.subFamilyTopSectionBGImage.src')->getClientOriginalName(), 'public');
            $data['gallery']['subFamilyTopSectionBGImage']['src'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['gallery']['subFamilyTopSectionBGImage']['src']);
            $data['gallery']['subFamilyTopSectionBGImage']['src'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        if ($request->hasFile('accessory.banner.image')) {
            $storage->delete(str_replace('storage/', '', $subFamAdventure['accessory']['banner']['image']));
            $imagePath = $request->file('accessory.banner.image')->storeAs('subFamilies/' . $title . '/accessoryBannerImage', $request->file('accessory.banner.image')->getClientOriginalName(), 'public');
            $data['accessory']['banner']['image'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['accessory']['banner']['image']);
            $data['accessory']['banner']['image'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        foreach ($request->accessory['accessoryTypes'] as $key => $accessoryType) {

            if ($request->hasFile('accessory.accessoryTypes.' . $key . '.image1.src')) {
                $storage->delete(str_replace('storage/', '', $subFamAdventure['accessory']['accessoryTypes'][$key]['image1']['src']));
                $imagePath = $request->file('accessory.accessoryTypes.' . $key . '.image1.src')->storeAs('subFamilies/' . $title . '/accessoryTypesImages', $request->file('accessory.accessoryTypes.' . $key . '.image1.src')->getClientOriginalName(), 'public');
                $data['accessory']['accessoryTypes'][$key]['image1']['src'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
            } else {
                $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['accessory']['accessoryTypes'][$key]['image1']['src']);
                $data['accessory']['accessoryTypes'][$key]['image1']['src'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
            }

            if ($request->hasFile('accessory.accessoryTypes.' . $key . '.image2.src')) {
                $storage->delete(str_replace('storage/', '', $subFamAdventure['accessory']['accessoryTypes'][$key]['image2']['src']));
                $imagePath = $request->file('accessory.accessoryTypes.' . $key . '.image2.src')->storeAs('subFamilies/' . $title . '/accessoryTypesImages', $request->file('accessory.accessoryTypes.' . $key . '.image2.src')->getClientOriginalName(), 'public');
                $data['accessory']['accessoryTypes'][$key]['image2']['src'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
            } else {
                $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['accessory']['accessoryTypes'][$key]['image2']['src']);
                $data['accessory']['accessoryTypes'][$key]['image2']['src'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
            }
        }

        if ($request->hasFile('gallery.subFamilyHeroVideo.src')) {
            $storage->delete(str_replace('storage/', '', $subFamAdventure['gallery']['subFamilyHeroVideo']['src']));
            $imagePath = $request->file('gallery.subFamilyHeroVideo.src')->storeAs('subFamilies/' . $title . '/galleryVideo', $request->file('gallery.subFamilyHeroVideo.src')->getClientOriginalName(), 'public');
            $data['gallery']['subFamilyHeroVideo']['src'] = str_starts_with($imagePath, '/storage/') ? $imagePath : '/storage/' . $imagePath;
        } else {
            $newImagePath = str_replace(Str::slug($subFamAdventure->subFamilyName), $title, $subFamAdventure['gallery']['subFamilyHeroVideo']['src']);
            $data['gallery']['subFamilyHeroVideo']['src'] = str_starts_with($newImagePath, '/storage/') ? $newImagePath : '/storage/' . $newImagePath;
        }

        //ddd(Str::slug($request->subFamilyName) != Str::slug($subFamAdventure->subFamilyName));

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
            $newGrayCarousell  = 'subFamilies/' . $newTitle . '/grayCarousell ';

            $logo = 'subFamilies/' . $oldTitle . '/logo';
            $newLogo = 'subFamilies/' . $newTitle . '/logo';

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
