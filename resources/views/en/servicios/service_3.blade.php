@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <br><br>
        <h2>Point of Sale <span>Hardware</span></h2>
        <!--
        <p class="text-left">
             Do you need a point of sale or do you require a change of equipment?
             With DOTECH we have several points of sale that will make you
             more practical and simple jobs. We offer a wide portfolio of services,
             experience also allows us to work in many areas while continuing to deepen and
             specialize in them: IT Management, Specialized Technical Support, POS, Networks,
             Cloud, Voice and IT Consulting.
        </p>
      -->
      </header>
      <div class="container">
        <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_3/1.jpg') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_3/2.png') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_3/3.png') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_3/4.jpg') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_3/5.jpg') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_3/6.png') }}" width="100%"/>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
          var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "cube",
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            autoplay: true,
            speed:1000
          });
        </script>


<hr>
<div class="container">

  <div class="row">
    <div class="col-md-12">
      <h4>WE DESIGN THE FUTURE</h4>
      <p>
        Do you need a point of sale or do you require a change of equipment? With <span style="color:black;font-weight:bold;">DO</span><span style="color:#d30035;font-weight:bold;">TECH</span> we have several points of sale that will make the work more practical and simple. We offer a wide portfolio of services, the experience also allows us to work in many areas while continuing to deepen and specialize in them: IT Management, Specialized Technical Support, POS, Networks, Cloud, Voice and IT Consulting.
        <br><br>
        Our company is associated with  <b>Cewoo and Partnertech Corp</b>   are leading companies in the development and production of PC-based point of sale systems, world class peripherals, thermal and matrix printers, mobile printers, point of sale tablets. Always offering cutting-edge products for all types of environments. Whether it's compact all-in-one systems or mobile ordering terminals: the innovative products of these two companies are used around the world with leading retail, hospitality and specialty store customers.
      </p>
      <ul>
        <li>The perfect choice for businesses in the Hospitality and Retail industry.</li>
        <li>All in One solutions.</li>
        <li>Mobile Solutions.</li>
        <li>Peripherals (Printers, scanners, drawers, etc).</li>
      </ul>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12"><h4>OUR PRODUCTS:</h4></div>
    <div class="col-md-2">
      <img src="{{ asset('gallery/img/servicio_3/7.png') }}" width="100%"/>
    </div>
    <div class="col-md-2">
      <img src="{{ asset('gallery/img/servicio_3/8.png') }}" width="100%"/>
    </div>
    <div class="col-md-2">
      <img src="{{ asset('gallery/img/servicio_3/9.png') }}" width="100%"/>
    </div>
    <div class="col-md-2">
      <img src="{{ asset('gallery/img/servicio_3/10.png') }}" width="100%"/>
    </div>
    <div class="col-md-2">
      <img src="{{ asset('gallery/img/servicio_3/11.png') }}" width="100%"/>
    </div>
    <div class="col-md-2">
      <img src="{{ asset('gallery/img/servicio_3/12.png') }}" width="100%"/>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12"><h4>OUR PROVIDERS:</h4></div>
    <div class="col-md-6">
      <img src="{{ asset('gallery/img/servicio_3/13.png') }}" width="100%"/>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('gallery/img/servicio_3/14.png') }}" width="100%"/>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('gallery/img/servicio_3/15.png') }}" width="100%"/>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('gallery/img/servicio_3/16.png') }}" width="100%"/>
    </div>
  </div>

</div>
<hr>
<div class="row">
  <div class="col-md-12">
    <div class="swiper mySwiper2">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/17.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/18.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/19.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/20.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/21.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/22.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/23.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/24.jpg') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/25.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/27.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/28.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/29.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/30.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/31.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/32.jpg') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/33.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/34.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/35.jpg') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/36.jpg') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/37.jpg') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/38.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/39.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/40.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/41.png') }}" width="100%"/></div>
        <div class="swiper-slide"><img src="{{ asset('gallery/img/servicio_3/42.png') }}" width="100%"/></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<script>
  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 5,
    grid: {
      rows: 1,
    },
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: true,
  });
</script>

<hr>
</section>

@section('header',view(Route::currentRouteName().'.sections.header'))
@section('servicios',view(Route::currentRouteName().'.sections.servicios'))


@section('contacto',view(Route::currentRouteName().'.sections.contacto'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))

<style>
#header,#team,#info{
    display:none;
}
</style>

@section('footer',view(Route::currentRouteName().'.sections.footer'))