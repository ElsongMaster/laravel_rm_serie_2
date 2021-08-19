<?php

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

Route::get('/', function () {
    return view('template.index');
});

Route::get('/pg1', function () {
    $nom = "Elvis Dushime Emani";
    return view('pages.pg1',compact('nom'));
})->name('pg1');


Route::get('/pg2', function () {
    $age = 28;
    return view('pages.pg2',compact('age'));
})->name('pg2');


Route::get('/pg3', function () {
    $adresse = "Molenbeek";
    return view('pages.pg3',compact('adresse'));
})->name('pg3');