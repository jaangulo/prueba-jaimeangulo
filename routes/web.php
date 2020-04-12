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
    // llama a la  plantilla que se llama principal que se encuentra en la carperta view
   // return view('principal');

   //la plantilla que voy a visualizar esta en la carpeta contenido y el archivo contenido
    return view('contenido/contenido');
});

// se creo una ruta para el controlador categoria
// /guarde la ruta con la accion aunque se puede poner cualquier nombre
//a donde va apuntar y la funcion index
Route::get('/categoria','CategoriasController@index');
Route::post('/categoria/registar','CategoriasController@store');
Route::put('/categoria/actualizar','CategoriasController@update');
Route::put('/categoria/desactivar','CategoriasController@desactivar');
Route::put('/categoria/activar','CategoriasController@activar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
