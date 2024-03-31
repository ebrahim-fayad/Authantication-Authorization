<?php

use App\Http\Controllers\Admin\AdminHomeController;
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

Route::prefix('back')->name('back.')->group(function () {
    Route::get('/', AdminHomeController::class)->name('index')->middleware('admin');
    require __DIR__ . '/BackAuth .php';
});

