<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
  <head>
    <title>Aluminios y Obras</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../storage/images/icons/dorado.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="templete/css/bootstrap.css">
    <link rel="stylesheet" href="templete/css/fonts.css">
    <link rel="stylesheet" href="templete/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="../../storage/images/icons/dorado.ico"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/animate/animate.css">
  <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../login/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../login/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/css/util.css">
    <link rel="stylesheet" type="text/css" href="../login/css/main.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../adiddas-web/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../adiddas-web/css/form.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../adiddas-web/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() 
        {
          $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() 
            {
                    $(".dropdown dd ul").toggle();
            });
                            
            $(".dropdown dd ul li a").click(function() 
            {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                            
            function getSelectedValue(id) 
            {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) 
            {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });

            $("#flagSwitcher").click(function() 
            {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <!-- start menu -->     
    <link href="../adiddas-web/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="../adiddas-web/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!-- end menu -->
    <script type="text/javascript" src="../adiddas-web/js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
      $(function()
      {
        $('.scroll-pane').jScrollPane();
      });
    </script>
    <!----details-product-slider--->
    <!-- Include the Etalage files -->
    <link rel="stylesheet" href="../adiddas-web/css/etalage.css">
    <script src="../adiddas-web/js/jquery.etalage.min.js"></script>
    <!-- Include the Etalage files -->
    <script>
      jQuery(document).ready(function($)
      {
        $('#etalage').etalage(
        {
          thumb_image_width: 400,
          thumb_image_height: 400,
                    
          show_hint: true,
          click_callback: function(image_anchor, instance_id)
          {
            alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
          }
        });
        // This is for the dropdown list example:
        $('.dropdownlist').change(function()
        {
          etalage_show( $(this).find('option:selected').attr('class') );
        });
      });
    </script>
    <!----//details-product-slider--->  
    <!-- top scrolling -->
    <script type="text/javascript" src="../adiddas-web/js/move-top.js"></script>
    <script type="text/javascript" src="../adiddas-web/js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) 
      {
        $(".scroll").click(function(event)
        {   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
      });
    </script>   
  </head>
<body>
<div class="login100-form-title" style="background-image: url(../../storage/images/gris.jpg); background-size: contain; "></div>
       <div class="login">
         <div class="wrap">
     	    <div class="rsidebar span_1_of_left" >
				   <section  class="sky-form" >
            <h4>Perfil</h4>
                <br>
                <h7 style="color: grey;">
                  <form action="index_admin" method="get">
                    {{ csrf_field() }}
                    <a href="javascript:;" onclick="parentNode.submit();">&nbsp;&nbsp;&nbsp;&nbsp;Editar Contraseña</a>
                  </form>   
                </h7>
                <br>
            <h4>Mensaje Bienvenida</h4>
            <br>
            <h7 style="color: grey;">
              <form action="editarMensaje" method="get">
                {{ csrf_field() }}
                <a href="javascript:;" onclick="parentNode.submit();">&nbsp;&nbsp;&nbsp;&nbsp;Editar mensaje</a>
              </form>   
            </h7>
            <br>
            <h4>Logo Empresa</h4>
            <br>
            <h7 style="color: grey;">
              <form action="editarLogo" method="get">
                {{ csrf_field() }}
                <a href="javascript:;" onclick="parentNode.submit();">&nbsp;&nbsp;&nbsp;&nbsp;Editar logotipo</a>
              </form> 
            </h7>
            <br>
            <h4>Modulos</h4>
            <br>
            <h7 style="color: grey;">
              <form action="editarModulo" method="get">
                {{ csrf_field() }}
                <a href="javascript:;" onclick="parentNode.submit();">&nbsp;&nbsp;&nbsp;&nbsp;Ver módulos</a>
              </form> 
            </h7>
            <br>
            <h7 style="color: grey;">
              <form action="agregarModulo" method="get">
                {{ csrf_field() }}
                <a href="javascript:;" onclick="parentNode.submit();">&nbsp;&nbsp;&nbsp;&nbsp;Agregar nuevo</a>
              </form> 
            </h7>
            <br>
            <h4>Proyectos</h4>
            <br>
            <h7 style="color: grey;">
              <form action="editarGaleria" method="get">
                {{ csrf_field() }}
                <a href="javascript:;" onclick="parentNode.submit();">&nbsp;&nbsp;&nbsp;&nbsp;Ver proyectos</a>
              </form> 
            </h7>
            <br>
            <h7 style="color: grey;">
              <form action="agregarGaleria" method="get">
                {{ csrf_field() }}
                <a href="javascript:;" onclick="parentNode.submit();">&nbsp;&nbsp;&nbsp;&nbsp;Agregar nuevo</a>
              </form> 
              <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </h7>
            <br>
            <form action="../btnLogout" method="get">
                {{ csrf_field() }}
                <button class="login100-form-btn" style="background-color: black">Cerrar sesión</button>
            </form>
				</section>
			</div>
		<div class="cont span_2_of_3">
		  <div class="mens-toolbar" align="center">
              Editar módulo
     	    <div class="clear"></div>
	       </div>

	        <div class="limiter">
          	<div align="center">
            	<div class="wrap-login100">
              	<div align="center">
                	<br>
                	<span class="login100-form-title-1" style="color: black !important;">
                  	Módulos
                	</span>
              	</div>
							  <div class="table-responsive">
							  <table class="table" width="90%">
                  <br>
								  <thead class="thead-dark"  style="color: white; background-color: black;">
										<tr>
										  <th scope="col" style="text-align:center;">#</th>
								      <th scope="col" style="text-align:center;">Nombre modulo</th>
								      <th scope="col" style="text-align:center;">Logotipo</th>
								      <th scope="col" style="text-align:center;">Número resaltar</th>
								      <th scope="col" style="text-align:center;">Descripción</th>
								    </tr>
								  </thead>
								  <tbody>
                    @foreach ($listaModulos as $modulo)
								    <tr style="text-align:center; vertical-align: center !important;">
								      <th style="border:solid; border-width: 1px; border-color: #E7E7E7;">
										    <button style="text-align:center;" class="btn-floating btn-small waves-effect waves-light blue" ><img src="../../storage/images/icons/iconoeditar.png" width="20" height="20" data-toggle="modal" data-target="#moduloEditar"></button>
                      </th>
                      <td rowspan="2" style="vertical-align: middle;">{{$modulo->nombremodulo}}</td>
                      <td rowspan="2" style="vertical-align: middle;"><img src="../../storage/app/public{{$modulo->rutamodulo}}" width="120px" height="40px"></td>
                      <td rowspan="2" style="vertical-align: middle;">{{$modulo->numeroresaltador}}</td>
                      <td rowspan="2" style="vertical-align: middle;">{{$modulo->descripciondelnumero}}</td>
                    </tr>
                    <tr style="text-align:center;">
                      <th style="border:solid; border-width: 1px; border-color: #E7E7E7;">
                        <button style="text-align:center;" class="btn-floating btn-small waves-effect waves-light blue"> <img src="../../storage/images/icons/iconoeliminar.png" width="20" height="20" style="width: auto;"></button>
                      </th>
								    </tr>
                    @endforeach
								  </tbody>
								</table>
					    </div>
		        </div>
			    </div>
		    </div>
			<div class="clear"></div>
		</div>
    <script type="text/javascript">
  	$(document).ready(function() 
  	{
    	var defaults = 
    	{
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
   	};
      $().UItoTop({ easingType: 'easeOutQuart' });  
  	});
	</script>
	<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
	</body>
</html>
<!--===============================================================================================-->
  <script src="../login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/bootstrap/js/popper.js"></script>
  <script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/daterangepicker/moment.min.js"></script>
  <script src="../login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="../login/js/main.js"></script>
  <!--=======================Modal editar ===============================-->
<div class="modal fade" id="moduloEditar" ">
  <div class="cont span_2_of_3">
  	<div class="modal-dialog" >
	        <div class="limiter modal-content">
	        	<div class="modal-header" style="background: black;">
                <h4 class="modal-title" style="color: white" >Modulo</h4>
                <button type="button" style="color: white" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
          		<div class="container-login100" >
            		<div class="wrap-login100">
              			<div align="center">
                		<br>
                		<span class="login100-form-title-1" style="color: black !important;">
                  		Editar Modulo
                		</span>
              			</div>
              			<form class="login100-form validate-form" method="post" action="btnEditarModulo" enctype="multipart/form-data">
				            	 {{csrf_field()}}
						            <div class="wrap-input100 validate-input m-b-26" data-validate="Nombre del modulo requerido">
                  						<span class="label-input100">Nombre del modulo</span>
		                            	<input class="input100" type="text" name="nombremodulo" placeholder="Ingresar el nombre del modulo" value="">
                 						<span class="focus-input100"></span>
                					</div>
                					 <div class="wrap-input100 validate-input m-b-26" data-validate="Foto del proyecto requerido">
                  						<span class="label-input100">Foto del modulo</span>
		                            	<input class="input100" type="file" accept="image/*" name="fotomodulo" placeholder="Ingresar la foto del modulo" value="">
                 						<span class="focus-input100"></span>
                					</div>
                					<div class="wrap-input100 validate-input m-b-26" data-validate="Nombre del modulo requerido">
                              		<span class="label-input100">Número a resaltar</span>
                                  	<input class="input100" type="text" name="numeroResaltar" placeholder="Ingresar número a resaltar del moudulo" value="">
                          			  <span class="focus-input100"></span>
                          			</div>
                          			<div class="wrap-input100 validate-input m-b-26" data-validate="Nombre del modulo requerido">
                              		<span class="label-input100">Descripción</span>
                                  	<input class="input100" type="text" name="descripción" placeholder="Ingresar la descripción del moudulo" value="">
                          			  <span class="focus-input100"></span>
                          			</div>

                					<div class="container-login100-form-btn">
                					    <button class="login100-form-btn" style="background-color: black">
                    					Editar
                  						</button>
                				    </div>
				            </form>
					</div>
		        </div>
			</div>
		<div class="clear"></div>
	</div>
</div>
</div>
	      <script type="text/javascript">
	    	$(document).ready(function() 
	    	{
	      	var defaults = 
	      	{
	        containerID: 'toTop', // fading element id
	        containerHoverID: 'toTopHover', // fading element hover id
	        scrollSpeed: 1200,
	        easingType: 'linear' 
	     	};
	        $().UItoTop({ easingType: 'easeOutQuart' });  
	    	});
	  	</script>
  		<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>

<!--===============================================================================================-->
  <script src="../login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/bootstrap/js/popper.js"></script>
  <script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/daterangepicker/moment.min.js"></script>
  <script src="../login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="../login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="../login/js/main.js"></script>