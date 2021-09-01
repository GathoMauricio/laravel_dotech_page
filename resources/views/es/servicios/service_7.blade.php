@extends(Route::currentRouteName().'.layout.app')

<section id="about" class="light">
      <header class="title">
        <h2>VENTA DE   <span>EQUIPO DE COMPUTO</span></h2>
        <p class="text-left">
            Somos Distribuidores de Practicamente todas las marcas de equipo de computo  algunas las importamos directamente y otras las distribuimos a traves de Mayoristas por lo que siempre podremos ofrecerle excelencia en calidad y competitividad  en precios Garantizada!!!
            <br/><br/>
            Aunque lo mas importante es nuestro servicio de instalacion gratuito y seguimiento a garantias postventa; No esta aburrido de leer manuales y largas esperas en el telefono? Pregunte por nuestro servicio gratuito de instalacion del equipo que adquiera con nosotros y si algun dia requiere garantia durante la vigencia, no se preocupe nosotros haremos el trámite por usted.
        </p>
      </header>

    <div class="container">
        <div class="row table-row">

            <div class="col-sm-6">
                <div class="section-content">
                    <img src = "{{ asset('images/venta1.png') }}" width="100%"/>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="section-content">
                    <img src = "{{ asset('images/venta2.jpg') }}" width="100%"/>
                </div>
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