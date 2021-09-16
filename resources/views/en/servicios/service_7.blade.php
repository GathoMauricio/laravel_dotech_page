@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>SALE OF  <span>COMPUTER EQUIPMENT</span></h2>
        <p class="text-left">
            We are Distributors of Virtually all brands of computer equipment, some of which we import directly and others we distribute through Wholesalers, so we can always offer you excellence in quality and competitive prices Guaranteed !!!
            <br/><br/>
            Although the most important thing is our free installation service and follow-up to after-sales guarantees; Not bored of reading manuals and long waits on the phone? Ask about our free installation service for the equipment you purchase with us and if you ever require a warranty during the term, don't worry, we will do the procedure for you.
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

@section('contacto',view(Route::currentRouteName().'.sections.contacto'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))

<style>
#header,#team,#portfolio,#info{
    display:none;
}
</style>

@section('footer',view(Route::currentRouteName().'.sections.footer'))