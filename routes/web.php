<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect('en');
})->name('/');

Route::get('es/{service?}', [App\Http\Controllers\ServicioController::class,'index'])->name('es');
Route::get('en/{service?}', [App\Http\Controllers\ServicioController::class,'index'])->name('en');

Route::post('enviar_mensaje_contacto',[App\Http\Controllers\ContactoController::class,'enviarMensajeContacto'])->name('enviar_mensaje_contacto');

Route::get('notification',function(){
    return view('notification');
})->name('notification');