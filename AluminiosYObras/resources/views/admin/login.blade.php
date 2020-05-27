<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar sesi&oacute;n</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../storage/images/Icons/dorado.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../storage/images/gris.jpg); background-size: contain; ">
				</div>

				<div align="center">
					<br>
					<span class="login100-form-title-1" style="color: black !important;">
						Iniciar sesi&oacute;n
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="btnLogin" enctype="multipart/form-data">
				{{csrf_field()}}	
					<div class="wrap-input100 validate-input m-b-26" data-validate="El correo electr&oacute;nico es requerido">
						<span class="label-input100">Correo electr&oacute;nico</span>
						<input class="input100" type="text" name="email" placeholder="Ingresar correo electr&oacute;nico">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "La contrase&ntilde;a es requerida">
						<span class="label-input100">Contrase&ntilde;a</span>
						<input class="input100" type="password" name="pass" placeholder="Ingresar contrase&ntilde;a">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="#" class="txt1" data-toggle="modal" data-target="#recuperarContrasena" style="color:blue">
								¿Se te olvid&oacute; tu contrase&ntilde;a?
							</a>
						</div>
					</div>
					        
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="background-color: black">
							Iniciar Sesi&oacute;n
						</button>
					</div>
				</form>
				@if(Session::has('flash_message'))
					<div class="alert alert-success" role="alert">
						{{ Session::get('flash_message') }}
					</div>
				@elseif(Session::has('mensaje'))
					<div class="alert alert-danger" role="alert">
						{{ Session::get('mensaje') }}
					</div>
				@endif
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>
{{-----------------------Modal de se te olvido la contraseña---------------------------}}
<form class="login100-form validate-form" method="post" action="recuperarContrasena" enctype="multipart/form-data">
											{{csrf_field()}}
                    <div id="recuperarContrasena" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            	
                                <div class="modal-header" style="background:black;">
                                    <h4 class="modal-title" style="color: white" >Recuperar Contraseña</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"  style="color: white">&times;</button>
                                </div>
                                <div class="modal-body mx-auto" >
                                    <b><label id="form_nombre">Favor de escribir su correo electronico para restablecer su contraseña:</label></b>
                                </div>
                                <div class="wrap-input100 validate-input m-b-18" data-validate="El correo electr&oacute;nico es requerido" style="width: 80%!important; text-align: center!important; margin-left: 10%">
									
									<input class="input100" type="text" name="recuperar" placeholder="Ingresar correo electr&oacute;nico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="El correo debe contener entre caracteres el símbolo de '@' en seguida el símbolo de '.' y finalmente el dominio" required="">
									<span class="focus-input100"></span>
								</div>
                                <div class="modal-footer" style="height: 100px;">
                                    	<div class="container-login100-form-btn">
												<button class="login100-form-btn" style="background-color: black">
												Restablecer contraseña
												</button>
										</div>			
                                </div>  	
                            </div>
                        </div>
                    </div>
                </form>
