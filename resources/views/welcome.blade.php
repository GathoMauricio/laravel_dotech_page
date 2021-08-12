<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <title>{{ env('APP_NAME') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('hielo/css/main.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        @livewireStyles
	</head>
	<body>
        <header id="header" class="alt">
            <div class="logo">
                <a href="{{ route('/'); }}" style="font-weight:bold">
                    <span style="color:#333333;font-weight:bold;font-size:25px;">DO</span><span style="color:#d30035;font-weight:bold;font-size:25px;">TECH</span>
                    &nbsp;
                    TUS ALIADOS TECNOLOGICOS
                </a>
            </div>
        </header>
        <section id = "banner_1" class="banners full">
            <article>
                <img src="{{ asset('images/soporte_tecnico_sitio_bg.jpg')}}" alt="soporte_tecnico_sitio_bg.jpg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">SOPORTE TECNICO EN SITIO Y REMOTO NACIONAL!!</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/punto_venta.jpeg')}}" alt="punto_venta.jpeg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">SOFTWARE DE PUNTO DE VENTA – TCPOS</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/punto_venta2.png')}}" alt="punto_venta2.png" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">HARDWARE DE PUNTO DE VENTA</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/cableado_estructurado.jpg')}}" alt="cableado_estructurado.jpg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">CABLEADO ESTRUCTURADO, FIBRA.</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/video_vigilancia.jpeg')}}" alt="video_vigilancia.jpeg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">VIDEO VIGILANCIA</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/red_contra_incendios.jpg')}}" alt="red_contra_incendios.jpg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">RED CONTRA INCENDIOS</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/equipo_computo.jpg')}}" alt="equipo_computo.jpg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">VENTA EQUIPO DE COMPUTO</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/respaldo_nube.jpg')}}" alt="respaldo_nube.jpg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">RESPALDO EN LA NUBE</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/hospedaje_web.jpg')}}" alt="hospedaje_web.jpg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">HOSPEDAJE WEB</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/control_acceso.jpg')}}" alt="control_acceso.jpg" />
                <div class="inner">
                    <header>
                        <p style="font-weight:bold;font-size:20px;font-style:italic;"><a href="javascript:void(0)">CONTROL DE ACCESO</a></p>
                        <h2><span style="color:#333333;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span></h2>
                    </header>
                </div>
            </article>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title font-weight-bold text-center" id="staticBackdropLabel">Bienvenido | Welcome</h2>
            </div>
            <div class="modal-body">
                <h4 class ="text-center">
                    Por favor seleccione el idioma de su preferencia.
                    <br/>
                    Please select the language of your preference.
                </h4>
                <button onclick = "seleccionarIdioma('es');" type="button" class="btn btn-info btn-block" >
                    <img src="{{ asset('images/bandera_mex.png') }}" width="40"/> 
                    <span style="color:#fff;font-weight:bold;font-size:18px;padding:20px;">Español</span>
                </button>
                <button onclick = "seleccionarIdioma('en');" type="button" class="btn btn-info btn-block" >
                    <img src="{{ asset('images/bandera_usa.png') }}" width="40"/> 
                    <span style="color:#fff;font-weight:bold;font-size:18px;padding:20px;">English</span>
                </button>
            </div>
            </div>
        </div>
        </div>

		<!-- Scripts -->
            <script src="{{ asset('hielo/js/jquery.min.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
			<script src="{{ asset('hielo/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('hielo/js/skel.min.js') }}"></script>
			<script src="{{ asset('hielo/js/util.js') }}"></script>
			<script src="{{ asset('hielo/js/main.js') }}"></script>
			<script src="{{ asset('js/app.js') }}"></script>
            <script>
                console.log(window.localStorage.getItem('lang'));
                $(() => { 
                    if(window.localStorage.getItem('lang') != null)
                    {
                        window.location = window.localStorage.getItem('lang');
                    }
                    $("#staticBackdrop").modal(); 
                    });
            </script>
            @livewireScripts
	</body>
</html>