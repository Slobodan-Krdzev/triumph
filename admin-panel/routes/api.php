<?php

use App\Http\Controllers\FamilyController;
use App\Http\Controllers\MainCarousellItemController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\SubFamAdventureController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::get('/edit-adventure', [SubFamAdventureController::class, 'index']);

// Route::get('/list-moto', [MotorcycleController::class, 'indexApi']);



Route::get('/get-sub-fam', [SubFamAdventureController::class, 'getSubFam']);
