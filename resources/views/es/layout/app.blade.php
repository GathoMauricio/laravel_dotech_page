<!DOCTYPE html>
<!--
	Daraz by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | ES</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('daraz') }}/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ asset('daraz') }}/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{ asset('daraz') }}/css/animate.css"/>
    <link rel="stylesheet" href="{{ asset('daraz') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" />

    <script type="text/javascript" src="{{ asset('daraz') }}/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="{{ asset('daraz') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZXJBVDf7R4JqmSpopVPoduIGWx1IwpBM"></script>
    <script type="text/javascript" src="{{ asset('daraz') }}/js/plugins.js"></script>

	</head>
	<body>

	<div class="svg-wrap">
      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-left" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z"></path>
      </svg>

      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-right" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z"></path>
      </svg>
    </div>


    <!-- MAIN CONTENT -->

   <div class="container-fluid">
        @yield('header')
        @yield('servicios')
        @yield('nosotros')
        @yield('proyectos')
        @yield('clientes')
        @yield('contacto')
        @yield('mapa')
        @yield('footer')   
	
    <!--
    <section class="separator blue">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="0">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="43"></span>
                <small>Clients</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="500">
              <div class="counter-icon">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="20"></span>
                <small>Awards</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1000">
              <div class="counter-icon">
                <i class="fa fa-gears"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="34"></span>
                <small>Projects</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1500">
              <div class="counter-icon">
                <i class="fa fa-inbox"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="1298"></span>
                <small>Mail</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->

    <!-- FOOTER CONTACT -->
    <!--
     <section id="contact" class="dark">
      <header class="title">
        <h2>Contact <span>Us</span></h2>
        <p>Lorem ipsum Esse esse cillum nisi cillum deserunt tempor ut pariatur qui officia. Lorem ipsum Magna eu irure sint occaecat cupidatat dolore minim irure cillum.</p>
      </header>

      <div class="container">
        <div class="row">
          <div class="col-md-8 animated" data-animate="fadeInLeft">
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" rows="3" placeholder="Tell Us Everything"></textarea>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-default submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-4 animated" data-animate="fadeInRight">
            <address>
                <span><i class="fa fa-map-marker fa-lg"></i> 84 State Road 123 City, State 24813</span>
                <span><i class="fa fa-phone fa-lg"></i> (123) xxx - xxx</span>
                <span><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:contact@example.com">contact&#64;example.com</a></span>
                <span><i class="fa fa-globe fa-lg"></i> <a href="http://support.example.com">support.example.com</a></span>
            </address>
          </div>
		  
        </div>
      </div>
    </section>
    -->
    <!--
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Made BY <i class="fa fa-heart"></i> <a href="http://templatestock.co">Template Stock</a></p>
            <p><small>Images : unsplash.com</small></p>
          </div>
        </div>
      </div>
    </section>
    -->
   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="{{ asset('daraz/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	</body>
</html>