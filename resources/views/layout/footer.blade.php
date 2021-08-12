<!-- Footer -->
<footer id="footer">
	<div class="container">
		<ul class="icons">
			<li><a href="https://twitter.com/dotredes" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="https://www.facebook.com/DotRedes?fref=ts" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="https://www.youtube.com/channel/UCSAnfIP4DTxjsSfEXxh6m-w"  target="_blank" class="icon fa-youtube"><span class="label">Instagram</span></a></li>
			<li><a href="mailto:contacto@dotredes.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
		</ul>
	</div>
    @if (Route::currentRouteName() == 'es')
	<div class="copyright">
		{{ date('Y') }} &copy; DOTECH. Todos los derechos reservados.
	</div>
    @endif
    @if (Route::currentRouteName() == 'en')
	<div class="copyright">
		{{ date('Y') }} &copy; DOTECH. All rights reserved.
	</div>
    @endif
</footer>