@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>Structured Cabling <span>VOICE | DATA | VIDEO | OPTICAL FIBER</span></h2>
        <p class="text-left">
            A company with good infrastructure will always give greater SECURITY, TRUST and CREDIBILITY to its clients. Renew your infrastructure by ordering your Voice and Data services and avoid a bad connection.
        </p>
      </header>

    <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image p-1" style="background-image:url({{ asset('images/cableado1.png') }})"></div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-detail">
                  <h4>ALWAYS WITH THE SUPPORT OF OUR CERTIFICATIONS IN THE MAIN BRANDS</h4>
                  <p>
                    We design voice and data networks that are easy to administer, highly migrate and flexible, 
                    to interconnect the areas of your company. Using materials of high quality and durability, 
                    as well as advanced technology, to provide a high quality service and security in its networks and processes 
                    that contribute to the reduction of costs in its telephone and data communications.
                  </p>
                </div>
              </div>
        </div>
    </div>
</section>
<section  class="container dark">
    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset('images/cer1.jpg') }}">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/cer2.jpg') }}">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/cer3.jpg') }}">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/cer4.jpg') }}">
        </div>
    </div>
</section>

@section('header',view(Route::currentRouteName().'.sections.header'))
@section('servicios',view(Route::currentRouteName().'.sections.servicios'))
@section('proyectos',view(Route::currentRouteName().'.sections.proyectos'))
@section('clientes',view(Route::currentRouteName().'.sections.clientes'))

@section('contacto',view(Route::currentRouteName().'.sections.contacto'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))

<style>
#header,#team,#portfolio,#info{
    display:none;
}
</style>

@section('footer',view(Route::currentRouteName().'.sections.footer'))