<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PWAController;
use App\Http\Controllers\ListController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['as' => 'laravelpwa.'], function () {
    Route::get('/manifest.json', [PWAController::class, 'manifestJson'])->name(
        'manifest'
    );
    Route::get('/offline', [PWAController::class, 'offline'])->name('offline');
});

Route::get('/list', [ListController::class, 'index']);
Route::get('/blog', [ListController::class, 'blog']);
