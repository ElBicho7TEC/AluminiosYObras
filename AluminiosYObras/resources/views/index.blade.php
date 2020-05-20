
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
      <section class="section section-relative section-header" id="home" style="max-height:all; ">
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
        <section class="section context-dark section-jumbotron bg-cover" style="background: url(templete/images/fondoblanco.png) #151515">
          <div class="panel-left"><a class="brand" href="/AluminiosYObras/AluminiosYObras/public/"><img class="brand-logo-dark" src="../storage/images/negro.png" alt="" width="119" height="102"/><img class="brand-logo-light" src="../storage/images/grisblanco.png" alt="" width="119" height="102"/></a>
            <ul class="list-md custom-list" >
              <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-whatsapp" href="#" style="background: black"></a></li>
              <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-facebook" href="#" style="background: black"></a></li>
              <li><a class="icon icon-sm icon-gray-filled icon-circle mdi mdi-instagram" href="#" style="background: black"></a></li>
            </ul>
          </div>
          <div class="section-fullheight" style="color: black">
            <div class="section-fullheight-inner section-md text-center text-lg-left">
              <div class="container">
                <div class="row justify-content-center justify-content-lg-start">
                  <div class="col-md-10 offset-lg-1 col-lg-8 offset-xl-1 col-xl-9 offset-xxl-2 col-xxl-8">
                    <div class="jumbotron-custom-1">
                      <div class="text-1 font-weight-medium" >{{$datosBienvenida[0]->mensajewelcome}}</div>
                      <div class="title text-decorative">{{$datosBienvenida[0]->subtitulo1}}</div>
                      <div class="title">{{$datosBienvenida[0]->subtitulo2}}</div>
                      <p class="big-2" style="color: black">{{$datosBienvenida[0]->descripcion}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ul class="project-list">
          	<br><br>
            @foreach ($datosModulos as $modulo)
            <li class="bg-image" style="background-image: url(../storage/app/public{{$modulo->rutamodulo}})">
            	<form action="module" method="post">
            	{{ csrf_field() }}
            		<input type="hidden" name='idModulo' value="{{$modulo->idmodulo}}">
			        <a href="javascript:;" onclick="parentNode.submit();">{{$modulo->nombremodulo}}</a>
			    </form>
            </li>
            @endforeach
            <br><br>
          </ul>
        </section>
      </section>
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
          <h3 class="text-center">Nuestros últimos proyectos</h3>
          <div class="row row-custom-width row-30 row-xxl-100 row-flex">

            @foreach ($datosGaleria as $galeria)
            <div class="col-sm-6 col-lg-4 wow fadeInRight">
              <div class="project-grid" style="background-image: url(../storage/app/public{{$galeria->rutafotoprincipal}});">
                <div class="inner"><img src="templete/images/bg-pattern-transparent.png" alt=""/>
                  <h5 class="title text-capitalize font-weight-medium"><a href="single?proyect={{$galeria->idgaleria}}">{{$galeria->nombreproyecto}}</a></h5>
                  <p class="font-weight-regular exeption">{{$galeria->descripcionbreve}}</p>
            	  	<a  href="single?proyect={{$galeria->idgaleria}}" id="button" class="button button-default">Ver</a> 
                </div>
              </div>
            </div>
            @endforeach
            
          </div> 
          
          <div class="button-wrap-1 text-center">
              	<a href="all" id="button" class="button button-default">Ver todos los proyectos</a> 
          </div>
        </div>
      </section>
      <!-- Branding-->
      <section class="section section-lg  text-center text-sm-left" id="services">
        <div class="container">
          <div class="row row-40">
            <div class="col-lg-9">
              <div class="row row-30 row-xxl-85">
                @foreach ($datosModulos as $modulo)
                <div class="col-sm-6 col-md-4">
	                <form action="module" method="post">
	            	{{ csrf_field() }}
	            		<input type="hidden" name='idModulo' value="{{$modulo->idmodulo}}">
				        <a href="javascript:;" onclick="parentNode.submit();"><h5>{{$modulo->nombremodulo}}</h5></a>
				    </form>
                </div>
                <div class="col-sm-6 col-md-4">
                  <?php 
                  $datosCaracteriticasModulo = DB::table('caracteristicasmodulo')
                  ->select('idcaracteristicasmodulo','caracteristica','fkidmodulo')
                  ->where('fkidmodulo','=',$modulo->idmodulo)
                  ->get();
                  ?>

                  @foreach ($datosCaracteriticasModulo as $caracteristica)
                  <ul class="list-xs font-weight-regular">
                    <li><a class="link-item" >{{$caracteristica->caracteristica}}</a></li>
                  </ul>
                  @endforeach
                </div>
               
                <div class="col-sm-6 col-md-4">
                  <article class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">{{$modulo->numeroresaltador}}</div><span class="small small_top">+</span>
                    </div>
                    <div class="box-counter-title">{{$modulo->descripciondelnumero}}</div>
                  </article>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-lg-3" style="color: black">
              <div class="heading-3">Soluciones de alta calidad</div>
              <div class="big">Estamos comprometidos a proporcionar las mejores soluciones posibles a un costo competitivo. Nuestro equipo está listo para ofrecer una amplia gama de diversos servicios de aluminios y obras.</div>
              <div class="img-wrap-1"><img src="templete/images/speaker-1-180x80.png" alt="" width="180" height="80"/>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blurb minimal-->
      <section class="section section-lg bg-default section-lined">
        <div class="container container-lined">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
          </div>
        </div>
        <div class="container">
          <div class="row row-40">
            <div class="col-sm-6 col-md-4 offset-left-16 wow fadeInUp">
              <!-- Blurb minimal-->
              <div class="blurb-minimal unit unit-spacing-sm flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="blurb-minimal-icon construction-icon-12"></div>
                </div>
                <div class="unit-body">
                  <h5 class="blurb-minimal-title">Materiales modernos</h5>
                  <p class="blurb-minimal-exeption">Todos nuestros proyectos están diseñados y construidos con los mejores materiales.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <!-- Blurb minimal-->
              <div class="blurb-minimal unit unit-spacing-sm flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="blurb-minimal-icon construction-icon-13"></div>
                </div>
                <div class="unit-body">
                  <h5 class="blurb-minimal-title">Ideas creativas</h5>
                  <p class="blurb-minimal-exeption">La creatividad es una parte vital de los proyectos que diseñamos para usted.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
              <!-- Blurb minimal-->
              <div class="blurb-minimal unit unit-spacing-sm flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="blurb-minimal-icon construction-icon-18"></div>
                </div>
                <div class="unit-body">
                  <h5 class="blurb-minimal-title">Enfoque único</h5>
                  <p class="blurb-minimal-exeption">Nuestro enfoque combina dedicación y profesionalismo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Clients-->
      <section class="section section-lg bg-default section-lined" id="testimonials">
        <div class="container container-lined">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
          </div>
        </div>
        <div class="container">
          <div class="row row-40 justify-content-between">
            <div class="col-lg-6 col-xxl-5">
              <h3>Nuestros clientes</h3>
              <!-- Owl Carousel-->
              <div class="owl-carousel" data-items="1" data-md-items="2" data-lg-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
                <article class="quote-minimal">
                  <div class="quote-body">
                    <q>Seleccionamos Concept debido a los rigurosos antecedentes de diseño y educación de sus trabajadores. ¡Hicieron el mejor trabajo!</q>
                  </div>
                  <div class="quote-footer">
                    <cite class="quote-minimal-cite">Juan Peréz</cite>, <span class="quote-minimal-description">“STP productions”</span>
                  </div>
                </article>
                <article class="quote-minimal">
                  <div class="quote-body">
                    <q>Cuando necesitábamos especialistas en diseño y obras, su equipo estuvo allí para ayudarnos. ¡Gracias!</q>
                  </div>
                  <div class="quote-footer">
                    <cite class="quote-minimal-cite">Isabel López</cite>, <span class="quote-minimal-description">“Fireworx”</span>
                  </div>
                </article>
                <article class="quote-minimal">
                  <div class="quote-body">
                    <q>¡De todas las empresas de aluminios y obras que ofrecen servicios de diseño y construcción, usted es el mejor!</q>
                  </div>
                  <div class="quote-footer">
                    <cite class="quote-minimal-cite">Pedro Godinez</cite>, <span class="quote-minimal-description">“MCM ltd.”</span>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-border-wrap box-border-wrap-left">
                <div class="row"><a class="col-6 col-md-4 box-border" href="#"><img src="templete/images/brand-1-196x162.png" alt="" width="196" height="162"/></a><a class="col-6 col-md-4 box-border" href="#"><img src="templete/images/brand-2-196x162.png" alt="" width="196" height="162"/></a><a class="col-6 col-md-4 box-border" href="#"><img src="templete/images/brand-3-196x162.png" alt="" width="196" height="162"/></a><a class="col-6 col-md-4 box-border" href="#"><img src="templete/images/brand-4-196x162.png" alt="" width="196" height="162"/></a><a class="col-6 col-md-4 box-border" href="#"><img src="templete/images/brand-5-196x162.png" alt="" width="196" height="162"/></a><a class="col-6 col-md-4 box-border" href="#">
                    <div class="icon icon-sm mdi mdi-arrow-right"></div></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Team-->
      <section class="section section-lg bg-gray-100 section-lined" id="team">
        <div class="container container-lined">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
          </div>
        </div>
        <div class="container">
          <div class="row row-40 justify-content-between">
            <div class="col-lg-7 col-xl-8">
              <div class="row no-gutters">
                <div class="col-sm-6 wow fadeInLeft">
                  <div class="box-team box-team-right"><img src="templete/images/index-3-1-390x332.jpg" alt="" width="390" height="332"/>
                    <div class="meta">
                      <div class="heading-6 title">Javier Ramirez</div>
                      <p class="position">Senior Architect</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 wow fadeInRight">
                  <div class="box-team box-team-right"><img src="templete/images/index-3-2-390x332.jpg" alt="" width="390" height="332"/>
                    <div class="meta">
                      <div class="heading-6 title">Julio Flores</div>
                      <p class="position">Founder, Director</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="box-team box-team-right"><img src="templete/images/index-3-3-390x332.jpg" alt="" width="390" height="332"/>
                    <div class="meta">
                      <div class="heading-6 title">Keuri Machain</div>
                      <p class="position">Interior Designer</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay="0.2s">
                  <div class="box-team box-team-right"><img src="templete/images/index-3-4-390x332.jpg" alt="" width="390" height="332"/>
                    <div class="meta">
                      <div class="heading-6 title">Samuel Mojarro</div>
                      <p class="position">Exterior Designer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4">
              <div class="row row-30 row-xxl-55 justify-content-end">
                <div class="col-sm-6 col-lg-9 col-xl-10 text-lg-right">
                  <h3 class="offset-left-70">Conoce al equipo de nuestros diseñadores y trabajadores</h3>
                  <div class="big-text">El equipo de Aluminios y Obras tiene más de 25 años de experiencia en el mercado.</div>
                  <div class="divider divider-2 d-none d-lg-block"></div>
                </div>
                <div class="col-sm-6 col-lg-8 col-xl-7">
                  <div class="counter-minimal">
                    <div class="counter-left">
                      <div class="counter">20</div>
                    </div>
                    <div class="counter-right">
                      <div class="postfix">+</div>
                      <div class="title">PERSONAS EN EQUIPO</div>
                    </div>
                  </div>
                  <ul class="list-marked list-marked-big">
                    <li>28 profesionales<br> excepcionales a tiempo completo</li>
                    <li>Práctica de 5 años de equipo especializado</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Get in touch with us-->
      <section class="section section-md bg-default wow fadeIn section-lined" data-wow-delay="0.2s" id="contacts">
        <div class="container container-lined">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
          </div>
        </div>
        <div class="container">
          <h3>Póngase en contacto con nosotros</h3>
          <p class="big">No dude en ponerse en contacto con nuestros especialistas para obtener más información sobre nuestros precios y servicios. <br class="d-none d-xl-inline">Siempre estamos listos para responder sus preguntas.</p>
          <!-- RD Mailform-->
          <form class="rd-form rd-mailform form-boxed" data-form-output="form-output-global" data-form-type="contact" method="post" action="enviarCorreo">
            <div class="row row-50">
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Nombre</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">Correo electrónico</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-phone"></div>
                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone">Teléfono</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-message-outline"></div>
                  <label class="form-label" for="contact-message">Asunto</label>
                  <input class="form-input" id="contact-message" name="asunto" data-constraints="@Required"></input>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-message-outline"></div>
                  <label class="form-label" for="contact-message">Mensaje</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button class="button button-default" type="submit">Enviar Mensaje</button>
              </div>
            </div>
          </form>
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
                <dd><a class="link-default" href="mailto:#">info@aluminiosyobras.com.mx</a></dd>
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