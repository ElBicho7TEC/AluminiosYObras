<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\login;
use App\modulo;
use App\galeria;
use App\fotogaleria;
use App\caracteristicasmodulo;
use App\bienvenida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\subirImagenRequest;
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

		public function guardarPerfil(Request $datos)
		{
			if (session()->has('s_identificador') ) 
			{
				$ConsultaidPersona = DB::table('login')
				->select('login.contrasena')
				->where('correoElectronico','=',session('s_identificador'))
				->get();

				$idConversion = json_decode(json_encode($ConsultaidPersona),true);
				$contra = implode($idConversion[0]);

				$Usuario=login::find(1);
			 	$Usuario->correoElectronico=$datos->input('email');

			 	if($datos->input('pass')!="")
			 	{
			 		if(md5($datos->input('pass'))==$contra)
				 	{
				 		if($datos->input('passN1') == $datos->input('passN2'))
				 		{
				 			$Usuario1=login::find(1);
				 			$Usuario1->contrasena=md5($datos->input('passN1'));

				 			if($Usuario1->save() && $Usuario->save()){
							\Session::flash('flash_message', 'Usuario modificado con éxito');
							return redirect ('admin/index_admin');
							}
							else 
							{
								\Session::flash('mensaje','Error al modificar el usuario');
								return redirect ('admin/index_admin');
							}	
				 		}
				 		else
				 		{
				 			\Session::flash('flash_message', 'Las contraseñas no coinciden');
							return redirect ('admin/index_admin');
				 		}
				 		
				 	}
				 	else
				 	{
				 		\Session::flash('flash_message', 'La contraseña actual no es correcta');
						return redirect ('admin/index_admin');
			 		}
			 	}
			 	else
			 	{
			 		if($Usuario->save()){
					\Session::flash('flash_message', 'Usuario modificado con éxito');
					session(['s_identificador'=>$datos->input('email')]);
					return redirect ('admin/index_admin');
					}
					else 
					{
						\Session::flash('mensaje','Error al modificar el usuario');
						return redirect ('admin/index_admin');
					}		

					return view ('admin/index_admin');	
			 	}
			 	
				
			}
			else
			{
				return redirect('admin');
			}
		}

		public function agregarModulo(Request $datos)
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
				$listaModulos = DB::table('modulo')
				->select('idmodulo','nombremodulo','rutamodulo','numeroresaltador','descripciondelnumero')
				->get();  
				return view ('admin/editarModulo',['listaModulos'=>$listaModulos]);	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function crearModulo(subirImagenRequest $datos)
		{
			if (session()->has('s_identificador') ) 
			{
				try
				{
					DB::beginTransaction();
					$Modulo = new modulo;
				 	$Modulo->nombremodulo=$datos->input('nombremodulo');

				 	foreach($datos->logotipo as $foto)
					{
						$segundo= "modulo_".$datos->input('nombremodulo').".jpg";
					 	$carpeta="/modulos/".$segundo;
						Storage::disk('public')->put($carpeta,File::get($foto)); 
					}
				 	
				 	$Modulo->rutamodulo=$carpeta;
				 	$Modulo->numeroresaltador=$datos->input('numeroresaltar');
				 	$Modulo->descripciondelnumero=$datos->input('descripcionmodulo');

				 	if($Modulo->save()){
				 		$ModuloAgregado=$Modulo->idmodulo;

				 		$Caracteristica1 = new caracteristicasmodulo;
				 		$Caracteristica1->caracteristica=$datos->input('carac1');
				 		$Caracteristica1->fkidmodulo=$ModuloAgregado;

				 		$Caracteristica2 = new caracteristicasmodulo;
				 		$Caracteristica2->caracteristica=$datos->input('carac2');
				 		$Caracteristica2->fkidmodulo=$ModuloAgregado;

				 		$Caracteristica3 = new caracteristicasmodulo;
				 		$Caracteristica3->caracteristica=$datos->input('carac3');
				 		$Caracteristica3->fkidmodulo=$ModuloAgregado;

				 		if($Caracteristica1->save() && $Caracteristica2->save() && $Caracteristica3->save())
				 		{
				 			DB::commit(); 
				 			\Session::flash('flash_message', '¡Nuevo módulo añadido con éxito');
							return redirect('admin/editarModulo');
				 		}
				 		else
				 		{
				 			DB::rollback();
				 			\Session::flash('mensaje','Error al añadir el módulo');
						 return redirect('admin/agregarModulo');
				 		}
				 	}
					else 
					{
						DB::rollback();
						\Session::flash('mensaje','Error al añadir el módulo');
						 return redirect('admin/agregarModulo');
					}
				}
				catch(Exeption $e)
				{
					DB::rollback();
					\Session::flash('mensaje','Error al añadir el módulo');
						 return redirect('admin/agregarModulo');
				}						
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
				$rutaNegro='../../storage/images/negro.png';
				$rutaBlanco='../../storage/images/grisblanco.png';
				return view ('admin/editarLogo',['rutaNegro'=>$rutaNegro,'rutaBlanco'=>$rutaBlanco]);	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function guardarLogo(subirImagenRequest $datos)
		{
			if (session()->has('s_identificador') ) 
			{
				if ($datos->logoNegro!=null)
				{
					foreach($datos->logoNegro as $logoNegro)
					{
						Storage::disk('images')->put('negro.png',File::get($logoNegro)); 
					}
				}

				if ($datos->logoBlanco!=null)
				{
					foreach($datos->logoBlanco as $logoBlanco)
					{
						Storage::disk('images')->put('grisblanco.png',File::get($logoBlanco)); 
					}
				}

				return redirect ('admin/editarLogo');
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
				$listaMensaje = DB::table('bienvenida')
				->select('idbienvenidos','mensajewelcome','subtitulo1','subtitulo2','descripcion')
				->where('idbienvenidos','=',1)
				->get(); 
				
				return view ('admin/editarMensaje',['listaMensaje'=>$listaMensaje]);	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function guardarMensaje(Request $datos)
		{
			if (session()->has('s_identificador') ) 
			{	
   			    $Mensaje=bienvenida::find(1);
			 	$Mensaje->mensajewelcome=$datos->input('mensaje');
			 	$Mensaje->subtitulo1=$datos->input('subtitulo1');
			 	$Mensaje->subtitulo2=$datos->input('subtitulo2');
			 	$Mensaje->descripcion=$datos->input('descripcion');
				if($Mensaje->save()){
					\Session::flash('flash_message', 'Mensaje modificado con éxito');
					return redirect ('admin/editarMensaje');
					
				}
				else 
				{
					\Session::flash('mensaje','Error al modificar el mensaje');
					return redirect ('admin/editarMensaje');
				}		
			}
			else
			{
				return redirect('admin');
			}
		}

		public function editarModulo2(subirImagenRequest $datos)
		{
			if (session()->has('s_identificador') ) 
			{
				$datosModulo = DB::table('modulo')
				->select('idmodulo','nombremodulo','rutamodulo','numeroresaltador','descripciondelnumero')
				->where('idmodulo','=',$datos->input('idModulo'))
				->get(); 

				$datosCarac = DB::table('caracteristicasmodulo')
				->select('idcaracteristicasmodulo','caracteristica','fkidmodulo')
				->where('fkidmodulo','=',$datos->input('idModulo'))
				->get(); 

				return view ('admin/editarModulo2',['datosModulo'=>$datosModulo,'datosCarac'=>$datosCarac]);	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function guardarModulo(subirImagenRequest $datos)
		{
			if (session()->has('s_identificador') ) 
			{
				$idModulo=$datos->input('idModulo');
				$Modulo=modulo::find($idModulo);
			 	$Modulo->nombremodulo=$datos->input('nombremoudlo');

			 	if ($datos->logotipo!=null)
				{
					DB::select('UPDATE caracteristicasmodulo SET caracteristica ='. $datos->input('carac1').' WHERE fkidmodulo = '.$idModulo.' AND idcaracteristicasmodulo = '. $datos->input('id1'));

					DB::select('UPDATE caracteristicasmodulo SET caracteristica ='. $datos->input('carac2').' WHERE fkidmodulo = '.$idModulo.' AND idcaracteristicasmodulo = '. $datos->input('id2'));

					DB::select('UPDATE caracteristicasmodulo SET caracteristica ='. $datos->input('carac3').' WHERE fkidmodulo = '.$idModulo.' AND idcaracteristicasmodulo = '. $datos->input('id3'));

					unlink("../storage/app/public".$Modulo->rutamodulo);
					foreach($datos->logotipo as $logo)
					{
						$segundo= "modulo_".$datos->input('nombremoudlo').".jpg";
					 	$carpeta="/modulos/".$segundo;
						Storage::disk('public')->put($carpeta,File::get($logo)); 
						$Modulo->rutamodulo=$carpeta;
					}
				}
			 	
			 	$Modulo->numeroresaltador=$datos->input('numeroresaltar');
			 	$Modulo->descripciondelnumero=$datos->input('descripcionmodulo');
				if($Modulo->save()){


					\Session::flash('flash_message', 'Módulo modificado con éxito');

					return redirect('admin/editarModulo');	
					
				}
				else 
				{
					\Session::flash('mensaje','Error al modificar el módulo');
					return redirect('admin/editarModulo');	
				}		

			}
			else
			{
				return redirect('admin');
			}
		}

		public function eliminarModulo(Request $datos)
		{
			if (session()->has('s_identificador') ) 
			{
				try
				{
					DB::beginTransaction();
					$fotogaleria_variable = new fotogaleria;
					$idModulo = $fotogaleria_variable->idModulo = $datos->input ('idModulo');

					if(DB::delete('DELETE fotogaleria FROM modulo INNER JOIN galeria ON galeria.fkidmodulo = modulo.idmodulo INNER JOIN fotogaleria ON fotogaleria.fkidgaleria = galeria.idgaleria WHERE modulo.idmodulo =?',[$idModulo]))
					{
						$galeria_variable = new galeria;
						$idModulo2 = $galeria_variable->idModulo = $datos->input ('idModulo');

						if(DB::delete('DELETE galeria FROM modulo INNER JOIN galeria ON galeria.fkidmodulo = modulo.idmodulo WHERE modulo.idmodulo =?',[$idModulo2]))
						{
							$caracteristicas_variable = new  caracteristicasmodulo;
							$idModulo3 = $caracteristicas_variable->idModulo = $datos->input ('idModulo');

							if(DB::delete('DELETE caracteristicasmodulo FROM modulo INNER JOIN caracteristicasmodulo ON caracteristicasmodulo.fkidmodulo = modulo.idmodulo WHERE modulo.idmodulo = ?',[$idModulo3]))
							{
								$modulo_variable = new modulo;
								$idModulo4 = $modulo_variable->idModulo = $datos->input ('idModulo');

								if(DB::delete('DELETE modulo FROM modulo WHERE modulo.idmodulo = ?',[$idModulo4]))
								{
									DB::commit(); 
									\Session::flash('flash_message', 'Módulo eliminado con éxito');
									return redirect('admin/editarModulo');	
								}
								else
								{
									DB::rollback();
									\Session::flash('flash_message', 'El Módulo no se pudo eliminar');
									return redirect('admin/editarModulo');	
								}
							}
							else
							{
								DB::rollback();
								\Session::flash('flash_message', 'El Módulo no se pudo eliminar');
								return redirect('admin/editarModulo');	
							}
						}
						else
						{
							DB::rollback();
							\Session::flash('flash_message', 'El Módulo no se pudo eliminar');
							return redirect('admin/editarModulo');	
						}
					}
					else
					{
						DB::rollback();
						\Session::flash('flash_message', 'El Módulo no se pudo eliminar');
						return redirect('admin/editarModulo');	
					}

				}
				catch(Exeption $e)
				{
					DB::rollback();
					\Session::flash('flash_message', 'El Módulo no se pudo eliminar');
					return redirect('admin/editarModulo');
				}

				

				if(DB::delete('DELETE fotogaleria, galeria, caracteristicasmodulo, modulo 
					FROM modulo
					INNER JOIN fotogaleria ON galeria.idgaleria = fotogaleria.fkidgaleria
					INNER JOIN galeria ON modulo.idmodulo = gelria.fkidmodulo
					INNER JOIN caracteristicasmodulo ON modulo.idmodulo = caracteristicasmodulo.fkidmodulo
					WHERE modulo.idmodulo=?',[$idModulo]))
				{
					\Session::flash('flash_message', 'Módulo eliminado con éxito');
					return redirect('admin/editarModulo');	
				}
				else 
				{
					\Session::flash('mensaje','Error al eliminar el módulo');
					return redirect('admin/editarModulo');	
				}
				
				return redirect('admin/editarModulo');	
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

		public function editarGaleria2()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/editarGaleria2');	
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

		public function editarFotoGaleria2()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/editarFotoGaleria2');	
			}
			else
			{
				return redirect('admin');
			}
		}

		public function verBanner()
		{
			if (session()->has('s_identificador') ) 
			{
				return view ('admin/verbaner');	
			}
			else
			{
				return redirect('admin');
			}
		}
	}
?>
