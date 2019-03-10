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
 
	Route::get('cedulaAPI','PersonasController@cedulaAPI');


//Login
	Route::get('/', 'Auth\LoginController@ShowLoginForm');
	Route::get('login', 'Auth\LoginController@ShowLoginForm')->name('login');
	Route::post('recuperarContraseña','Auth\ResetPasswordController@enviarContraseña')->name('recuperarContraseña');
	Route::post('login', 'Auth\LoginController@login')->name('login');
	Route::get('logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('UsuarioCrearPdf/{id}', 'UsuarioController@UsuarioCrearPdf')->name('UsuarioCrearPdf');
//Usuarios 
	Route::get('usuarios', 'UsuarioController@index')->name('usuarios')->middleware('role:A;G');

	Route::post('registrarUsuarios', 'UsuarioController@registrarUsuario');
	Route::post('eliminarUsuarios/{id}', 'UsuarioController@eliminarUsuario')->name('eliminarUsuarios');
	Route::post('actualizarUsuarios', 'UsuarioController@actualizarUsuario')->name('actualizarUsuarios');
	Route::get('AfiliadoFactura/{id}', 'HomeController@AfiliadoFactura')->name('AfiliadoFactura');

//INSUMOS
	Route::post('/crear_insumo','InsumosController@crearInsumo');
	Route::post('/editar_insumo','InsumosController@editarInsumo');
	Route::post('/desactivar_insumo','InsumosController@desactivarInsumo');
	Route::get('/insumos','InsumosController@insumos');

//PRODUCTOS
	Route::get('/productos','ProductosController@productos');
	Route::get('/nuevo_producto','ProductosController@nuevoProducto');

//TIPO_PRODUCTOS
	Route::get('/tipo_productos','TipoProductosController@tipoProductos');
	Route::post('/crear_tipo_producto','TipoProductosController@crearTipoProducto');
	Route::post('/desactivar_tipo_producto','TipoProductosController@desactivarTipoProducto');
	Route::post('/editar_tipo_producto','TipoProductosController@editarTipoProducto');