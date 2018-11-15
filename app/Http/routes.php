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
    return view('principal');
});


Route::get('/altaproducto','productosc@altaproducto')->name('altaproducto');
Route::POST('/guardaproducto','productosc@guardaproducto')->name('guardaproducto');
Route::get('/reporteproducto','productosc@reporteproducto');
Route::get('/modificapro/{id_producto}','productosc@modificapro')->name('modificapro');
Route::POST('/guardamodificapro','productosc@guardamodificapro')->name('guardamodificapro');
Route::get('/eliminapro/{id_producto}','productosc@eliminapro')->name('eliminapro');

Route::get('/altaempleado','empleadosc@altaempleado')->name('altaempleado');
Route::POST('/guardaempleado','empleadosc@guardaempleado')->name('guardaempleado');
Route::get('/reporteempleado','empleadosc@reporteempleado');
Route::get('/modificaemp/{id_empleado}','empleadosc@modificaemp')->name('modificaemp');
Route::POST('/guardamodificaemp','empleadosc@guardamodificaemp')->name('guardamodificaemp');
Route::get('/eliminaemp/{id_empleado}','empleadosc@eliminaemp')->name('eliminaemp');

Route::get('/altasucursal','sucursalesc@altasucursal')->name('altasucursal');
Route::POST('/guardasucursal','sucursalesc@guardasucursal')->name('guardasucursal');
Route::get('/reportesucursal','sucursalesc@reportesucursal');
Route::get('/modificasu/{id_sucursal}','sucursalesc@modificasu')->name('modificasu');
Route::POST('/guardamodificasu','sucursalesc@guardamodificasu')->name('guardamodificasu');
Route::get('/eliminasu/{id_sucursal}','sucursalesc@eliminasu')->name('eliminasu');

Route::get('/altaventa','ventasc@altaventa')->name('altaventa');
Route::POST('/guardaventa','ventasc@guardaventa')->name('guardaventa');
Route::get('/reporteventa','ventasc@reporteventa'); 


Route::get('/','principalc@index');


Route::get('/altacliente','clientesc@altacliente')->name('altacliente');
Route::POST('/guardacliente','clientesc@guardacliente')->name('guardacliente');
Route::get('/reportecliente','clientesc@reportecliente');

Route::get('/altausuarios','usuarios@altausuarios')->name('altausuarios');
Route::POST('/guardausuarios','usuarios@guardausuarios')->name('guardausuarios');
Route::get('/reporteusuario','usuarios@reporteusuario');

