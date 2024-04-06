<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Promo;
use App\Models\SubFamily;
use App\Service\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class FamiliesController extends Controller
{
    public function index()
    {
        $familyData = Family::all();
        $subFamData = SubFamily::all();

        return view('layouts.families.view',compact('familyData', 'subFamData'));
    }

    public function edit($id)
    {
        $family = Family::findOrFail($id);
        $promos = Promo::where('category', $family->type)->get();

        return view('layouts.families.family.edit', compact('family', 'promos'));
    }

    public function update(Request $request, $id)
    {
        $family = Family::findOrFail($id);

        $validatedData = $request->validate([
            'type' => ['required', Rule::unique('families', 'type')->ignore($family)],
        ]);

        $data = array_merge($request->except('type'), $validatedData);

        $title = Str::slug($validatedData['type']);

        $data['mainBikeLogoImage']['url'] = ImageStorage::storeOrUpdateFile($request, 'mainBikeLogoImage.url', 'families/', $title, '/mainBikeLogoImage', $family['mainBikeLogoImage']['url'] ?? '', $family->type);

        $data['familyPageBannerVideo'] = ImageStorage::storeOrUpdateFile($request, 'familyPageBannerVideo', 'families/', $title, '/familyPageBannerVideo', $family['familyPageBannerVideo'] ?? '', $family->type);

        $data['configFamilyPageInfo']['image']['src'] = ImageStorage::storeOrUpdateFile($request, 'configFamilyPageInfo.image.src', 'families/', $title, '/configFamilyPageInfo', $family['configFamilyPageInfo']['image']['src'] ?? '', $family->type);

        $data['audioSection']['audio'] = ImageStorage::storeOrUpdateFile($request, 'audioSection.audio', 'families/', $title, '/audioSection', $family['audioSection']['audio'] ?? '', $family->type);

        $data['audioSection']['logo'] = ImageStorage::storeOrUpdateFile($request, 'audioSection.logo', 'families/', $title, '/audioSection', $family['audioSection']['logo'] ?? '', $family->type);

        if ($request->has('grayCarousell')) {
            $grayCarousellArray = array_values($request->input('grayCaro'));

            $data['grayCaro'] = $grayCarousellArray;
            foreach ($grayCarousellArray as $i=> $carousel) {
                $data['grayCaro'][$i]['image'] = ImageStorage::storeOrUpdateFile($request, 'grayCaro.' . $i . '.image', 'families/', $title, '/grayCaro', $family['grayCaro'][$i]['image'] ?? '', $family->type);
            }
        }

        if (Str::slug($request->type) != Str::slug($family->type)) {
            Storage::disk('public')->makeDirectory('families/' . Str::slug($request->type));

            ImageStorage::placeFileInNewFolder(Str::slug($family->type), Str::slug($request->type),'families/','/mainBikeLogoImage');
            ImageStorage::placeFileInNewFolder(Str::slug($family->type), Str::slug($request->type),'families/','/familyPageBannerVideo');
            ImageStorage::placeFileInNewFolder(Str::slug($family->type), Str::slug($request->type),'families/','/configFamilyPageInfo');
            ImageStorage::placeFileInNewFolder(Str::slug($family->type), Str::slug($request->type),'families/','/bikePagePromo');
            ImageStorage::placeFileInNewFolder(Str::slug($family->type), Str::slug($request->type),'families/','/audioSection');
            ImageStorage::placeFileInNewFolder(Str::slug($family->type), Str::slug($request->type),'families/','/grayCaro');

            Storage::disk('public')->deleteDirectory('families/' . Str::slug($family->type));
        }

        $family->update($data);

        return Redirect::route('view-families')->with('success', 'Family updated successfully.');
    }
}
