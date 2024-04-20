<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\MainCarousellItemController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\SubFamilyController;
use App\Models\Family;
use App\Models\LatestCarousell;
use App\Models\MainCarousell;
use App\Models\Motorcycle;
use App\Models\Promo;
use App\Models\SubFamily;
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


Route::get('/data', [ApiController::class, 'index']);
Route::get('/data/{table}', [ApiController::class, 'singleTable'])->where('table', '[a-zA-Z0-9_]+');

