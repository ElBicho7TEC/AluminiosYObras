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

			if($datosGaleria == '[]')
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
				return view('index',['datosBienvenida'=>$datosBienvenida,'datosModulos'=>$datosModulos,'datosGaleria'=>$datosGaleria]);
			}
			else
			{
				return view ('module',['datosGaleria'=>$datosGaleria]);	
			}	
		}

		public function enviarCorreo(Request $datos)
		{

			$to = "info@aluminiosyobras.com.mx";
            $subject = "ALUMINIOS Y OBRAS - ".$datos->input('asunto');
            $message = "
            <html>
            El cliente ".$datos->input('name')." con correo electrónico ".$datos->input('email')." y número de teléfono: ".$datos->input('phone')." 
            envió el siguiente mensaje:
            <br>
            ".$datos->input('message')."
            </html>";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "From: ".$datos->input('email');
            mail($to, $subject, $message, $headers);
            $para="admin@aluminiosyobras.com.mx";
            mail($para, $subject, $message, $headers);
            return  redirect ('index');
		}
	}
?>
