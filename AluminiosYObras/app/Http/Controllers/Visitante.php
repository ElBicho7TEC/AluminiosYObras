<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\bienvenida;
use App\galeria;
use App\fotogaleria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use DB;

	class Visitante extends Controller
	{	
		public function index()
		{

			$datosBienvenida = DB::table('bienvenida')
			->select('idbienvenidos','mensajewelcome','subtitulo1','subtitulo2','descripcion')
			->get();

			$datosModulos = DB::table('modulo')
			->select('idmodulo','nombremodulo','rutamodulo','numeroresaltador','descripciondelnumero')
			->get();

			$datosGaleria = DB::table('galeria')
			->select('idgaleria','nombreproyecto','rutafotoprincipal','descripcionbreve','descripcionlarga','fkidmodulo')
			->orderby('idgaleria','desc')
			->take(6)
			->get();	

			return view ('index',['datosBienvenida'=>$datosBienvenida,'datosModulos'=>$datosModulos,'datosGaleria'=>$datosGaleria]);	
		}

		public function verProyecto()
		{
			try
			{
				return view ('single');	
			}
			catch(Exception $e)
			{
				return redirect('index');
			}
		}

		public function verTodosProyecto()
		{
			$datosGaleria = DB::table('galeria')
			->select('idgaleria','nombreproyecto','rutafotoprincipal','descripcionbreve','descripcionlarga','fkidmodulo')
			->orderby('idgaleria','desc')
			->get();	

			return view ('all',['datosGaleria'=>$datosGaleria]);	
		}

		public function verTodosProyectoModulo(Request $datos)
		{
			$datosGaleria = DB::table('galeria')
			->select('idgaleria','nombreproyecto','rutafotoprincipal','descripcionbreve','descripcionlarga','fkidmodulo')
			->orderby('idgaleria','desc')
			->get();	

			return view ('all',['datosGaleria'=>$datosGaleria]);	
		}

		public function verProyectoModulo(Request $datos)
		{
			$datosGaleria = DB::table('galeria')
			->select('idgaleria','nombreproyecto','rutafotoprincipal','descripcionbreve','descripcionlarga','fkidmodulo','nombremodulo')
			->join('modulo', 'galeria.fkidmodulo', '=', 'modulo.idmodulo')
			->where('fkidmodulo','=',$datos->input ('idModulo'))
			->orderby('idgaleria','desc')
			->get();	

			return view ('module',['datosGaleria'=>$datosGaleria]);	
		}

		public function enviarCorreo(Request $datos)
		{
			 ini_set( 'display_errors', 1 );
    		error_reporting( E_ALL );

		    $destinatario = "info@aluminiosyobras.com.mx"; 
			$asunto = $datos->input('asunto'); 
			$cuerpo = $datos->input('message');

		    $headers = "MIME-Version: 1.0\r\n"; 

			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

			//dirección del remitente 
			$headers .= "From: ".$datos->input('name')."<".$datos->input('email').">\r\n"; 

			//dirección de respuesta, si queremos que sea distinta que la del remitente 
			$headers .= "Reply-To: ".$datos->input('email')."\r\n"; 

			//direcciones que recibián copia 
			$headers .= "Cc: admin@aluminiosyobras.com.mx\r\n"; 

			mail($destinatario,$asunto,$cuerpo,$headers);

			return view ('index');
		}
	}
?>
