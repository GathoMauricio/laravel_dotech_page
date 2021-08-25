<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index($servicio = null){
        if(is_null($servicio))
        {
            return view('index');
        }else{
            return view(\Route::currentRouteName().'.servicios.'.$servicio);
        }
        
    }
}
