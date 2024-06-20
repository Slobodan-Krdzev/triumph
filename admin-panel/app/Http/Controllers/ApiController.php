<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\LatestCarousell;
use App\Models\MainCarousell;
use App\Models\Motorcycle;
use App\Models\Promo;
use App\Models\SubFamily;
use App\Service\DecodeHtmlEntities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ApiController extends Controller
{


    public function index()
    {
        $families = DecodeHtmlEntities::decodeHtmlEntities(Family::get());
        $subFamilies = DecodeHtmlEntities::decodeHtmlEntities(SubFamily::get());
        $motorcycles = DecodeHtmlEntities::decodeHtmlEntities(Motorcycle::get());
        $mainCarousels = DecodeHtmlEntities::decodeHtmlEntities(MainCarousell::get());
        $latestCarousels = DecodeHtmlEntities::decodeHtmlEntities(LatestCarousell::get());
        $promos = DecodeHtmlEntities::decodeHtmlEntities(Promo::get());

        return response()->json([
            'families' => $families,
            'subFamilies' => $subFamilies,
            'motorcycles' => $motorcycles,
            'mainCarousels' => $mainCarousels,
            'latestCarousels' => $latestCarousels,
            'promos' => $promos,
        ]);
    }

    public function singleTable($table)
    {
        $validatedData = request()->validate([
            'table' => ['regex:/^[a-zA-Z0-9_-]+$/'],
        ]);

        switch ($table) {
            case 'subFamilies':
                $table = 'sub_families';
                break;
            case 'mainCarousels':
                $table = 'main_carousell';
                break;
            case 'latestCarousels':
                $table = 'latest_carousell';
                break;
        }

        $query = DB::table($table);

        if (Schema::hasColumn($table, 'deleted_at')){
            $query = DB::table($table)->whereNull('deleted_at');
        }

        foreach (request()->except(['table', 'page']) as $key => $value) {
            $query->where($key, $value);
        }

        $results = $query->get()->map(function ($item) {
            foreach ($item as $key => $value) {
                if (is_string($value) && $decoded = json_decode($value, true)) {
                    $item->$key = $decoded;
                }
            }
            return $item;
        });

        return response()->json(DecodeHtmlEntities::decodeHtmlEntities($results));
    }
}
