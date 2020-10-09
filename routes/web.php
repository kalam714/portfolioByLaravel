<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;

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

Route::get('/', [ClientController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/upload', [ImageController::class, 'index']);
Route::post('/uploadImage', [ImageController::class, 'store']);
Route::delete('/destroy/{id}', [ImageController::class, 'destroy']);


Route::get('/project', [ProjectController::class, 'index']);

Route::post('/projectStore', [ProjectController::class, 'store']);
Route::get('/project/edit/{id}', [ProjectController::class, 'edit']);
Route::put('/project/update/{id}', [ProjectController::class, 'update']);
Route::delete('/destroy/{id}', [ProjectController::class, 'destroy']);




