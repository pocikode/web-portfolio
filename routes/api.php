<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::name('api.')->group(function () {
    Route::get('profile', [ApiController::class, 'profile'])->name('profile');
    Route::get('resume', [ApiController::class, 'resume'])->name('resume');
    Route::get('skill', [ApiController::class, 'skill'])->name('skill');
});
