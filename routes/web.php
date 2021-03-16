<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/company', [HomeController::class, 'company']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/contact', [HomeController::class, 'contact']);