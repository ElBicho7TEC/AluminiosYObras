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
Route::post('enviarCorreo','Visitante@enviarCorreo');

//Controlador de Login para mostrar el formulario
Route::get('admin','LoginC@mostrar');
//Controladores de botones de inicio de sesión dentro de un formulario o de cierre de sesión
Route::post('btnLogin','LoginC@verificar');
Route::get('btnLogout','LoginC@cerrarSesion');
//Controladores de Administrador para mostrar la pagina
Route::get('admin/index_admin','Administrador@index');
Route::post('guardarPerfil','Administrador@guardarPerfil');

Route::get('admin/agregarModulo','Administrador@agregarModulo');
Route::get('admin/editarModulo','Administrador@editarModulo');

Route::post('btnAgregarModulo','Administrador@crearModulo');
Route::post('admin/editarModulo2','Administrador@editarModulo2');
Route::post('btnEditarModulo2','Administrador@guardarModulo');
Route::post('btnEliminarModulo','Administrador@eliminarModulo');


Route::get('admin/editarLogo','Administrador@editarLogo');
Route::post('btnEditarLogo','Administrador@guardarLogo');

Route::get('admin/editarMensaje','Administrador@editarMensaje');
Route::post('btnEditarMensaje','Administrador@guardarMensaje');

Route::get('admin/verbaner','Administrador@verBanner');
Route::post('btnEditarBanner','Administrador@guardarBanner');

Route::post('btnAgregarProyecto','Administrador@crearGaleria');
Route::post('admin/editarGaleria2','Administrador@editarGaleria2');
Route::post('btnGuardarGaleria','Administrador@guardarGaleria');
Route::post('btnEliminarGaleria','Administrador@eliminarGaleria');

Route::post('admin/editarFotoGaleria2','Administrador@editarFotoGaleria2');
Route::post('btnGuardarFotoGaleria','Administrador@guardarFotoGaleria');
Route::post('btnEliminarFotoGaleria','Administrador@eliminarFotoGaleria');
Route::post('btnAgregarFotoGaleria','Administrador@crearFotoGaleria');

Route::post('admin/agregarFotoGaleria','Administrador@agregarFotoGaleria');
Route::post('admin/editarFotoGaleria','Administrador@editarFotoGaleria');

Route::get('admin/agregarGaleria','Administrador@agregarGaleria');
Route::get('admin/editarGaleria','Administrador@editarGaleria');
Route::post('admin/editarGaleria','Administrador@editarGaleriaBuscar');

Route::post('recuperarContrasena','LoginC@recuperarContrasena');
