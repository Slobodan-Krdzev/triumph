<?php

namespace App\Service;

use App\Models\MainCarousell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageStorage
{
    public static function storeFile(Request $request, String $fileName, String $directory, String $title, ?String $subDirectory = null)
    {
        if ($request->hasFile($fileName)) {
            $file = $request->file($fileName)->getClientOriginalName();
            $filePath = $request->file($fileName)->storeAs($directory . $title . $subDirectory, $file, 'public');

            return asset(Storage::url($filePath));
        } else return '';
    }



    public static function updateFile(Request $request, String $fileName, String $directory, String $title, String $subDirectory, String $path, String $objectTitle)
    {
        if ($request->has($fileName)) {
            Storage::disk('public')->delete(str_replace(asset('storage/'), '', $path));
            return ImageStorage::storeFile($request, $fileName, $directory, $title, $subDirectory);
        } else {
            $newImagePath = str_replace(Str::slug($objectTitle), $title, $path);
            if ($newImagePath == '') return '';
            return str_starts_with($newImagePath, asset('/storage/')) ? $newImagePath : asset('/storage/' . $newImagePath);
        }
    }

    public static function updateNameInFile(String $title, String $newTitle, String $path)
    {
        return str_replace(Str::slug($title), $newTitle, $path);
    }

    public static function storeOrUpdateFile($request, $fileName, $directory, $title, $subDirectory, $path, $objectTitle) {
        if (isset($request->$fileName) && isset($path)) {
            return ImageStorage::updateFile($request, $fileName, $directory, $title, $subDirectory, $path, $objectTitle);
        } else if (isset($path) && $path != '') {
            return ImageStorage::updateNameInFile($objectTitle, $title, $path);
        } else {
            return ImageStorage::storeFile($request, $fileName, $directory, $title, $subDirectory);
        }
    }

    public static function placeFileInNewFolder($oldTitle, $newTitle, $directory, $subDirectory){
        $oldFiles = $directory . Str::slug($oldTitle) . $subDirectory;
        $newFiles = $directory . Str::slug($newTitle) . $subDirectory;

        $files = Storage::disk('public')->files($oldFiles);
        if (!empty($files)) {
            foreach ($files as $file) {
                $filename = pathinfo($file, PATHINFO_BASENAME);
                Storage::disk('public')->move($file, $newFiles . '/' . $filename);
            }
        }
    }


}
