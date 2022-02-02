<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\ProductController;
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
Route::get('/product', [ProductController::class , 'index']);

Route::get('/product/create', [ProductController::class , 'create']);
Route::post('/product/create', [ProductController::class , 'store']);

Route::get('/product/{product}/edit',[ProductController::class, 'edit']);
Route::put('/product/{product}/edit',[ProductController::class, 'update']);

Route::delete('/product/{product}',[ProductController::class, 'destroy']);

