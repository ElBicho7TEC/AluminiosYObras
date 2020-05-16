<!DOCTYPE HTML>
<html>
	<head>
		<title>Aluminios y Obras</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link rel="icon" href="../storage/images/icons/dorado.ico" type="image/x-icon">
	    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i">
	    <link rel="stylesheet" href="templete/css/bootstrap.css">
	    <link rel="stylesheet" href="templete/css/fonts.css">
	    <link rel="stylesheet" href="templete/css/style.css">
	    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="adiddas-web/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="adiddas-web/css/form.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="adiddas-web/js/jquery.min.js"></script>
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
		<link href="adiddas-web/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="adiddas-web/js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<!-- end menu -->
		<script type="text/javascript" src="adiddas-web/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
		<!----details-product-slider--->
		<!-- Include the Etalage files -->
		<link rel="stylesheet" href="adiddas-web/css/etalage.css">
		<script src="adiddas-web/js/jquery.etalage.min.js"></script>
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
		<script type="text/javascript" src="adiddas-web/js/move-top.js"></script>
		<script type="text/javascript" src="adiddas-web/js/easing.js"></script>
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
	  <header class="section page-header header-absolute">
		<div style="transition: 0.35s all cubic-bezier(0.65, 0.05, 0.36, 1);">
          <nav >
			  <div class="social_single" align="right" style="margin-right: 5%">
	            <!-- RD Navbar Nav-->
	            <ul  style="background-color: white !important; padding-top: 20px; padding-bottom: 20px;">
	              <font >
	              <li style="margin-left: 70px;" class="rd-nav-item active"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#home">Inicio</a></li>
	              <li style="margin-left: 70px;" class="rd-nav-item"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#portfolio">Portafolio</a></li>
	              <li style="margin-left: 70px;" class="rd-nav-item"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#services">Servicios</a></li>
	              <li style="margin-left: 70px;" class="rd-nav-item"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#team">Equipo</a></li>
	              <li style="margin-left: 70px;" class="rd-nav-item"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#contacts">Contactos</a></li>
	              </font>
	            </ul>
	          </div>
          </nav>
        </div>
        <br><br> <br>
        <hr size="2px" color="#E9E9E9" />
      </header>

		 <section class="section section-lg bg-default section-lined">
        <div class="container container-lined">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
          </div>
        </div>
        <div >
          <div >
	      	<!-- ------------------------------------------------------------------------------------------ -->
	      	<!-- ------------------------------------------------------------------------------------------ -->
	      	<!-- ------------------------------------------------------------------------------------------ -->
	      	<!-- ------------------------------------------------------------------------------------------ -->
	      	<!-- ------------------------------------------------------------------------------------------ -->
		  
		   		<div class="wrap" ALIGN="justify">
		   			<!-- start header menu -->	
					<div class="cont span_2_of_3">
					  	<div class="labout span_1_of_a1">
							<!-- start product_slider -->
						    <ul id="etalage">
								<li>
									<a href="optionallink.html">
										<img class="etalage_thumb_image" src="../storage/app/public{{$datosGaleria[0]->rutafotoprincipal}}" />
										<img class="etalage_source_image" src="../storage/app/public{{$datosGaleria[0]->rutafotoprincipal}}" />
									</a>
								</li>
								@foreach ($datosFotoGaleria as $foto)
								<li>
									<img class="etalage_thumb_image" src="../storage/app/public{{$foto->fotos}}" />
									<img class="etalage_source_image" src="../storage/app/public{{$foto->fotos}}" />
								</li>
								@endforeach
							</ul>	
							<!-- end product_slider -->
						</div>
						
						<div class="cont1 span_2_of_a1" >
							<h3 class="m_3" style="margin-left: 100px">{{$datosGaleria[0]->nombreproyecto}}</h3>
						<div class="btn_form">	  
					</div>
		    		
		    		<p class="m_desc" style="margin-left: 100px;">{{$datosGaleria[0]->descripcionlarga}}</p>
		    			
		            <div class="social_single" style="margin-left: 100px">	
						<ul>	
							<li class="fb"><a href="#"><span> </span></a></li>
							<li class="tw"><a href="#"><span> </span></a></li>
							<li class="g_plus"><a href="#"><span> </span></a></li>
							<li class="rss"><a href="#"><span> </span></a></li>		
						</ul>
					</div>
					<div class="btn_form" align="center" style="margin-left: 100px">
					   <form>
						  <div class="button-wrap-1 text-center"><a class="button button-default" href="/AluminiosYObras/AluminiosYObras/public/">Volver</a></div>
					  </form>
					</div>
				</div>
			</div>
			<!-- ------------------------------------------------------------------------------------------ -->
	      	<!-- ------------------------------------------------------------------------------------------ -->
	      	<!-- ------------------------------------------------------------------------------------------ -->
	      	<!-- ------------------------------------------------------------------------------------------ -->
	      	<!-- ------------------------------------------------------------------------------------------ -->
      	  </div>     
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </section>

      <!-- Page Footer-->
      <div class="pre-footer-classic bg-gray-700 context-dark">
        <div class="container">
          <div class="row row-30 justify-content-lg-between">
            <div class="col-sm-6 col-lg-3 col-xl-3" >
              <h5>Ubicación</h5>
              <ul class="list list-sm" style="background-color: transparent;">
                <li>
                  <p>1418 Riverwood Drive,</p>
                </li>
                <li>
                  <p>Suite 3845 Cottonwood,</p>
                </li>
                <li>
                  <p>CA 96022</p>
                </li>
                <li>
                  <p>México</p>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <h5>Contactos</h5>
              <dl class="list-terms-custom">
                <dt>Tel.</dt>
                <dd><a class="link-default" href="tel:#">1-300-123-1234</a></dd>
              </dl>
              <dl class="list-terms-custom">
                <dt>Correo.</dt>
                <dd><a class="link-default" href="mailto:#">Info@demolink.org</a></dd>
              </dl>
              <ul class="list-inline list-inline-sm">
                <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-whatsapp" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-twitter" href="#"></a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h5>Boletin informativo</h5>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="templete/bat/rd-mailform.php">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="footer-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="footer-email">Correo electrónico</label>
                </div>
                <div class="button-wrap">
                  <button class="button button-default button-invariable" type="submit">Suscribir</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="section footer-classic context-dark text-center">
        <div class="container">
          <div class="row row-15">
            <div class="col-lg-4 col-xl-3 text-lg-left">
              <p class="rights font-weight-regular"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Concept</span><span>.&nbsp;</span><span>All Rights reserved</span>. Design&nbsp;by&nbsp;<a href="https://zemez.io/">Zemez</a></p>
            </div>
            <div class="col-lg-5 col-xl-6">
              <ul class="list-inline list-inline-lg text-uppercase">
                <li><a href="#services">Servicios</a></li>
                <li><a href="#portfolio">Nuestro Portafolio</a></li>
                <li><a href="#">Noticias</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
	</body>
</html>
