@extends(Route::currentRouteName().'.layout.app')

<section id="about" class="light">
      <header class="title">
        <h2>RESPALDO  <span>BACKUP</span></h2>
      </header>

    <div class="container">
        <div class="row table-row">

            <div class="col-sm-12">
                <div class="section-content">
                    <img src = "{{ asset('images/cloud1.png') }}" width="100%"/>
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