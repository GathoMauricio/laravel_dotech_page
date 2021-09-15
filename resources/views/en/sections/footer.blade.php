<section id="footer">
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>{{ date('Y') }} &copy; <span style="color:white;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span>. All right reserved.</p>
          </div>
        </div>
    </div>
</section>
<div class="whatsapp-fixed">
	<a href="https://wa.me/5215554159076/?text=Hello,%20I%20am%20interested%20in%20your%20service" target="_blank">
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