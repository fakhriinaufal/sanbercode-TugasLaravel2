<?php

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

// Route Asline
// Route::get('/', function () {
//     return view('welcome');
// });

// Route Untuk Tugas
Route::view('/', 'items.soal1');

Route::view('/data-tables', 'items.soal2');
