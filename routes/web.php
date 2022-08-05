<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\WorksController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/contact', [HomeController::class, 'contact']);

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [BackendHomeController::class, 'index'])->name('admin.home');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/password', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/password', [ProfileController::class, 'store'])->name('profile.store');
    Route::resource('/works', WorksController::class);
});
