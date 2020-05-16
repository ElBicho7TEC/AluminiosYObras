<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Adidas Website Template | Shop :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>		
</head>
<body>
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
						<div class="row  scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Editar Mensaje</a></label>
							</div>
						 </div>
                   	  <h4>Logo Empresa</h4>
						<div class="row  scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Editar Logotipo</a></label>
						    </div>
						</div>
					 <h4>Modulos</h4>
						<div class="row scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Agregar Modulo</a></label>
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Editar Modulo</a></label>
							</div>
						</div>
						<h4>Caracteristicas Modulo</h4>
						<div class="row scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Agregar Caracteristicas Modulo</a></label>
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Editar Caracteristicas Modulo</a></label>
							</div>
						</div>
						<h4>Galeria</h4>
						<div class="row scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Agregar Galeria</a></label>
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Editar Galeria</a></label>
							</div>
						</div>
						<h4>Foto Galeria</h4>
						<div class="row scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Agregar Foto Galeria</a></label>
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i><a href="#">Editar Foto Galeria</a></label>
							</div>
						</div>
				</section>
			</div>
		<div class="cont span_2_of_3">
		  <div class="mens-toolbar">
              Alumnios y obras
     	    <div class="clear"></div>
	       </div>
			    <div class="box1" ">
				          <div class="register_account " style="border: solid; background-color: white; padding: 40px 50px; border-radius: 5px; width: 40%; margin-left: auto; margin-right: auto; color: black; font-weight: bold !important" >
				            <div>
				                <center><h4 style="color: black;">Agregar foto galeria</h4></center>
				            </div>
		
				            <form action="btnCrear_Auditor" method="post" enctype="multipart/form-data" style="color: black; ">
						            <div class="row">
								        <div class="col-3">
		                                <b><label>Foto Proyecto</label></b>
		                            	</div>
		                            	<div class="col-5">    
		                               			<input name="logotipo[]" type="file"accept="image/*" required style="padding: 5px 10px; background: black; color:#fff; border:0px solid #fff; width: auto;">
		                            	</div>
						            </div>
						              <div class="row">
								        <div class="col-3">
		                                <b><label>Descripción breve</label></b>
		                            	</div>
		                            	<div class="col-5">    
		                                <textarea class="form-control" id="descripcionbreve" name="descripcionbreve" rows="3" style="width: auto; order: solid;"></textarea>
		                            	</div>
						              </div>
						               <div class="row">
								        <div class="col-3">
		                                <b><label>Galeria</label></b>
		                            	</div>
		                            	<div class="col-5">    
		                                 <input type="text" class="form-control"  name="fkgaleria" id="fkgaleria" required style="width: auto; border: solid; " >
                                  </div>
						              </div>

						   
				          			 <button class="grey">Agregar</button>
				            </form>
				        </div>
			  </div>
			  <div class="box1">
				   
			  </div>
			  <div class="box1">
			
			  </div>
		</div>
			  <div class="clear"></div>
		 </div>
	    </div>
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
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