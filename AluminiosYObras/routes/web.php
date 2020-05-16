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

Route::get('/','Visitante@index');
Route::get('index','Visitante@index');
Route::get('single','Visitante@verProyecto');
Route::get('all','Visitante@verTodosProyecto');
Route::post('all','Visitante@verTodosProyectoModulo');
Route::post('module','Visitante@verProyectoModulo');

//Controlador de Login para mostrar el formulario
Route::get('admin','LoginC@mostrar');
//Controladores de botones de inicio de sesión dentro de un formulario o de cierre de sesión
Route::post('btnLogin','LoginC@verificar');
Route::get('btnLogout','LoginC@cerrarSesion');
//Controladores de Administrador para mostrar la pagina
Route::get('admin/index_admin','Administrador@index');

Route::get('admin/agregarModulo','Administrador@agregarModulo');
Route::get('admin/editarModulo','Administrador@editarModulo');

Route::get('admin/editarLogo','Administrador@editarLogo');
Route::post('btnEditarLogo','Administrador@guardarLogo');

Route::get('admin/editarMensaje','Administrador@editarMensaje');
Route::post('btnEditarMensaje','Administrador@guardarMensaje');


Route::get('admin/editarCaracteristicas','Administrador@editarCaracteristicas');
Route::get('admin/agregarCaracteristicas','Administrador@agregarCaracteristicas');
Route::get('admin/agregarFotoGaleria','Administrador@agregarFotoGaleria');
Route::get('admin/editarFotoGaleria','Administrador@editarFotoGaleria');
Route::get('admin/agregarGaleria','Administrador@agregarGaleria');
Route::get('admin/editarGaleria','Administrador@editarGaleria');