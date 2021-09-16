@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>¿Why <span>TCPOS</span>?</h2>
        <p class="text-left">
            TCPOS is your solution provider for Point of Sale Software. <br/> Find out why we are the right answer to your needs.
        </p>
      </header>

    <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image p-1" style="background-image:url({{ asset('images/tcpos1.png') }})"></div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-detail">
                  <h4>TCPOS is the world leader in the POS technology sector</h4>
                  <p>
                     TCPOS is completely hardware independent and compatible with the
                     cutting edge technology platforms. TCPOS works on display terminals
                     touch screens as well as tablets, smartphones and handhelds.
                     Our solutions are compatible with Windows and Android operating systems,
                     and it can be installed in Oracle, Microsoft SQL Server and PostgreSQL databases. What's more,
                     TCPOS can be interconnected with a wide selection of devices that commonly
                     are part of your business (card readers, printers, scales, barcode readers,
                     charging terminals, kitchen monitors, iBeacons, etc).
                  </p>
                </div>
              </div>
        </div>
    </div>
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