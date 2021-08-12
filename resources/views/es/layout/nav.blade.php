<nav id="menu">
	<ul class="links">
		<li><a href="{{ route('/') }}">INICIO</a></li>
		<li><a href="#titulo_servicios">SERVICIOS</a></li>
		<li><a href="#titulo_nosotros">NOSOTROS</a></li>
        <li><a href="#titulo_proyectos">PROYECTOS</a></li>
        <li><a href="#titulo_clientes">NUESTROS CLIENTES</a></li>
        <li><a href="#titulo_casos">CASOS DE ÉXITO</a></li>
        <li><a href="#titulo_companias">NUESTRAS COMPAÑIAS</a></li>
        <li><a href="javascript:void(0)" onclick="formularioContacto();">CONTACTO</a></li>
        <li>
        <a href="javascript:void(0)" onclick="seleccionarIdioma('en');">
            CAMBIAR IDIOMA &nbsp;&nbsp;
            <img src="{{ asset('images/bandera_usa.png') }}" width="20"/> 
        </a>
        </li>
	</ul>
</nav>