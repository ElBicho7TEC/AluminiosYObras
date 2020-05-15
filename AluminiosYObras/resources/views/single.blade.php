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
					
					<div class="cont1 span_2_of_a1">
						<h3 class="m_3">{{$datosGaleria[0]->nombreproyecto}}</h3>
					<div class="btn_form">	  
				</div>
	    		
	    		<p class="m_desc">{{$datosGaleria[0]->descripcionlarga}}</p>
	    			
	            <div class="social_single">	
					<ul>	
						<li class="fb"><a href="#"><span> </span></a></li>
						<li class="tw"><a href="#"><span> </span></a></li>
						<li class="g_plus"><a href="#"><span> </span></a></li>
						<li class="rss"><a href="#"><span> </span></a></li>		
					</ul>
				</div>
				<div class="btn_form" align="center" >
				   <form>
					 <input type="submit" value="Volver" title="">
				  </form>
				</div>
			</div>
		</div>
	</body>
</html>
