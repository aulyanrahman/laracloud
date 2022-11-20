<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/category', [CategoryController::class,'index']);
Route::get('/category/create', [CategoryController::class,'create']);
Route::post('/category/store', [CategoryController::class,'store']);
Route::get('/category/{id}/edit', [CategoryController::class,'edit']);
Route::put('/category/{id}', [CategoryController::class,'update']);
Route::delete('/category/{id}', [CategoryController::class,'destroy']);

Route::get('/product', [ProductController::class,'index']);
Route::get('/product/create', [ProductController::class,'create']);
Route::post('/product/store', [ProductController::class,'store']);
Route::get('/product/{id}/edit', [ProductController::class,'edit']);
Route::put('/product/{id}', [ProductController::class,'update']);
Route::delete('/product/{id}', [ProductController::class,'destroy']);

Route::get('/asset', [AssetController::class,'index']);
Route::get('/asset/upload', [AssetController::class,'upload']);
Route::post('/asset/store', [AssetController::class,'store']);
Route::get('/asset/{id}/edit', [AssetController::class,'edit']);
Route::put('/asset/{id}', [AssetController::class,'update']);
Route::delete('/asset/{id}', [AssetController::class,'destroy']);