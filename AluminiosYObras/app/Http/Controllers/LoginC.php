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
				$contrasena = $login_variable->pass = md5($datos->input ('pass'));

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

		public function recuperarContrasena(Request $datos)
		{
			$correo = $datos->input('recuperar');

			$listaCorreos = DB::table('login')
			->select('correoElectronico')
			->get();

			$exite=false;

			foreach($listaCorreos as $correo)
			{
				if($proyecto->nombreproyecto == $correo)
				{
					$exite=true;
				}
			}

			if($existe==true)
			{
				//Carácteres para la contraseña
			    $strMay = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			    $strMin = "abcdefghijklmnopqrstuvwxyz";
			    $strCar = "1234567890";
			    $strNum = "@!#%&.";
			    $passwordMay = "";
			    $passwordMin = "";
			    $passwordCar = "";
			    $passwordNum = "";
			    $password = "";
			    $str = $passwordMay.$passwordMin.$passwordCar.$passwordNum;

			    for($i=0;$i<2;$i++) {
			      //obtenemos 2 caracteres aleatorio escogido de la cadena de caracteres
			      $passwordCar .= substr($strCar,rand(0,62),1);
				}
				for($i=0;$i<3;$i++) {
			      //obtenemos 3 mayusculas aleatorio escogido de la cadena de caracteres
			      $passwordMay .= substr($strMay,rand(0,62),1);
				}
				for($i=0;$i<6;$i++) {
			      //obtenemos 6 minusculas aleatorio escogido de la cadena de caracteres
			      $passwordMin .= substr($strMin,rand(0,62),1);
				}
				for($i=0;$i<4;$i++) {
			      //obtenemos 4 numeros aleatorio escogido de la cadena de caracteres
			      $passwordNum .= substr($strNum,rand(0,62),1);
				}
				//desordenamos los caracteres
				$password = str_shuffle($str);

			 	$Usuario=login::find(1);
				$Usuario->contrasena=md5($password);

				if($Usuario->save())
				{
					$to = $correo;
		            $subject = "Recuperación de contraseña por ALUMINIOS Y OBRAS ";
		            $message = "
		            <html>
		            Hemos notado que usted ha perdido su contraseña, su nueva contraseña para iniciar sesión dentro de ALUMINIOS Y OBRAS es: ".$password.", para ingresar de nuevo su sesión ingresar al sitio: http://aluminiosyobras.com.mx/admin
		             
		            </html>";
		            $headers  = 'MIME-Version: 1.0' . "\r\n";
		            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		            $headers .= "From: ".$datos->input('email');
		            mail($to, $subject, $message, $headers);
		            return  redirect ('index');

				 	\Session::flash('mensaje','La contraseña ha sido enviada a su correo electrónico');
					return redirect ('admin');  
				}
				else
				{
					\Session::flash('mensaje','Error al intentar restablecer la contraseña, intentelo más tarde');
					return redirect ('admin');  
				}
			}
			else
			{
				\Session::flash('mensaje','El correo electrónico no está registrado, favor de ingresar un correo válido');
				return redirect ('admin');  
			}
	
		}
	}
?>
