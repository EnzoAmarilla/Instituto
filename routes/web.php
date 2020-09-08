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

Route::get('/', function () { return view('index'); });
Route::get('/index', function () { return view('index'); });
Route::get('/about', function () { return view('about'); });
Route::get('/admision', function () { return view('admision'); });
// Route::get('/matricula', function () { return view('matricula'); });
Route::get('/matricula', 'matriculaController@index');
Route::get('/matricula/getAlumno/{dni}', 'matriculaController@getAlumno');
Route::get('/events', function () { return view('events'); });
Route::get('/gallery', function () { return view('gallery'); });
Route::get('/contact', function () { return view('contact'); });