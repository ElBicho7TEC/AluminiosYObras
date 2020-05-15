<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\bienvenida;
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

			return view ('single');	
		}
	}
?>
