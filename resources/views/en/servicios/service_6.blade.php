@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>FIRE <span>NETWORK</span></h2>
        <p class="text-left">
            Our main objective is the safety of our clients by protecting 
            people and properties with various fire fighting technologies, 
            for this we use the latest in fire detection and suppression, 
            which is why we have generated a wide catalog that meets all 
            your needs that takes us from offices, complete buildings, 
            restaurant kitchens among others.
            <br/><br/>
            At DOTECH we not only install them but we also design an optimal 
            system to give you the greatest security, save human lives, 
            minimize the economic losses caused by fire.
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
                            <h4>OUR BRANDS</h4>
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