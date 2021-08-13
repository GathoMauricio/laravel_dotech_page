<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviarMensajeContacto(Request $request)
    {
        \Mail::send('email.contacto', ['request' => $request], function ($mail) use ($request) {
            $mail->from('dotechlanding@dotredes.com',env('APP_NAME'));
            $mail->to(['contacto@dotredes.com','rortuno@dotredes.com','mauricio2769@gmail.com']);
        });
        return redirect()->back()->with('contacto','success');
    }
}
