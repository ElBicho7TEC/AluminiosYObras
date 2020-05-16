<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\login;
use Illuminate\Http\Request;
use DB;

	class Administrador extends Controller
	{	
		public function index()
		{
			if (session()->has('s_identificador') ) 
			{
				$ConsultaidPersona = DB::table('login')
				->select('login.idusuarios')
				->where('correoElectronico','=',session('s_identificador'))
				->get();

				$idConversion = json_decode(json_encode($ConsultaidPersona),true);
				$idPersona = implode($idConversion[0]);

			  	$listaUsuario = DB::table('login')
				->select('login.correoElectronico')
				->get();  
				return view ('admin/index_admin',['listaUsuario'=>$listaUsuario]);	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function agregarModulo()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/agregarModulo');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function editarModulo()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/editarModulo');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function editarLogo()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/editarLogo');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function editarMensaje()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/editarMensaje');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function agregarCaracteristicas()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/agregarCaracteristicas');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function editarCaracteristicas()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/editarCaracteristicas');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function agregarGaleria()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/agregarGaleria');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function editarGaleria()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/editarGaleria');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function agregarFotoGaleria()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/agregarFotoGaleria');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function editarFotoGaleria()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/editarFotoGaleria');	
			}
			else
			{
				return redirect('admin');
			}
		}
	}
?>
