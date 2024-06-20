<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\LatestCarousell;
use App\Models\MainCarousell;
use App\Models\Motorcycle;
use App\Models\Promo;
use App\Models\SubFamily;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ApiController extends Controller
{
    private function decodeHtmlEntities($data)
    {
        array_walk_recursive($data, function (&$value) {
            if (is_string($value)) {
                $value = htmlspecialchars_decode($value, ENT_QUOTES | ENT_HTML5);
            }
        });

        return $data;
    }

    public function index()
    {
        $families = $this->decodeHtmlEntities(Family::get());
        $subFamilies = $this->decodeHtmlEntities(SubFamily::get());
        $motorcycles = $this->decodeHtmlEntities(Motorcycle::get());
        $mainCarousels = $this->decodeHtmlEntities(MainCarousell::get());
        $latestCarousels = $this->decodeHtmlEntities(LatestCarousell::get());
        $promos = $this->decodeHtmlEntities(Promo::get());

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

        return response()->json($this->decodeHtmlEntities($results));
    }
}
