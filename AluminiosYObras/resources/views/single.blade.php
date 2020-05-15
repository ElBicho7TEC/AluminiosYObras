
<!-- Price box minimal--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
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
				thumb_image_width: 300,
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
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="templete/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
      <section class="section section-relative section-header" id="home">
        <!-- Page Header-->
        <header class="section page-header header-absolute">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-aside" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
              <div class="rd-navbar-collapse">
                <ul class="list rd-navbar-list">
                  <li><a class="icon icon-sm icon-bordered link-default mdi mdi-whatsapp" href="#"></a></li>
                  <li><a class="icon icon-sm icon-bordered link-default mdi mdi-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-bordered link-default mdi mdi-instagram" href="#"></a></li>
                </ul>
              </div>
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="/AluminiosYObras/AluminiosYObras/public/"><img class="brand-logo-dark" src="../storage/images/negro.png" alt="" width="119" height="102"/><img class="brand-logo-light" src="../storage/images/grisblanco.png" alt="" width="119" height="102"/></a>
                    </div>
                  </div>
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Inicio</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#portfolio">Portafolio</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#services">Servicios</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#team">Equipo</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contactos</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        <!-- Preview section-->
        <section class="section context-dark section-jumbotron bg-cover" style="background: url(templete/images/bg-image.jpg) #151515">
          <div class="panel-left"><a class="brand" href="/AluminiosYObras/AluminiosYObras/public/"><img class="brand-logo-dark" src="../storage/images/negro.png" alt="" width="119" height="102"/><img class="brand-logo-light" src="../storage/images/grisblanco.png" alt="" width="119" height="102"/></a>
            <ul class="list-md custom-list">
              <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-whatsapp" href="#"></a></li>
              <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-facebook" href="#"></a></li>
              <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-instagram" href="#"></a></li>
            </ul>
          </div>
          <div class="section-fullheight">
            <div class="section-fullheight-inner section-md text-center text-lg-left">
              <div class="container">
               <div class="header-top"></div>
	  	<div class="header-bottom">
	   		<div class="wrap">
	   			<!-- start header menu -->	
				<div class="cont span_2_of_3">
				  	<div class="labout span_1_of_a1">
						<!-- start product_slider -->
					    <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/t1.jpg" />
									<img class="etalage_source_image" src="images/t2.jpg" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t2.jpg" />
								<img class="etalage_source_image" src="images/t2.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t3.jpg" />
								<img class="etalage_source_image" src="images/t3.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t4.jpg" />
								<img class="etalage_source_image" src="images/t4.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t5.jpg" />
								<img class="etalage_source_image" src="images/t5.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t6.jpg" />
								<img class="etalage_source_image" src="images/t6.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t1.jpg" />
								<img class="etalage_source_image" src="images/t1.jpg" />
							</li>
						</ul>	
						<!-- end product_slider -->
					</div>
					
					<div class="cont1 span_2_of_a1">
						<h3 class="m_3">Lorem ipsum dolor sit amet</h3>
					<div class="btn_form">	  
				</div>
	    		
	    		<p class="m_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
	    			
	            <div class="social_single">	
					<ul>	
						<li class="fb"><a href="#"><span> </span></a></li>
						<li class="tw"><a href="#"><span> </span></a></li>
						<li class="g_plus"><a href="#"><span> </span></a></li>
						<li class="rss"><a href="#"><span> </span></a></li>		
					</ul>
				</div>
			</div>
		</div>
              </div>
            </div>
          </div>
        </section>
      </section>
     
      <!-- Page Footer-->
      <div class="pre-footer-classic bg-gray-700 context-dark">
        <div class="container">
          <div class="row row-30 justify-content-lg-between">
            <div class="col-sm-6 col-lg-3 col-xl-3">
              <h5>Ubicación</h5>
              <ul class="list list-sm">
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
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="templete/js/core.min.js"></script>
    <script src="templete/js/script.js"></script>
    <!-- coded by Starlight-->
  </body>
</html>
