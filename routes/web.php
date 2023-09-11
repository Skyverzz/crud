<?php

use App\Http\Controllers\TeamController;
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

Route::controller(TeamController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/edit/{id}', 'update');
    Route::get('/destroy/{id}', 'destroy');
});
