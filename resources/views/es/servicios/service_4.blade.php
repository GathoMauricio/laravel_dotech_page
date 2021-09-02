@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>Cableado Estructurado <span>VOZ | DATOS | VIDEO | FIBRA OPTICA</span></h2>
        <p class="text-left">
            Una Empresa con buena infraestructura siempre dará mayor SEGURIDAD, CONFIANZA y CREDIBILIDAD a sus clientes. Renueve su infraestructura ordenando sus servicios de Voz y Datos y evite una mala conexión.
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
                  <h4>SIEMPRE CON EL RESPALDO DE NUESTRAS CERTIFICACIONES EN LAS PRINCIPALES MARCAS</h4>
                  <p>
                    Diseñamos redes de voz y datos que sean de fácil administración, alta migración y flexibilidad, 
                    para interconectar las áreas de su empresa. Utilizando materiales de alta calidad y durabilidad, 
                    así como tecnología avanzada, para brindar un servicio de alta calidad y seguridad en sus redes y 
                    procesos que contribuyan con la reducción de costos en sus Comunicaciones telefónicas y datos.
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