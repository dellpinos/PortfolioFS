<?php

use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.index');
});

Route::post('/', function () {
    return app()->call([SendEmailController::class, 'index']);
});
