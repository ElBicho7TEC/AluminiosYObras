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
Route::post('single','Visitante@verProyecto');

//Controlador de Login para mostrar el formulario
Route::get('admin','LoginC@mostrar');

//Controladores de botones de inicio de sesión dentro de un formulario o de cierre de sesión
Route::post('btnLogin','LoginC@verificar');
Route::get('btnLogout','LoginC@cerrarSesion');

//Controladores de Administrador para mostrar la pagina
Route::get('admin/index_admin','Administrador@index');

