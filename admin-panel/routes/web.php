<?php

use App\Http\Controllers\FamAdventureController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/create-moto', [MotorcycleController::class, 'create'])->name('create-moto');
Route::post('/store-moto', [MotorcycleController::class, 'store'])->name('store-moto');
Route::post('/store-family', [FamAdventureController::class, 'storeFamily'])->name('store-family');

Route::get('/edit-moto/{id}/{category}', [MotorcycleController::class, 'edit'])->name('edit-moto');
// moto-----------------------------------------------
Route::get('/edit-moto/classics/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-classics');
Route::get('/edit-moto/roadster/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-roadster');
Route::get('/edit-moto/adventure/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-adventure');
Route::get('/edit-moto/rocket-3/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-rocket-3');
Route::get('/edit-moto/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-default');
// fam---------------------------------------------------
Route::get('/edit-fam/classics/{id}', [FamAdventureController::class, 'editFamily'])->name('edit-fam-classics');
Route::get('/edit-fam/roadster/{id}', [FamAdventureController::class, 'editFamily'])->name('edit-fam-roadster');
Route::get('/edit-fam/adventure/{id}', [FamAdventureController::class, 'editFamily'])->name('edit-fam-adventure');
Route::get('/edit-fam/rocket-3/{id}', [FamAdventureController::class, 'editFamily'])->name('edit-fam-rocket-3');
Route::get('/edit-fam/{id}', [FamAdventureController::class, 'editFamily'])->name('edit-fam-default');
Route::get('/edit-family/{id}/{type}', [FamAdventureController::class, 'editFamily'])->name('edit-family');
// editPromo-----------------------------------------------
Route::get('/edit-promo/{id}/{promoId}/{type}', [PromoController::class, 'editPromo'])->name('edit-promo');
// Route::get('/edit-promo/{familyId}/{promoId}', [PromoController::class, 'editPromo'])->name('edit-promo');
Route::patch('/update-promo/{id}', [PromoController::class, 'updatePromo'])->name('update-promo');
// Route::post('/update-promo/{familyId}/{promoId}',  [PromoController::class, 'updatePromo'])->name('update-promo');






Route::get('/family/{id}/edit', [FamAdventureController::class, 'editFamilies'])->name('edit-families');
Route::put('/family/{id}', [FamAdventureController::class, 'updateFamily'])->name('update-families');
Route::put('/moto/{id}', [MotorcycleController::class, 'update'])->name('update-moto');
Route::get('/view-moto', [MotorcycleController::class, 'listMoto'])->name('view-moto');
Route::get('/add-families', [FamAdventureController::class, 'addFamilies'])->name('add-families');
Route::get('/view-families', [FamAdventureController::class, 'listfamilies'])->name('view-families');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
