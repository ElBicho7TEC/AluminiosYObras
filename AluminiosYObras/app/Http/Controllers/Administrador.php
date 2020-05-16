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
				return view ('admin/index_admin');	
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
	}
?>
