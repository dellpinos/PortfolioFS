<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    static function index(Request $request)
    {

        dd($request->request);

        Mail::to($request->email)->send(new InvitarUsuario($empresa->name, $token, auth()->user()->username)); // <<<< Como enviar emails
    }
}
