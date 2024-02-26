<?php

use App\Http\Controllers\AddFamiliesController;
use App\Http\Controllers\CarouselsController;
use App\Http\Controllers\FamAdventureController;
use App\Http\Controllers\FamClassicsController;
use App\Http\Controllers\FamiliesController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\FamOffroadController;
use App\Http\Controllers\FamRoadstersController;
use App\Http\Controllers\FamSportController;
use App\Http\Controllers\MainCarouselsController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoClassicsController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PromoOffRoadController;
use App\Http\Controllers\PromoRoadstersController;
use App\Http\Controllers\PromoSportController;
use App\Http\Controllers\Rocket3Controller;
use App\Http\Controllers\SubFamAdventureController;
use App\Models\FamClassics;
use App\Models\Families;
use App\Models\FamOffRoad;
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
Route::post('/store-families', [AddFamiliesController::class, 'store'])->name('store-families');

// FAMILY ADVENTURE
Route::get('/edit-fam-adventure/{id}', [FamiliesController::class, 'edit'])->name('edit-fam-adventure');
Route::put('/update-fam-adventure/{id}', [FamiliesController::class, 'update'])->name('update-fam-adventure');
// FAMILY CLASSICS
Route::get('/edit-fam-classics/{id}', [FamClassicsController::class, 'edit'])->name('edit-fam-classics');
Route::put('/update-fam-classics/{id}', [FamClassicsController::class, 'update'])->name('update-fam-classics');
// FAMILY ROADSTERS
Route::get('/edit-fam-roadster/{id}', [FamRoadstersController::class, 'edit'])->name('edit-fam-roadster');
Route::put('/update-fam-roadster/{id}', [FamRoadstersController::class, 'update'])->name('update-fam-roadster');
//  FAMILY ROCKET-3
Route::get('/edit-fam-rocket-3/{id}', [Rocket3Controller::class, 'edit'])->name('edit-fam-rocket-3');
Route::put('/update-fam-rocket-3/{id}', [Rocket3Controller::class, 'update'])->name('update-fam-rocket-3');
// FAMILY SPORT
Route::get('/edit-fam-sport/{id}', [FamSportController::class, 'edit'])->name('edit-fam-sport');
Route::put('/update-fam-sport/{id}', [FamSportController::class, 'update'])->name('update-fam-sport');
// FAMILY OFF-ROAD
Route::get('/edit-fam-off-road/{id}', [FamOffroadController::class, 'edit'])->name('edit-fam-off-road');

// PROMO ADVENTURE
Route::get('/edit-promo/{id}', [PromoController::class, 'edit'])->name('edit-promo');
Route::get('/add-promo', [PromoController::class, 'create'])->name('add-promo');
Route::post('/promo-data/store', [PromoController::class, 'store'])->name('promo-data.store');
Route::delete('/promo/{id}', [PromoController::class, 'delete'])->name('promo-delete');
Route::put('/promo/{id}', [PromoController::class, 'update'])->name('update-promo');

// PROMO CLASSICS
Route::get('/edit-fam-classics/{id}', [PromoClassicsController::class, 'index'])->name('edit-fam-classics');
Route::get('/edit-promo-classics/{id}', [PromoClassicsController::class, 'edit'])->name('edit-promo-classics');
Route::get('/add-promo-classics', [PromoClassicsController::class, 'create'])->name('add-promo-classics');
Route::post('/promo-data/store-classics', [PromoClassicsController::class, 'store'])->name('promo-store-classics');
Route::delete('/promo-classics/{id}', [PromoClassicsController::class, 'delete'])->name('promo-classics-delete');
Route::put('/promo-classics/{id}', [PromoClassicsController::class, 'update'])->name('update-promo-classics');


// PROMO ROADSTER
Route::get('/edit-fam-roadsters/{id}', [PromoRoadstersController::class, 'index'])->name('edit-fam-roadsters');
Route::get('/edit-promo-roadsters/{id}', [PromoRoadstersController::class, 'edit'])->name('edit-promo-roadsters');
Route::get('/add-promo-roadsters', [PromoRoadstersController::class, 'create'])->name('add-promo-roadsters');
Route::post('/promo-data/store-roadsters', [PromoRoadstersController::class, 'store'])->name('promo-store-roadsters');
Route::delete('/promo-roadsters/{id}', [PromoRoadstersController::class, 'delete'])->name('promo-roadsters-delete');
Route::put('/promo-roadsters/{id}', [PromoRoadstersController::class, 'update'])->name('update-promo-roadsters');

// PROMO SPORT
Route::get('/edit-fam-sport/{id}', [PromoSportController::class, 'index'])->name('edit-fam-sport');
Route::get('/edit-promo-sport/{id}', [PromoSportController::class, 'edit'])->name('edit-promo-sport');
Route::get('/add-promo-sport', [PromoSportController::class, 'create'])->name('add-promo-sport');
Route::post('/promo-data/store-sport', [PromoSportController::class, 'store'])->name('promo-store-sport');
Route::delete('/promo-sport/{id}', [PromoSportController::class, 'delete'])->name('promo-sport-delete');
Route::put('/promo-sport/{id}', [PromoSportController::class, 'update'])->name('update-promo-sport');

// PROMO OFF-ROAD
Route::get('/edit-fam-off-road/{id}', [PromoOffRoadController::class, 'index'])->name('edit-fam-off-road');
Route::get('/edit-promo-off-road/{id}', [PromoOffRoadController::class, 'edit'])->name('edit-promo-off-road');
Route::get('/add-promo-off-road', [PromoOffRoadController::class, 'create'])->name('add-promo-off-road');
Route::post('/promo-data/store-off-road', [PromoOffRoadController::class, 'store'])->name('promo-store-off-road');
Route::delete('/promo-off-road/{id}', [PromoOffRoadController::class, 'delete'])->name('promo-off-road-delete');
Route::put('/promo-off-road/{id}', [PromoOffRoadController::class, 'update'])->name('update-promo-off-road');


// SUB-FAM ADVENTURE
Route::get('/edit-sub-fam/{id}', [SubFamAdventureController::class, 'edit'])->name('edit-sub-fam');
Route::put('/update-sub-adventure/{id}', [SubFamAdventureController::class, 'update'])->name('update-sub-adventure');


// LATEST CAROUSELS
Route::get('/add-carousels', [CarouselsController::class, 'index'])->name('add-caro');
Route::post('/add-carousels', [CarouselsController::class, 'store'])->name('add-carousels');
Route::get('/view-carousels', [CarouselsController::class, 'listCarousels'])->name('view-carousels');
Route::get('/edit-latest-carousell/{id}', [CarouselsController::class, 'edit'])->name('edit-latest-carousell');
Route::put('/update-carousell/{id}', [CarouselsController::class, 'update'])->name('update-carousell');


// MAIN CAROUSELS
Route::get('/add-main-carousels', [MainCarouselsController::class, 'index'])->name('add-main-caro');
Route::post('/add-main-carousels', [MainCarouselsController::class, 'store'])->name('add-main-carousels');
Route::get('/edit-main-carousels/{id}', [MainCarouselsController::class, 'edit'])->name('edit-main-carousels');
Route::put('/update-main-carousell/{id}', [MainCarouselsController::class, 'update'])->name('update-main-carousell');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
