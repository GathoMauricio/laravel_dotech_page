@extends(Route::currentRouteName().'.layout.app')

@section('header',view(Route::currentRouteName().'.layout.header'))
@section('nav',view(Route::currentRouteName().'.layout.nav'))

@section('banner',view(Route::currentRouteName().'.sections.banner'))
@section('servicios',view(Route::currentRouteName().'.sections.servicios'))
@section('nosotros',view(Route::currentRouteName().'.sections.nosotros'))
@section('proyectos',view(Route::currentRouteName().'.sections.proyectos'))
@section('clientes',view(Route::currentRouteName().'.sections.clientes'))
@section('exitos',view(Route::currentRouteName().'.sections.exitos'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))


@include(Route::currentRouteName().'.modals.contacto')

@section('footer',view(Route::currentRouteName().'.layout.footer'))