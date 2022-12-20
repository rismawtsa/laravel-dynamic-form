<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobApplicationController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/', [JobApplicationController::class, 'index'])
                ->name('register');

    Route::post('/', [JobApplicationController::class, 'store'])->name('store');
});

require __DIR__.'/auth.php';
