<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BlogController;


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
Route::get('/blogs', [ClientController::class, 'blogIndex']);
Route::get('/blog/{id}', [ClientController::class, 'blogShow']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/upload', [ImageController::class, 'index']);
Route::post('/uploadImage', [ImageController::class, 'store']);
Route::delete('/del/{id}', [ImageController::class, 'destroy']);


Route::get('/project', [ProjectController::class, 'index']);

Route::post('/projectStore', [ProjectController::class, 'store']);
Route::get('/project/edit/{id}', [ProjectController::class, 'edit']);
Route::put('/project/update/{id}', [ProjectController::class, 'update']);
Route::delete('/delete/{id}', [ProjectController::class, 'destroy']);

Route::get('/blog', [BlogController::class, 'index']);
Route::post('/storeBlog',[BlogController::class,'store']);
Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
Route::put('/blog/update/{id}', [BlogController::class, 'update']);
Route::delete('/destroy/{id}', [BlogController::class, 'destroy']);




