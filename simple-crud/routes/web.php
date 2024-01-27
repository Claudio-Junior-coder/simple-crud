<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carsController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', [carsController::class, 'index'])->name('cars.index');

Route::post('/cars/create', [carsController::class, 'create'])->name('cars.create');

Route::post('/cars/update', [carsController::class, 'update'])->name('cars.update');

Route::post('/cars/delete', [carsController::class, 'delete'])->name('cars.delete');

