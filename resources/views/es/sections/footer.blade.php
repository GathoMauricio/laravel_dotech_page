<section id="footer">
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>{{ date('Y') }} &copy; DOTECH. Todos los derechos reservados.</p>
          </div>
        </div>
    </div>
</section>

<div class="whatsapp-fixed">
	<a href="https://web.whatsapp.com/send?phone=5215554159076&text=Hola,%20Me%20interesa%20su%20servicio" target="_blank">
		<img src = "{{ asset('images/whatsapp_icon.png') }}" width ="60">
	</a>
</div>

<style>

.whatsapp-fixed{
	position: fixed;
	left: 0;
	bottom: 0;
	padding: 15px;
	z-index: 99999;
	background-color: transparent;
}

.whatsapp-fixed span{
	color: white;
	font-size:50px;
	color: green;
	background-color: transparent;
}
</style>