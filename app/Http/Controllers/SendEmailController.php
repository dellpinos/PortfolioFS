<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendEmailController extends Controller
{
    static function index(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|max:60|email',
            'name' => 'required|string|max:30|min:3',
            'mensaje' => 'required|string|min:5|max:600',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('contact_error', 'Revisa los campos de contacto.');
        }

        $resultado =  Mail::to('dellpinos7@gmail.com')->send(new ContactoMail($request->email, $request->name, $request->mensaje)); // <<<< Como enviar emails

        // Verifica el resultado
        if ($resultado) {
            // Success
            return redirect()->back()->with('contact_success', 'El email se envió correctamente, te contactaré lo antes posible.');
        } else {
            // Error
            return redirect()->back()->with('contact_error', 'Hubo un problema. Por favor, inténtalo de nuevo o puedes contactarme en alguna de mis Redes Sociales.');
        }
    }
}
