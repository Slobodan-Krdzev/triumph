<?php

namespace App\Http\Controllers;

use App\Models\FamOffRoad;
use Illuminate\Http\Request;

class FamOffroadController extends Controller
{
    public function edit($id)
    {
        $famOffRoad = FamOffRoad::find($id);
        return view('layouts.edit-fam-off-road', compact('famOffRoad'));
    }
}
