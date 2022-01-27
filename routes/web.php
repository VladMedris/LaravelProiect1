<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['namespace' => 'App\Http\Controllers'], function(){
//     Route::get('/tasks', 'TaskController@index');
//     Route::resource('tasks', 'TaskController');// Ruta de resurse va genera CRUD URI
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', '\App\Http\Controllers\TaskController@index'); //afisare lista sarcini pe pagina de
Route::resource('tasks', '\App\Http\Controllers\TaskController');// Ruta de resurse va genera CRUD
