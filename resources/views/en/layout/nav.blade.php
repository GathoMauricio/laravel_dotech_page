<nav id="menu">
	<ul class="links">
		<li><a href="{{ route('/') }}">INICIO</a></li>
		<li><a href="#titulo_servicios" onclick="menuServicios();">SERVICES</a></li>
		<li><a href="#titulo_nosotros" onclick="menuNosotros();">ABOUT US</a></li>
        <li><a href="#titulo_proyectos" onclick="menuProyectos();">PROJECTS</a></li>
        <li><a href="#titulo_clientes" onclick="menuClientes();">OUR CLIENTS</a></li>
        <li><a href="#titulo_casos" onclick="menuExitos();">SUCCESS STORIES</a></li>
        <li><a href="#titulo_contacto" onclick="menuContacto();">CONTACT</a></li>
        <li><a href="#titulo_companias" onclick="menuCompanhias();">OUR COMPANIES</a></li>
        <li>
        <a href="javascript:void(0)" onclick="seleccionarIdioma('es');">
            CHANGE LANGUAGE &nbsp;&nbsp;
            <img src="{{ asset('images/bandera_MEX.png') }}" width="20"/> 
        </a>
        </li>
	</ul>
</nav>