<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::get('es', function () {
    return view('index');
})->name('es');
Route::get('en', function () {
    return view('index');
})->name('en');
Route::post('enviar_mensaje_contacto',[App\Http\Controllers\ContactoController::class,'enviarMensajeContacto'])->name('enviar_mensaje_contacto');