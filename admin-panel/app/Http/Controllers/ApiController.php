<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\LatestCarousell;
use App\Models\MainCarousell;
use App\Models\Motorcycle;
use App\Models\Promo;
use App\Models\SubFamily;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'families' => Family::get(),
            'subFamilies' => SubFamily::get(),
            'motorcycles' => Motorcycle::get(),
            'mainCarousels' => MainCarousell::get(),
            'latestCarousels' => LatestCarousell::get(),
            'promos' => Promo::get()
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

        return response()->json($results);
    }
}
