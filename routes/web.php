<?php

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

Route::get('/data' , [\App\Http\Controllers\ApiController::class, 'home']);
Route::post('/add' , [\App\Http\Controllers\ApiController::class, 'add']);
Route::get('/destroy/{id}', [\App\Http\Controllers\ApiController::class, 'destroy']);
Route::get('/detail/{id}' , [\App\Http\Controllers\ApiController::class, 'detail']);
Route::post('/update/{id}' , [\App\Http\Controllers\ApiController::class, 'update']);
