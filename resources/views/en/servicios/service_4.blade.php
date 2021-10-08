@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
  <br><br>
      <header class="title">
        <h2 style="font-size: 18px;">Structured Cabling <span>VOICE | DATA | VIDEO | OPTICAL FIBER</span></h2>
        <img src="{{ asset('gallery/img/servicio_4/1.png') }}" width="100%"/>
        <br><br>
        <p class="text-left">
          We design voice and data networks that are easy to administer, highly migrate and flexible, to interconnect the areas of your company. Using materials of high quality and durability, as well as advanced technology, to provide a high quality service and security in its networks and processes that contribute to the reduction of costs in its telephone and data communications . <b>ALWAYS WITH THE SUPPORT OF OUR CERTIFICATIONS IN THE MAIN BRANDS</b>.
        </p>
      </header>
      <div class="container">
        <!-- Swiper -->
        <div class="swiper mySwiper1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_4/2.jpg') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_4/3.jpg') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_4/4.jpg') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_4/5.jpg') }}" width="100%"/>
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
          var swiper = new Swiper(".mySwiper1", {
          slidesPerView: 3,
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

  <div class="container">
    <div class="row table-row">
      <div class="col-sm-6 hidden-xs">
        <div class="section-content">
        <div class="big-image p-1" style="background-image:url({{ asset('gallery/img/servicio_4/6.jpg') }})"></div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="section-content">
        <div class="about-content left animated" data-animate="fadeInLeft">
          <div class="about-detail">
            <p>
              A company with good infrastructure will always give greater <b>SECURITY, TRUST and CREDIBILITY</b> to its clients. Renew your infrastructure by ordering your Voice and Data services and avoid a bad connection.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>

  <div class="container">
    <div class="row">
      <div class="col-md-12"><h4 class="text-center">INSTALLATIONS</h4></div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/7.jpg') }}" width="100%" height="100%"/>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/8.png') }}" width="100%" height="100%"/>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/9.png') }}" width="100%" height="100%"/>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/10.jpg') }}" width="100%" height="100%"/>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper2", {
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
 <hr><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="text-center">WIRELESS WIFI MICROWAVE</h4>
      </div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper3">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/11.png') }}" width="100%"/>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/12.png') }}" width="100%"/>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/13.png') }}" width="100%"/>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/14.png') }}" width="100%"/>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/15.png') }}" width="100%"/>
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/servicio_4/16.png') }}" width="100%"/>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
 
  <script>
    var swiper = new Swiper(".mySwiper3", {
    slidesPerView: 3,
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

<br><br>
</section>
@section('header',view(Route::currentRouteName().'.sections.header'))
@section('servicios',view(Route::currentRouteName().'.sections.servicios'))
@section('proyectos',view(Route::currentRouteName().'.sections.proyectos'))


@section('contacto',view(Route::currentRouteName().'.sections.contacto'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))

<style>
#header,#team,#portfolio,#info{
    display:none;
}
</style>

@section('footer',view(Route::currentRouteName().'.sections.footer'))