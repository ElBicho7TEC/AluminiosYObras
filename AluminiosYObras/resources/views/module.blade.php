
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
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#home">Inicio</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#portfolio">Portafolio</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#services">Servicios</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#team">Equipo</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/AluminiosYObras/AluminiosYObras/public/#contacts">Contactos</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        
      <!-- Portfolio-->
      <section class="section section-lg bg-default section-lined" id="portfolio">
        <div class="container container-lined">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
          </div>
        </div>
        <div class="container container-custom-width">
          <h3 class="text-center"><b>{{$datosGaleria[0]->nombremodulo}}</b></h3>
          <div class="row row-custom-width row-30 row-xxl-100 row-flex">

            @foreach ($datosGaleria as $galeriaT)
            <div class="col-sm-6 col-lg-4 wow fadeInRight">
              <div class="project-grid" style="background-image: url(../storage/app/public{{$galeriaT->rutafotoprincipal}});">
                <div class="inner"><img src="templete/images/bg-pattern-transparent.png" alt=""/>
                  <h5 class="title text-capitalize font-weight-medium"><a href="single?proyect={{$galeriaT->idgaleria}}">{{$galeriaT->nombreproyecto}}</a></h5>
                  <p class="font-weight-regular exeption">{{$galeriaT->descripcionbreve}}</p>
            	  	<a href="single?proyect={{$galeriaT->idgaleria}}" id="button" class="button button-default">Ver</a> 
                </div>
              </div>
            </div>
            @endforeach
            
          </div> 
        </div>
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