<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    static function index(Request $request)
    {

        dd($request->request);
    }
}
