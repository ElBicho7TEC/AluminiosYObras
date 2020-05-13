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
    return view('index');
});


//Controlador de Login para mostrar el formulario
Route::Get('admin','LoginC@mostrar');

//Controladores de botones de inicio de sesión dentro de un formulario o de cierre de sesión
Route::post('btnLogin','LoginC@verificar');
Route::Get('btnLogout','LoginC@cerrarSesion');

//Controladores de Administrador para mostrar la pagina
Route::Get('admin/index_admin','Administrador@index');

