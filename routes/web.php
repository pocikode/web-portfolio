<?php

use App\Http\Controllers\Admin;
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

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/resume', 'resume')->name('resume');
Route::view('/skills', 'skills')->name('skills');
Route::view('/contact', 'contact')->name('contact');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [Admin\AuthController::class, 'login'])->name('login');
        Route::post('/login', [Admin\AuthController::class, 'authenticate']);
    });

    Route::middleware('auth')->group(function () {
        Route::get('/logout', [Admin\AuthController::class, 'logout'])->name('logout');
        Route::get('/', [Admin\ProfileController::class, 'index'])->name('home');
        Route::post('/', [Admin\ProfileController::class, 'save']);
        Route::post('/social-media', [Admin\ProfileController::class, 'socmed'])->name('socmed');
        Route::post('/skills', [Admin\ProfileController::class, 'skills'])->name('skills');
        Route::get('/resume', [Admin\ResumeController::class, 'index'])->name('resume');
        Route::get('/inbox', [Admin\InboxController::class, 'index'])->name('inbox');
        Route::get('/inbox/{id}', [Admin\InboxController::class, 'show'])->name('inbox.show');
    });
});
