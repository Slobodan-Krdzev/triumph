<?php

use App\Http\Controllers\AddFamiliesController;
use App\Http\Controllers\FamAdventureController;
use App\Http\Controllers\FamiliesController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SubFamAdventureController;
use App\Models\Families;
use App\Models\Promo;
use App\Models\SubFamAdventure;
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




// MOTORCYCLES -----------------------------------------------
Route::get('/create-moto', [MotorcycleController::class, 'create'])->name('create-moto');
Route::post('/store-moto', [MotorcycleController::class, 'store'])->name('store-moto');
Route::get('/edit-moto/{id}/{category}', [MotorcycleController::class, 'edit'])->name('edit-moto');
Route::get('/edit-moto/classics/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-classics');
Route::get('/edit-moto/roadster/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-roadster');
Route::get('/edit-moto/adventure/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-adventure');
Route::get('/edit-moto/rocket-3/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-rocket-3');
Route::get('/edit-moto/{id}', [MotorcycleController::class, 'edit'])->name('edit-moto-default');
Route::put('/moto/{id}', [MotorcycleController::class, 'update'])->name('update-moto');
Route::get('/view-moto', [MotorcycleController::class, 'listMoto'])->name('view-moto');

// FAMILY ADVENTURE---------------------------------------------------
Route::get('/view-families',  [FamiliesController::class, 'index'])->name('view-families');
Route::get('/add-families',  [AddFamiliesController::class, 'index'])->name('add-families');
Route::get('/edit-fam-adventure/{id}', [FamiliesController::class, 'edit'])->name('edit-fam-adventure');
Route::put('/update-fam-adventure/{id}', [FamiliesController::class, 'update'])->name('update-fam-adventure');
// promo
Route::get('/edit-promo/{id}', [PromoController::class, 'edit'])->name('edit-promo');
Route::get('/add-promo', [PromoController::class, 'create'])->name('add-promo');
Route::post('/promo-data/store', [PromoController::class, 'store'])->name('promo-data.store');
Route::delete('/promo/{id}', [PromoController::class, 'delete'])->name('promo-delete');
Route::put('/promo/{id}', [PromoController::class, 'update'])->name('update-promo');
// SUB-FAM ADVENTURE
Route::get('/edit-adventure/{id}', [SubFamAdventureController::class, 'edit'])->name('edit-adventure');
Route::put('/update-sub-adventure/{id}', [SubFamAdventureController::class, 'update'])->name('update-sub-adventure');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
