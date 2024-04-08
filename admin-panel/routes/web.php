<?php

use App\Http\Controllers\LatestCarouselController;
use App\Http\Controllers\FamiliesController;
use App\Http\Controllers\MainCarouselsController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SubFamilyController;
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
Route::get('/view-motorcycles', [MotorcycleController::class, 'index'])->name('view-motorcycles');
Route::get('/create-motorcycle', [MotorcycleController::class, 'create'])->name('create-motorcycle');
Route::post('/store-motorcycle', [MotorcycleController::class, 'store'])->name('store-motorcycle');
Route::get('/edit-motorcycle/{id}', [MotorcycleController::class, 'edit'])->name('edit-motorcycle');
Route::put('/motorcycle/{id}', [MotorcycleController::class, 'update'])->name('update-motorcycle');
Route::delete('/delete-motorcycle/{id}', [MotorcycleController::class, 'destroy'])->name('delete-motorcycle');


// FAMILIES -----------------------------------------------
Route::get('/view-families',  [FamiliesController::class, 'index'])->name('view-families');
Route::get('/edit-family/{id}', [FamiliesController::class, 'edit'])->name('edit-family');
Route::put('/update-family/{id}', [FamiliesController::class, 'update'])->name('update-family');

// SUB FAMILIES -----------------------------------------------
Route::get('/create-sub-family',  [SubFamilyController::class, 'create'])->name('create-sub-family');
Route::post('/store-sub-family', [SubFamilyController::class, 'store'])->name('store-sub-family');
Route::get('/edit-sub-family/{id}', [SubFamilyController::class, 'edit'])->name('edit-sub-family');
Route::put('/update-sub-family/{id}', [SubFamilyController::class, 'update'])->name('update-sub-family');

// PROMOS -----------------------------------------------
Route::get('/edit-promo/{id}', [PromoController::class, 'edit'])->name('edit-promo');
Route::get('/create-promo', [PromoController::class, 'create'])->name('create-promo');
Route::post('/store-promo', [PromoController::class, 'store'])->name('store-promo');
Route::delete('/promo/{id}', [PromoController::class, 'delete'])->name('delete-promo');
Route::put('/promo/{id}', [PromoController::class, 'update'])->name('update-promo');

// LATEST CAROUSELS -----------------------------------------------
Route::get('/view-carousels', [LatestCarouselController::class, 'index'])->name('view-carousels');
Route::get('/create-latest-carousel', [LatestCarouselController::class, 'create'])->name('create-latest-carousel');
Route::post('/store-latest-carousel', [LatestCarouselController::class, 'store'])->name('store-latest-carousel');
Route::get('/edit-latest-carousel/{id}', [LatestCarouselController::class, 'edit'])->name('edit-latest-carousel');
Route::put('/update-carousel/{id}', [LatestCarouselController::class, 'update'])->name('update-latest-carousel');
Route::delete('/delete-carousel/{id}', [LatestCarouselController::class, 'destroy'])->name('delete-latest-carousel');

// MAIN CAROUSELS -----------------------------------------------
Route::get('/create-main-carousel', [MainCarouselsController::class, 'create'])->name('create-main-carousel');
Route::post('/store-main-carousels', [MainCarouselsController::class, 'store'])->name('store-main-carousel');
Route::get('/edit-main-carousel/{id}', [MainCarouselsController::class, 'edit'])->name('edit-main-carousel');
Route::put('/update-main-carousel/{id}', [MainCarouselsController::class, 'update'])->name('update-main-carousel');
Route::delete('/delete-main-carousel/{id}', [MainCarouselsController::class, 'destroy'])->name('delete-main-carousel');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
