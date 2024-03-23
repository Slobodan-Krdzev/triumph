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

            $fullUrl = asset('storage/' . $filePath);
            return $fullUrl;
        } else return '';
    }



    public static function updateFile(Request $request, String $fileName, String $directory, String $title, String $subDirectory, MainCarousell $carousell)
    {
        if ($request->hasFile($fileName)) {
            Storage::disk('public')->delete(str_replace('storage/', '', $carousell->image));
            $filePath = $request->file($fileName)->storeAs($directory . $title . $subDirectory, $request->file($fileName)->getClientOriginalName(), 'public');
            return str_starts_with($filePath, '/storage/') ? $filePath : '/storage/' . $filePath;
        } else {
            $newFilePath = str_replace(Str::slug($carousell->title), $title, $carousell->image);
            return str_starts_with($newFilePath, '/storage/') ? $newFilePath : '/storage/' . $newFilePath;
        }
    }
}
