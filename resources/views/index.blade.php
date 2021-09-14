@extends(Route::currentRouteName().'.layout.app')

@section('header',view(Route::currentRouteName().'.sections.header'))
@section('servicios',view(Route::currentRouteName().'.sections.servicios'))
@section('nosotros',view(Route::currentRouteName().'.sections.nosotros'))
@section('proyectos',view(Route::currentRouteName().'.sections.proyectos'))
@section('clientes',view(Route::currentRouteName().'.sections.clientes'))
@section('contacto',view(Route::currentRouteName().'.sections.contacto'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))

@include(Route::currentRouteName().'.modals.project_1')

@section('footer',view(Route::currentRouteName().'.sections.footer'))