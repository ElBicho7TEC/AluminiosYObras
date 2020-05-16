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
       <div class="login">
         <div class="wrap">
          <div class="rsidebar span_1_of_left" >
           <section  class="sky-form" >
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
      <div class="mens-toolbar" align="center">
              <h3>Perfil</h3>
          <div class="clear"></div>
         </div>
          <div class="box1" ">
             <div class="register_account " style="border: solid; background-color: white; padding: 40px 50px; border-radius: 5px; width: 40%; margin-left: auto; margin-right: auto; color: black; font-weight: bold !important" >
                    <div>
                        <center><h4 style="color: black;">Editar Mensaje</h4></center>
                    </div>
    
                    <form action="btnCrear_Auditor" method="post" enctype="multipart/form-data" style="color: black; ">
                        <div class="row">
                        <div class="col-2">
                                    <b><label>Mensaje de bienvenida</label></b>
                                  </div>
                                  <div class="col-5">    
                                    <input type="text" class="form-control"  name="mensajewelcome" id="mensajewelcome" required style="width: auto; border: solid; " >
                                  </div>
                        </div>
                        <div class="row">
                        <div class="col-3">
                                    <b><label>Subtitulo</label></b>
                                  </div>
                                  <div class="col-5">    
                                    <input type="text" class="form-control"  name="subtitulo" id="subtitulo" required style="width: auto; border: solid;">
                                  </div>
                        </div>
                          <div class="row">
                        <div class="col-3">
                                    <b><label>Descripción</label></b>
                                  </div>
                                  <div class="col-5">    
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" style="width: auto; order: solid;"></textarea>
                                  </div>
                        </div>

               
                         <button class="grey">Editar</button>
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