<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [\App\Http\Controllers\mainController::class, 'home']);
Route::get('/home', [\App\Http\Controllers\mainController::class, 'home']);
Route::get('/classicCategory', [\App\Http\Controllers\mainController::class, 'classicCategory']);
Route::get('/fantasyCategory', [\App\Http\Controllers\mainController::class, 'fantasyCategory']);
Route::get('/horrorCategory', [\App\Http\Controllers\mainController::class, 'horrorCategory']);
Route::get('/historicalCategory', [\App\Http\Controllers\mainController::class, 'historicalCategory']);
Route::get('/literaryCategory', [\App\Http\Controllers\mainController::class, 'literaryCategory']);
Route::get('/romanceCategory', [\App\Http\Controllers\mainController::class, 'romanceCategory']);
Route::get('/shortStoriesCategory', [\App\Http\Controllers\mainController::class, 'shortStoriesCategory']);
Route::get('/suspenseCategory', [\App\Http\Controllers\mainController::class, 'suspenseCategory']);
Route::get('/thrillersCategory', [\App\Http\Controllers\mainController::class, 'thrillersCategory']);
Route::get('/biographiesCategory', [\App\Http\Controllers\mainController::class, 'biographiesCategory']);
Route::get('/contact', [\App\Http\Controllers\mainController::class, 'contact']);
Route::get('/detail', [\App\Http\Controllers\mainController::class, 'detail']);

