<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendEmailController extends Controller
{
    static function index(Request $request)
    {


        // reCaptcha
        $secretKey = env('CAPTCHA_PRIVATE');
        $recaptchaResponse = $request->recaptcha_response;

        Log::info('Request reCaptcha', $request->recaptcha_response);
    
        // Configurar la solicitud
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $secretKey,
            'response' => $recaptchaResponse
        ];
    
        // Configuración de la solicitud HTTP
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];
    
        // Crear el contexto de la solicitud
        $context  = stream_context_create($options);
    
        // Enviar la solicitud y recibir la respuesta
        $response = file_get_contents($url, false, $context);
        $result = json_decode($response);

        Log::info('Reapuesta de google', $response);
        Log::info('Reapuesta - score', $result->score);


        if ($result->success && $result->score >= 0.5) {

            // No es un bot
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|max:60|email',
                'name' => 'required|string|max:30|min:3',
                'mensaje' => 'required|string|min:5|max:2000',
                'email_origin' => 'required|string|in:consultora,porfolio'
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('contact_error', __('portfolio_text.email_fields'));
            }
    
            if ($request->email_origin === 'consultora') {
                $resultado =  Mail::to('dellpinos7@gmail.com')->send(new ContactoMail($request->email, $request->name, $request->mensaje, $request->email_origin)); // <<<< Enviar mail a consultora
            } elseif ($request->email_origin === 'porfolio') {
                $resultado =  Mail::to('dellpinos7@gmail.com')->send(new ContactoMail($request->email, $request->name, $request->mensaje, $request->email_origin)); // <<<< Enviar mail a porfolio
            }
    
            // Verifica el resultado
            if ($resultado) {
                // Success
                return redirect()->back()->with('contact_success', __('portfolio_text.email_success') );
            } else {
                // Error
                return redirect()->back()->with('contact_error', __('portfolio_text.email_error') );
            }
        } else {

            // Es un bot
            return redirect()->back()->with('contact_error', __('portfolio_text.email_error') );
        }
    }
}
