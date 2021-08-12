@if (Route::currentRouteName() == 'es')
<!-- Nav ES-->
<nav id="menu">
	<ul class="links">
		<li><a href="{{ route('/') }}">INICIO</a></li>
		<li><a href="javascript:void(0)" onclick="menuServicios();">SERVICIOS</a></li>
		<li><a href="javascript:void(0)" onclick="menuNosotros();">NOSOTROS</a></li>
        <li><a href="javascript:void(0)" onclick="menuProyectos();">PROYECTOS</a></li>
        <li><a href="javascript:void(0)" onclick="menuClientes();">NUESTROS CLIENTES</a></li>
        <li><a href="javascript:void(0)" onclick="menuExitos();">CASOS DE ÉXITO</a></li>
        <li><a href="javascript:void(0)" onclick="menuContacto();">CONTACTO</a></li>
        <li><a href="javascript:void(0)" onclick="menuCompanhias();">NUESTRAS COMPAÑIAS</a></li>
	</ul>
</nav>
@endif
@if (Route::currentRouteName() == 'en')
<!-- Nav ES-->
<nav id="menu">
	<ul class="links">
		<li><a href="{{ route('/') }}">INICIO</a></li>
		<li><a href="javascript:void(0)" onclick="menuServicios();">SERVICES</a></li>
		<li><a href="javascript:void(0)" onclick="menuNosotros();">ABOUT US</a></li>
        <li><a href="javascript:void(0)" onclick="menuProyectos();">PROJECTS</a></li>
        <li><a href="javascript:void(0)" onclick="menuClientes();">OUR CLIENTS</a></li>
        <li><a href="javascript:void(0)" onclick="menuExitos();">SUCCESS STORIES</a></li>
        <li><a href="javascript:void(0)" onclick="menuContacto();">CONTACT</a></li>
        <li><a href="javascript:void(0)" onclick="menuCompanhias();">OUR COMPANIES</a></li>
	</ul>
</nav>
@endif