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
	}
?>
