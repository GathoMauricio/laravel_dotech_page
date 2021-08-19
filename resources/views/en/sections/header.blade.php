<!-- HEADER -->
    <section id="header">

      <!-- NAVIGATION -->
      <nav class="navbar navbar-fixed-top navbar-default bottom">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#header">
                DO<span style="color:#d30035;">TECH</span>
                <!--
                <img src = "{{ asset('images/logo.png') }}" alt="logo.png" width="64"/>
                -->
            </a>
          </div><!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#header">Inicio</a></li>
              <li><a href="#team">Servicios</a></li>
              <li><a href="#about">Nosotros</a></li>
              <li><a href="#portfolio" onclick = '$("#link_proyectos").click();'>Proyectos</a></li>
              <li><a href="#portfolio" onclick = '$("#link_exitos").click();'>Éxitos</a></li>
              <li><a href="#info">Clientes</a></li>
              <!--<li><a href="#">Compañías</a></li>-->
              <li><a href="#contact">Contacto</a></li>
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

      <!-- SLIDER -->
      <div class="header-slide">
        <section>
          <div id="loader" class="pageload-overlay" data-opening="M 0,0 0,60 80,60 80,0 z M 80,0 40,30 0,60 40,30 z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
              <path d="M 0,0 0,60 80,60 80,0 Z M 80,0 80,60 0,60 0,0 Z"/>
            </svg>
          </div> <!-- /.pageload-overlay -->
          
          <div class="image-slide bg-fixed">
            <div class="overlay">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">

                    <div class="slider-content">
                      <h1></h1>
                      <p>TUS ALIADOS TECNOLOGICOS</p>
                    </div>

                  </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
              </div> <!-- /.container -->
            </div> <!-- /.overlay -->
          </div> <!-- /.image-slide -->

          <nav class="nav-slide">
            <a class="prev" href="#prev">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-left">
                </svg>
              </span>
              <div>
                <span>Anterior</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Previous thumb">
              </div>
            </a>
            <a class="next" href="#next">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-right">
                </svg>
              </span>
              <div>
                <span>Siguiente</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Next thumb">
              </div>
            </a>
          </nav>
        </section>

        <script type="text/javascript">
        var dataHeader = [
                            {
                              bigImage :"{{ asset('images/soporte_tecnico_sitio_bg.jpg') }}",
                              title : "SOPORTE TECNICO EN SITIO Y REMOTO NACIONAL",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/punto_venta.jpeg') }}",
                              title : "SOFTWARE DE PUNTO DE VENTA – TCPOS",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/punto_venta2.png') }}",
                              title : "HARDWARE DE PUNTO DE VENTA",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/cableado_estructurado.jpg') }}",
                              title : "CABLEADO ESTRUCTURADO, FIBRA",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/video_vigilancia.jpeg') }}",
                              title : "VIDEO VIGILANCIA",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/red_contra_incendios.jpg') }}",
                              title : "RED CONTRA INCENDIOS",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/equipo_computo.jpg') }}",
                              title : "VENTA EQUIPO DE COMPUTO",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/respaldo_nube.jpg') }}",
                              title : "RESPALDO EN LA NUBE",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/hospedaje_web.jpg') }}",
                              title : "HOSPEDAJE WEB",
							  author : "DOTECH"
                            },
                            {
                              bigImage :"{{ asset('images/control_acceso.jpg') }}",
                              title : "CONTROL DE ACCESO",
							  author : "DOTECH"
                            },
                        ],
            loaderSVG = new SVGLoader(document.getElementById('loader'), {speedIn : 600, speedOut : 600, easingIn : mina.easeinout});
            loaderSVG.show()
        </script>

      </div><!-- /.header-slide -->
    </section>

    <!-- HEADER END -->