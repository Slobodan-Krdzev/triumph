<?php

use App\Http\Controllers\FamilyController;
use App\Http\Controllers\MainCarousellItemController;
use App\Http\Controllers\MotorcycleController;
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


Route::get('/main-carousell-items', [MainCarousellItemController::class, 'index']);
Route::get('/motorcycle', [MotorcycleController::class, 'listMotorcycle']);

