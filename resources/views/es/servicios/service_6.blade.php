@extends(Route::currentRouteName().'.layout.app')

<section id="about" class="light">
      <header class="title">
        <h2>RED <span>CONTRA INCENDIOS</span></h2>
        <p class="text-left">
            Nuestro principal objetivo es la seguridad de nuestros 
            clientes protegiendo personas y propiedades con diversas 
            tecnologías contra incendios, para esto utilizamos lo ultimo 
            en detección y supresión de incendios, por ello que hemos 
            generado un amplio catálogo que satisfaga todas tus necesidades 
            que nos lleva desde oficinas, edificios completos, 
            cocinas de restaurantes entre otras.
            <br/><br/>
            En DOTECH no solo los instalamos si no que diseñamos un sistema 
            optimo para darte la mayor seguridad, Salvar vidas humanas, minimizar 
            las pérdidas económicas producidas por el fuego.
        </p>
      </header>

    <div class="container">
        <div class="row table-row">
            <div class="col-sm-6 hidden-xs">
                <div class="section-content">
                    <div class="big-image p-1" style="background-image:url({{ asset('images/red_contra_incendios1.png') }})"></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-detail">
                            <h4>NUESTRAS MARCAS</h4>
                            <p>
                                <img src ="{{ asset('images/fire_marca1.jpg') }}" width="100%" />
                                <img src ="{{ asset('images/fire_marca2.png') }}" width="100%" />
                                <img src ="{{ asset('images/fire_marca3.jpg') }}" width="100%" />
                            </p>
                        </div>
                    </div>
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