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
	}
?>
