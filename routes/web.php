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


Route::get('welcome',[\App\Http\Controllers\WorldCupController::class,'index']);
Route::get('team/{team:name}',[\App\Http\Controllers\WorldCupController::class,'edit']);
Route::post('team/{team}',[\App\Http\Controllers\WorldCupController::class,'update'])->name('team.update');
