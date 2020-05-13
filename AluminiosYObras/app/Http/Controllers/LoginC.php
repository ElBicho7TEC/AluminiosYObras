<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\login;
use Illuminate\Http\Request;
use DB;

	class LoginC extends Controller
	{
		public function mostrar()
		{
			if (session()->has('s_identificador') ) 
			{
				return redirect('admin/index_admin');
			}
			else
			{
		    	return view('admin/login');
		    }
		}

		public function verificar (Request $datos)
		{
			try
			{
				$login_variable = new login;
				$correo_Electronico = $login_variable->email = $datos->input ('email');
				$contrasena = $login_variable->pass = $datos->input ('pass');

				//Creamos una varible usuario que se iguala a la tabla persona
				//se hace una consulta donde se consultan los campos correo electrónico de la tabla persona y la contraseña
				//se hace la condición del where donde se consultan solo aquellos que posean los datos del correo y contraseña ingresados por el usuario.
				
				$consultaDatosUsuario = DB::table('login')
			    ->select('correoElectronico', 'contrasena')
			    ->where('correoElectronico', '=', $correo_Electronico)
			    ->where('contrasena', '=', $contrasena)
			    ->get();


			    if ($consultaDatosUsuario!="[]")
				{
	            	session(['s_identificador'=>$correo_Electronico]);
				    return redirect('admin/index_admin');
				}
				else
				{
					\Session::flash('mensaje','Contraseña y/o correo electrónico erróneos');
					return redirect('admin');
				}	
			}
			catch (Exception $e) 
			{
				\Session::flash('mensaje','Error al iniciar sesión, intentelo más tarde');
				return redirect('admin');
			}		
		}

		public function cerrarSesion (Request $datos)
		{
			//Matamos todos los datos de la sesion
			Session()->flush();
			return redirect('admin');
		}
	}
?>
