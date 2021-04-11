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

Route::get('/index', function () {
    return view('index');
});
Route::get('/alojamientos', function () {
    return view('alojamientos');
});
Route::get('/recorridos', function () {
    return view('recorridos');
});
Route::get('/Tours', function () {
    return view('Tours');
});
Route::get('/Contacto', function () {
    return view('Contacto');
});

Route::get('/cañas', function () {
    return view('cañas');
});
Route::get('/jardin', function () {
    return view('jardin');
});

Route::get('/andes', function () {
    return view('andes');
});

Route::get('/nevado_ruiz', function () {
    return view('nevado');
});

Route::get('/ciudad_perdida', function () {
    return view('ciudad');
});

Route::get('/caño_cristal', function () {
    return view('caño');
});