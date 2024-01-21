<?php

namespace App\Http\Controllers;

use App\Models\Families;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
//     public function listfamilies()
//     {
//         $data = Families::get();
//         return view('layouts.view-families', ['data' => $data]);

//         // $data = Families::get();
//         // return response()->json(['data' => $data]);

//     }


//     public function editFamily($id, $type)
//     {
//         $family = Families::findOrFail($id);

//         $view = match ($type) {
//             'classics' => 'layouts.edit-fam-classics',
//             'roadster' => 'layouts.edit-fam-roadster',
//             'adventure' => 'layouts.edit-fam-adventure',
//             'rocket-3' => 'layouts.edit-fam-rocket-3',
//             default => 'layouts.edit-fam-default',
//         };

//         return view($view, ['family' => $family]);
//     }


//     public function updateFamily(Request $request, $id)
//     {
//         $validatedData = $request->validate([
//             'type' => 'required|string|max:255',
//             'mainBikeLogoImage.url' => 'nullable|string|max:255',
//             'mainBikeLogoImage.alt' => 'nullable|string|max:255',
//             'familyPageBannerDesc' => 'required|string',
//             'familyPageBannerVideo' => 'required|string|max:255',
//             'topSectionInfo.image.src' => 'required|string|max:255',
//             'topSectionInfo.image.alt' => 'required|string|max:255',
//             'topSectionInfo.title' => 'required|string|max:255',
//             'topSectionInfo.desc1' => 'required|string',
//             'topSectionInfo.desc2' => 'required|string',
//         ]);

//         $family = Families::findOrFail($id);
//         $family->update($validatedData);

//         return redirect()->back()->with('success', 'Family updated successfully');
//     }


//     // public function storeFamily(Request $request)
//     // {
//     //     $familyData = $request->all();
//     //     Families::create($familyData);

//     //     return redirect()->route('add-families')->with('success', 'Motorcycle data stored successfully');
//     // }

//     public function addFamilies()
//     {
//         return view('layouts.add-families');
//     }


//     public function storeFamily(Request $request)
//     {
//         // Validate the form inputs
//         $request->validate([
//             'type' => 'required|string',
//             'mainBikeLogoImage.url' => 'required|string',
//             'mainBikeLogoImage.alt' => 'required|string',
//             'familyPageBannerDesc' => 'required|string',
//             'familyPageBannerVideo' => 'required|string',
//             'topSectionInfo.image.src' => 'required|string',
//             'topSectionInfo.image.alt' => 'required|string',
//             'topSectionInfo.title' => 'required|string',
//             'topSectionInfo.desc1' => 'required|string',
//             'topSectionInfo.desc2' => 'required|string',
//         ]);

//         // Create a new Family instance
//         $family = new Families();

//         // Set the properties based on the form inputs
//         $family->type = $request->input('type');
//         $family->mainBikeLogoImage = [
//             'url' => $request->input('mainBikeLogoImage.url'),
//             'alt' => $request->input('mainBikeLogoImage.alt'),
//         ];
//         $family->familyPageBannerDesc = $request->input('familyPageBannerDesc');
//         $family->familyPageBannerVideo = $request->input('familyPageBannerVideo');
//         $family->topSectionInfo = [
//             'image' => [
//                 'src' => $request->input('topSectionInfo.image.src'),
//                 'alt' => $request->input('topSectionInfo.image.alt'),
//             ],
//             'desc1' => $request->input('topSectionInfo.desc1'),
//             'desc2' => $request->input('topSectionInfo.desc2'),
//         ];

//         // Save the new family
//         $family->save();

//         return redirect()->route('add-families')->with('success', 'Motorcycle data stored successfully');
// }
}
