<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\MainCarousellItem;
use App\Models\Motorcycle;
use App\Service\ImageStorage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class MotorcycleController extends Controller
{
    public function index(Request $request)
    {
        $data = Motorcycle::all();
        return view('layouts..motorcycles.view', ['data' => $data]);
    }

    public function create()
    {
        return view('layouts..motorcycles.add',);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:motorcycles,title,'
        ]);

        $data = array_merge($request->except('title'), $validatedData);

        $title = Str::slug($validatedData['title']);

        $data['gallery']['modelImage']['src'] = ImageStorage::storeFile($request, 'gallery.modelImage.src', 'motorcycles/', $title, '/modelImage');

        $data['gallery']['promoYoutubeVideo']['src'] = ImageStorage::storeFile($request, 'gallery.promoYoutubeVideo.src', 'motorcycles/', $title, '/promoYoutubeVideo');

        $data['bikeCollorPalletteGallery']['default'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.default', 'motorcycles/', $title, '/bikeCollorPalletteGallery');

        if ($request->has('bikeCollorPalletteGallery.colors')) {
            foreach ($request->bikeCollorPalletteGallery['colors'] as $i => $color) {
                $data['bikeCollorPalletteGallery']['colors'][$i]['base'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.colors.' . $i . '.base', 'motorcycles/', $title, '/bikeCollorPalletteGallery');
                $data['bikeCollorPalletteGallery']['colors'][$i]['reversed'] = ImageStorage::storeFile($request, 'bikeCollorPalletteGallery.colors.' . $i . '.reversed', 'motorcycles/', $title, '/bikeCollorPalletteGallery');
            }
        }

        if ($request->has('customizationColors')) {
            foreach ($request->input('customizationColors') as $i => $customizationColor) {
                $data['customizationColors'][$i]['image'] = ImageStorage::storeFile($request, 'customizationColors.' . $i . '.image', 'motorcycles/', $title, '/customizationColors');
            }
        }

        if ($request->has('bikePageCarousell')) {
            foreach ($request->input('bikePageCarousell') as $i => $bikePageCarousell) {
                $data['bikePageCarousell'][$i]['image'] = ImageStorage::storeFile($request, 'bikePageCarousell.' . $i . '.image', 'motorcycles/', $title, '/bikePageCarousell');
            }
        }


        if($request->has('bikePageImageGallery')) {
            foreach ($request->bikePageImageGallery as $key => $pageImage) {
                $data['bikePageImageGallery'][$key]['src'] = ImageStorage::storeFile($request, 'bikePageImageGallery.' . $key . '.src', 'motorcycles/', $title, '/bikePageImageGallery');
            }
        }
        if($request->has('bikePagePromo')) {
            foreach ($request->bikePagePromo as $key => $bikePage) {
                $data['bikePagePromo'][$key]['image'] = ImageStorage::storeFile($request, 'bikePagePromo.' . $key . '.image', 'motorcycles/', $title, '/bikePagePromo');
            }
        }

        Motorcycle::create($data);

        return redirect()->back()->with('success', 'Motorcycle data stored successfully');
    }


    public function edit($id)

    {
        $moto = Motorcycle::findOrFail($id);
        return view('layouts..motorcycles.edit', compact('moto'));
    }


    public function update(Request $request, $id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
        $validatedData = $request->validate([
            'title' => ['required', Rule::unique('motorcycles', 'title')->ignore($motorcycle)],
        ]);

        $data = array_merge($request->except('title'), $validatedData);

        $title = Str::slug($validatedData['title']);

        $data['gallery']['modelImage']['src'] = ImageStorage::storeOrUpdateFile($request, 'gallery.modelImage.src', 'motorcycles/', $title, '/modelImage', $motorcycle['gallery']['modelImage']['src'] ?? '', $motorcycle->title);

        $data['gallery']['promoYoutubeVideo']['src'] = ImageStorage::storeOrUpdateFile($request, 'gallery.promoYoutubeVideo.src', 'motorcycles/', $title, '/promoYoutubeVideo', $motorcycle['gallery']['promoYoutubeVideo']['src'] ?? '', $motorcycle->title);

        $data['bikeCollorPalletteGallery']['default'] = ImageStorage::storeOrUpdateFile($request, 'bikeCollorPalletteGallery.default', 'motorcycles/', $title, '/bikeCollorPalletteGallery', $motorcycle['bikeCollorPalletteGallery']['default'] ?? '', $motorcycle->title);

        if (isset($request['bikeCollorPalletteGallery.colors'])) {
//            $keysRequest = array_keys($request['bikeCollorPalletteGallery']['colors'] ?? []);
//            $keysMotorcycle = array_keys($motorcycles['bikeCollorPalletteGallery']['colors'] ?? []);
//
//            $maxLengthRequest = !empty($keysRequest) ? max($keysRequest) : 0;
//            $maxLengthMotorcycle = !empty($keysMotorcycle) ? max($keysMotorcycle) : 0;
//            $length = max($maxLengthRequest, $maxLengthMotorcycle);
//            for ($i=0; $i<$length + 1; $i++){
//                if ($request->has('bikeCollorPalletteGallery.colors.' . $i . '.base')){
//                    $colorData['bikeCollorPalletteGallery']['colors'][$i]['base'] = $request['bikeCollorPalletteGallery']['colors'][$i]['base'];
//                } else {
//                    $colorData['bikeCollorPalletteGallery']['colors'][$i]['base'] = $motorcycles['bikeCollorPalletteGallery']['colors'][$i]['base'];
//                }
//                if ($request->has('bikeCollorPalletteGallery.colors.' . $i . '.reversed')){
//                    $colorData['bikeCollorPalletteGallery']['colors'][$i]['reversed'] = $request['bikeCollorPalletteGallery']['colors'][$i]['reversed'];
//                } else {
//                    $colorData['bikeCollorPalletteGallery']['colors'][$i]['reversed'] = $motorcycles['bikeCollorPalletteGallery']['colors'][$i]['reversed'];
//                }
//            }

            $bikeCollorPalletteGallery = array_values($request->input('bikeCollorPalletteGallery.colors'));

            $data['bikeCollorPalletteGallery']['colors'] = $bikeCollorPalletteGallery;

//            $request->merge(['bikeCollorPalletteGallery' => $colorData['bikeCollorPalletteGallery']]);
//            //ddd($request->all());
            foreach ($bikeCollorPalletteGallery as $i => $color) {
                $data['bikeCollorPalletteGallery']['colors'][$i]['base'] = ImageStorage::storeOrUpdateFile($request, 'bikeCollorPalletteGallery.colors.' . $i . '.base', 'motorcycles/', $title, '/bikeCollorPalletteGallery', $motorcycle['bikeCollorPalletteGallery']['colors'][$i]['base'] ?? '', $motorcycle->title);
                $data['bikeCollorPalletteGallery']['colors'][$i]['reversed'] = ImageStorage::storeOrUpdateFile($request, 'bikeCollorPalletteGallery.colors.' . $i . '.reversed', 'motorcycles/', $title, '/bikeCollorPalletteGallery', $motorcycle['bikeCollorPalletteGallery']['colors'][$i]['reversed'] ?? '', $motorcycle->title);
            }
        }

        if (isset($request['customizationColors'])) {
            $customizationColors = array_values($request->input('customizationColors'));

            $data['customizationColors'] = $customizationColors;
            foreach ($customizationColors as $i => $color) {
                $data['customizationColors'][$i]['image'] = ImageStorage::storeOrUpdateFile($request, 'customizationColors.' . $i . '.image', 'motorcycles/', $title, '/customizationColors', $motorcycle['customizationColors'][$i]['image'] ?? '', $motorcycle->title);
            }
        }

        if (isset($request['bikePageCarousell'])) {
            $bikePageCarousell = array_values($request->input('bikePageCarousell'));

            $data['bikePageCarousell'] = $bikePageCarousell;
            foreach ($bikePageCarousell as $i => $page) {
                $data['bikePageCarousell'][$i]['image'] = ImageStorage::storeOrUpdateFile($request, 'bikePageCarousell.' . $i . '.image', 'motorcycles/', $title, '/bikePageCarousell', $motorcycle['bikePageCarousell'][$i]['image'] ?? '', $motorcycle->title);
            }
        }

        if (isset($request['bikePageImageGallery'])) {
            $bikePageImageGallery = array_values($request->input('bikePageImageGallery'));


            $data['bikePageImageGallery'] = $bikePageImageGallery;
            foreach ($bikePageImageGallery as $i => $page) {
                $data['bikePageImageGallery'][$i]['src'] = ImageStorage::storeOrUpdateFile($request, 'bikePageImageGallery.' . $i . '.src', 'motorcycles/', $title, '/bikePageImageGallery', $motorcycle['bikePageImageGallery'][$i]['src'] ?? '', $motorcycle->title);
            }
        }

        if (isset($request['bikePagePromo'])) {
            $bikePagePromo = array_values($request->input('bikePagePromo'));

            $data['bikePagePromo'] = $bikePagePromo;
            foreach ($bikePagePromo as $i => $page) {
                $data['bikePagePromo'][$i]['image'] = ImageStorage::storeOrUpdateFile($request, 'bikePagePromo.' . $i . '.image', 'motorcycles/', $title, '/bikePagePromo', $motorcycle['bikePagePromo'][$i]['image'] ?? '', $motorcycle->title);
            }
        }

        if (Str::slug($request->title) != Str::slug($motorcycle->title)) {
            $oldTitle = Str::slug($motorcycle->title);
            $newTitle = Str::slug($request->title);

            $bikeCollorPalletteGallery = 'motorcycles/' . $oldTitle . '/bikeCollorPalletteGallery';
            $newBikeCollorPalletteGallery = 'motorcycles/' . $newTitle . '/bikeCollorPalletteGallery';

            $bikePageCarousell= 'motorcycles/' . $oldTitle . '/bikePageCarousell';
            $newBikePageCarousell = 'motorcycles/' . $newTitle . '/bikePageCarousell';

            $bikePageImageGallery = 'motorcycles/' . $oldTitle . '/bikePageImageGallery';
            $newBikePageImageGallery = 'motorcycles/' . $newTitle . '/bikePageImageGallery';

            $bikePagePromo = 'motorcycles/' . $oldTitle . '/bikePagePromo';
            $newBikePagePromo = 'motorcycles/' . $newTitle . '/bikePagePromo';

            $customizationColors = 'motorcycles/' . $oldTitle . '/customizationColors';
            $newCustomizationColors = 'motorcycles/' . $newTitle . '/customizationColors';

            $modelImage = 'motorcycles/' . $oldTitle . '/modelImage';
            $newModelImage = 'motorcycles/' . $newTitle . '/modelImage';

            $promoYoutubeVideo = 'motorcycles/' . $oldTitle . '/promoYoutubeVideo';
            $newPromoYoutubeVideo = 'motorcycles/' . $newTitle . '/promoYoutubeVideo';



            Storage::disk('public')->makeDirectory('motorcycles/' . $newTitle);

            $files = Storage::disk('public')->files($bikeCollorPalletteGallery);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newBikeCollorPalletteGallery . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($bikePageCarousell);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newBikePageCarousell . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($bikePageImageGallery);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newBikePageImageGallery . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($bikePagePromo);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newBikePagePromo . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($customizationColors);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newCustomizationColors . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($modelImage);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newModelImage . '/' . $filename);
                }
            }

            $files = Storage::disk('public')->files($promoYoutubeVideo);
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = pathinfo($file, PATHINFO_BASENAME);
                    Storage::disk('public')->move($file, $newPromoYoutubeVideo . '/' . $filename);
                }
            }

            Storage::disk('public')->deleteDirectory('motorcycles/' . $oldTitle);
        }

        $motorcycle->update($data);

        return redirect()->back()->with('success', 'Motorcycle updated successfully');
    }
}
