@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>¿Por qué <span>TCPOS</span>?</h2>
        <p class="text-left">
            TCPOS es su proveedor de soluciones para Software de punto de venta.<br/>Descubra por qué somos la respuesta correcta a sus necesidades.
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
                  <h4>TCPOS es el líder mundial en de el sector de tecnología de POS</h4>
                  <p>
                    TCPOS es totalmente independiente del hardware y es compatible con las 
                    plataformas de tecnología de punta. TCPOS funciona en terminales de pantallas 
                    táctiles así como en tabletas, teléfonos inteligentes y computadoras de mano. 
                    Nuestras soluciones son compatibles con los sistemas operativos Windows y Android, 
                    y puede ser instalada en bases de datos Oracle, Microsoft SQL Server y PostgreSQL. Además, 
                    TCPOS puede ser interconectado con una amplia selección de dispositivos que comúnmente 
                    forman parte de su negocio (lectores de tarjetas, impresoras, balanzas, lectores de código de barras, 
                    terminales de recarga, monitores de cocina, iBeacons, etc).
                  </p>
                </div>
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