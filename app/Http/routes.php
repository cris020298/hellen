<?php

/*
|--------------------------------------------------------------------------
| Application Routes........
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/altaproducto','productosc@altaproducto')->name('altaproducto');
Route::POST('/guardaproducto','productosc@guardaproducto')->name('guardaproducto');


Route::get('/altacliente','clientesc@altacliente')->name('altacliente');
Route::POST('/guardacliente','clientesc@guardacliente')->name('guardacliente');


Route::get('/altaempleado','empleadosc@altaempleado')->name('altaempleado');
Route::POST('/guardaempleado','empleadosc@guardaempleado')->name('guardaempleado');

Route::get('/altausuarios','usuarios@altausuarios')->name('altausuarios');
Route::POST('/guardausuarios','usuarios@guardausuarios')->name('guardausuarios');

Route::get('/altasucursal','sucursalesc@altasucursal')->name('altasucursal');
Route::POST('/guardasucursal','sucursalesc@guardasucursal')->name('guardasucursal');
Route::get('/reportesucursal','sucursalesc@reportesucursal');

Route::get('/altaventa','ventasc@altaventa')->name('altaventa');
Route::POST('/guardaventa','ventasc@guardaventa')->name('guardaventa');