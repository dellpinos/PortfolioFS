<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;


/* Rutas que inician en español */

Route::middleware(['lang.es'])->group(function () {
    /* Homepage */
    Route::get('/', function () {
        return view('home.index');
    })->name('index');

    /* Pages */
    Route::get('/contact', function () {
        return view('home.pages.contact');
    })->name('contact');

    Route::get('/tec_info', function () {
        return view('home.pages.tec_info');
    })->name('tec_info');

    Route::get('/fuentes', function () {
        return view('home.pages.fuentes');
    })->name('fuentes');

    Route::get('/responsive', function () {
        return view('home.pages.responsive');
    })->name('responsive');

    Route::get('/hosting', function () {
        return view('home.pages.hosting');
    })->name('hosting');

    // Route::get('/planning', function() {
    //     return view('home.pages.planning');
    // });

    /* Works - Apps */
    Route::get('/apps/ecommerce', function () {
        return view('home.apps.ecommerce');
    })->name('apps.ecommerce');

    Route::get('/apps/corporation', function () {
        return view('home.apps.corporation');
    })->name('apps.corporation');

    Route::get('/apps/landing', function () {
        return view('home.apps.landing');
    })->name('apps.landing');

    Route::get('/apps/porfolio', function () {
        return view('home.apps.porfolio');
    })->name('apps.porfolio');

    Route::get('/apps/management', function () {
        return view('home.apps.management');
    })->name('apps.management');

    Route::get('/apps/reservation', function () {
        return view('home.apps.reservation');
    })->name('apps.reservation');

    Route::get('/apps/blog', function () {
        return view('home.apps.blog');
    })->name('apps.blog');

    Route::get('/apps/api', function () {
        return view('home.apps.api');
    })->name('apps.api');

    Route::get('/apps/industry', function () {
        return view('home.apps.industry');
    })->name('apps.industry');
    // Fin Works - Apps
});


/* Rutas que inician en inglés */

/* Porfolio */
Route::get('/porfolio', function () {
    return view('porfolio.index');
})->middleware('lang.en')->name('porfolio');


/* Otras rutas */

/* Enviar Emails Porfolio - Homepage */
Route::post('/contact', function () {
    info('Enviando email...');
    return app()->call([SendEmailController::class, 'index']);
})->name('contact.send');

/* Cambiar Idioma Porfolio */
Route::get('/languages/{locale}', function ($locale) {
    // Guardar el idioma en la sesión
    session(['locale' => $locale]);

    // Establecer el idioma en la aplicación
    App::setLocale($locale);

    // Redirigir al usuario a la página anterior
    return redirect()->back();
})->name('home.language');







    // TODO: 
    // Cambbiar seccion "info" por un formato de entradas de blog, tipo 3 cards verticales y que cada una tenga un "ver mas" que lleve a las vistas
    // En estas vistas aprovecho a dar info sobre hosting a los usuarios
    // Hacer una vista de Plan utilizando los nuevos estilos