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
    return view('layout');
});



Route::resource('products', 'ProductController');

Route::resource('proveedor', 'ProveedorController');

Route::resource('venta', 'VentaController');

Route::resource('cliente', 'ClienteController');

Route::resource('pedido', 'PedidoController');

Auth::routes();

Route::resource('pedidoAdmin', 'PedidoAdminController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pedidoAdmin/despa/{id}/{tipo}', 'PedidoAdminController@despa')->name('despa');

Route::get('/exportarProductos', 'ExcelController@exportarProductos');
Route::get('/exportarPedidos', 'ExcelController@exportarPedidos');
Route::get('/exportarProveedores', 'ExcelController@exportarProveedores');

Route::get('/en', function () {
    return view('vendor/entrust-gui/users/create');
});


Route::get('inicio2', function () {
    return view('inicio2');
});