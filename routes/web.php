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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/profesores/calificaciones', function () {
    return view('profesores.calificaciones');
})->name('profesores.calificaciones');

Route::get('/profesores/asistencia', function () {
    return view('profesores.asistencia');
})->name('profesores.asistencia');


Route::post('/home', 'ProfesorController@calificar')->name('guardar.calificacion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
