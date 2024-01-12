<?php

namespace App\Http\Controllers;

use App\Models\MainCarousellItem;
use Illuminate\Http\Request;

class MainCarousellItemController extends Controller
{
    public function index()
    {
        $mainCarousellItems = MainCarousellItem::all();

        $mainCarousellItems = $mainCarousellItems->map(function ($item) {
            $item->link1 = json_decode($item->link1, true);
            $item->link2 = json_decode($item->link2, true);
            return $item;
        });

        return response()->json(['main-carousell-items' => $mainCarousellItems]);
    }
}
