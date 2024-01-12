<?php

use App\Http\Controllers\FamilyController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ProfileController;
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
Route::get('/moto/{id}/edit', [MotorcycleController::class, 'edit'])->name('edit-moto');
Route::get('/family/{id}/edit', [FamilyController::class, 'editFamilies'])->name('edit-families');
Route::put('/family/{id}', [FamilyController::class, 'updateFamily'])->name('update-families');
Route::put('/moto/{id}', [MotorcycleController::class, 'update'])->name('update-moto');
Route::get('/view-moto', [MotorcycleController::class, 'listMoto'])->name('view-moto');
Route::get('/add-families', [FamilyController::class, 'addFamilies'])->name('add-families');
Route::get('/view-families', [FamilyController::class, 'listfamilies'])->name('view-families');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
