<?php

namespace App\Service;

use App\Models\MainCarousell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageStorage
{
    public static function storeFile(Request $request, String $fileName, String $directory, String $title, String $subDirectory)
    {
        if ($request->hasFile($fileName)) {
            $file = $request->file($fileName)->getClientOriginalName();
            $filePath = $request->file($fileName)->storeAs($directory . $title . $subDirectory, $file, 'public');

            return asset(Storage::url($filePath));
        } else return '';
    }



    public static function updateFile(Request $request, String $fileName, String $directory, String $title, String $subDirectory, String $path, String $objectTitle)
    {
        if ($request->hasFile($fileName)) {
            Storage::disk('public')->delete(str_replace(asset('storage/'), '', $path));
            return ImageStorage::storeFile($request, $fileName, $directory, $title, $subDirectory);
        } else {
            $newImagePath = str_replace(Str::slug($objectTitle), $title, $path);
            if ($newImagePath == '') return '';
            return str_starts_with($newImagePath, asset('/storage/')) ? $newImagePath : asset('/storage/' . $newImagePath);
        }
    }
}
