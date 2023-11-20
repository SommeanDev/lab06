<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HistoryController;
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
    return view('welcome');
});

Route::get(
    '/about',
    [AboutPageController::class, 'index']
);

Route::get(
    '/contact',
    [ContactPageController::class, 'index']
);

Route::get(
    '/history',
    [HistoryController::class, 'index']
);

Route::get(
    '/awards',
    [AwardsController::class,'index']
);
