<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\pg1Controller;
use App\Http\Controllers\pg2Controller;
use App\Http\Controllers\pg3Controller;
use App\Http\Controllers\pg4Controller;

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

Route::get('/',[indexController::class,'index']);

Route::get('/pg1', [pg1Controller::class,'index'] )->name('pg1');


Route::get('/pg2',[pg2Controller::class,'index'])->name('pg2');


Route::get('/pg3',[pg3Controller::class,'index'] )->name('pg3');
Route::get('/pg4',[pg4Controller::class,'index'] )->name('pg4');