<nav id="menu">
	<ul class="links">
		<li><a href="{{ route('/') }}">INICIO</a></li>
		<li><a href="#titulo_servicios" onclick="menuServicios();">SERVICIOS</a></li>
		<li><a href="#titulo_nosotros" onclick="menuNosotros();">NOSOTROS</a></li>
        <li><a href="#titulo_proyectos" onclick="menuProyectos();">PROYECTOS</a></li>
        <li><a href="#titulo_clientes" onclick="menuClientes();">NUESTROS CLIENTES</a></li>
        <li><a href="#titulo_casos" onclick="menuExitos();">CASOS DE ÉXITO</a></li>
        <li><a href="#titulo_contacto" onclick="menuContacto();">CONTACTO</a></li>
        <li>
        <a href="javascript:void(0)" onclick="seleccionarIdioma('en');">
            CAMBIAR IDIOMA &nbsp;&nbsp;
            <img src="{{ asset('images/bandera_usa.png') }}" width="20"/> 
        </a>
        </li>
	</ul>
</nav>