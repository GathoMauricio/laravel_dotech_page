@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <br><br>
        <h2>¿Why <span>TCPOS</span>?</h2>
        <p class="text-left">
            TCPOS is your solution provider for Point of Sale Software. <br/> Find out why we are the right answer to your needs.
        </p>
      </header>
      <div class="container">
        <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_2/1.png') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_2/2.png') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_2/3.png') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_2/4.png') }}" width="100%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/servicio_2/5.png') }}" width="100%"/>
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
            effect: "fade",
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
            <div class="col-md-3">
              <img src="{{ asset('gallery/img/servicio_2/6.png') }}" width="100%"/>
            </div>
            <div class="col-md-6">
              TCPOS is the world leader in POS technology for the hospitality and retail industries. 
              <br><br>
              TCPOS is completely independent of hardware and is compatible with the latest technology platforms. TCPOS works on touch screen terminals as well as tablets, smartphones and handheld computers. Our solutions are compatible with Windows and Android operating systems, and can be installed in Oracle, Microsoft SQL Server and PostgreSQL databases. In addition, TCPOS can be interfaced with a wide selection of devices that are commonly part of your business (card readers, printers, scales, barcode readers, charging terminals, kitchen monitors, iBeacons, etc.). 
            </div>
            <div class="col-md-3">
              <img src="{{ asset('gallery/img/servicio_2/7.png') }}" width="100%"/>
            </div>
          </div>
          <br>
          <h4 class="text-center">MARKETS</h4>
          <div class="row">
            <div class="col-md-3">
              <h5>RESTAURANTS & CATERING</h5>
              <img src="{{ asset('gallery/img/servicio_2/8.jpg') }}" width="100%"/>
            </div>
            <div class="col-md-9">
              TCPOS helps businesses handle the challenges of daily hospitality and food service offerings, delivering the best service and user experience to your guests.Our future-proof, highly adaptable and extensible POS solution will provide all the capabilities for you to Be sensitive to your business and compete in the markets you serve.
              Highlights: Graphical control of your restaurant, Customer card management, Faster service, Omnichannel, Ingredient information.
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h5>RETAIL</h5>
              <img src="{{ asset('gallery/img/servicio_2/9.png') }}" width="100%"/>
            </div>
            <div class="col-md-9">
              The ultimate shopping experience
              <br>
              By integrating mobility, cashless payments, loyalty systems, comprehensive price promotions, and facilitation of your Omnichannel strategies, TCPOS enables your business to accelerate payment processes and delight your customers at all points of interaction. where you offer your products and services.
              <br>
              Areas: Supermarkets and discounts, Bakeries, Cash & Carry.
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h5>HOTELS & RESORTS</h5>
              <img src="{{ asset('gallery/img/servicio_2/10.png') }}" width="100%"/>
            </div>
            <div class="col-md-9">
              Successful hotel and resort management requires all of your commitment and creativity. To satisfy customers' desires day after day, good food, friendly service and accurate billing management are critical issues for your business. TCPOS is a suite of software solutions that provides powerful and flexible tools for the management of sales operations, whether they are generated in different rooms of a hotel, in a large hotel chain or in a dream resort.
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h5>ENTERTAINMENT</h5>
              <img src="{{ asset('gallery/img/servicio_2/11.jpg') }}" width="100%"/>
            </div>
            <div class="col-md-9">
              What your guests are looking for is entertainment, fun and adventure, which is why TCPOS provides simple, seamless and robust integration points in all your entertainment venues. Having all of your event systems working in harmony will allow your guests to enjoy cashless payments and fast transaction processes. This will ensure that clients return to their family and friends for many years to come.
              <br>
              Areas: Cruises, sports clubs, ski resorts, stadiums, theme parks.
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h5>TRANSPORT</h5>
              <img src="{{ asset('gallery/img/servicio_2/12.jpg') }}" width="100%"/>
            </div>
            <div class="col-md-9">
              Always on time and available
              <br>
              Providing quality and timely services to your customers while they travel means processing a large number of orders and payments on a daily basis. Reliability, availability, exceptional performance, and ease of use are TCPOS's winning capabilities, which will exceed your business goals and take your business to new heights.
              <br>
              Areas: Ferry, railways, service stations, airports.
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <h5>PUBLIC ADMINISTRATION</h5>
              <img src="{{ asset('gallery/img/servicio_2/13.jpg') }}" width="100%"/>
            </div>
            <div class="col-md-9">
              At the service of the citizen.
              <br>
              TCPOS is a set of software solutions that provides powerful and flexible tools to effectively manage all transactions generated in public administration. TCPOS accelerates the delivery of services to citizens and companies, controlling any information thanks to a sophisticated analysis and reporting system.
            </div>
          </div>
        </div>
        <hr>
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