<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;


/* Rutas que inician en español */

    /* Homepage */
    Route::get('/', function () {
        return view('home.index');
    })->defaults('locale', 'es')->name('index');

    /* Pages */
    Route::get('/contact', function () {
        return view('home.pages.contact');
    })->defaults('locale', 'es')->name('contact');

    Route::get('/tec_info', function () {
        return view('home.pages.tec_info');
    })->defaults('locale', 'es')->name('tec_info');

    Route::get('/fuentes', function () {
        return view('home.pages.fuentes');
    })->defaults('locale', 'es')->name('fuentes');

    Route::get('/responsive', function () {
        return view('home.pages.responsive');
    })->defaults('locale', 'es')->name('responsive');

    Route::get('/hosting', function () {
        return view('home.pages.hosting');
    })->defaults('locale', 'es')->name('hosting');

    /* Works - Apps */
    Route::get('/apps/ecommerce', function () {
        return view('home.apps.ecommerce');
    })->defaults('locale', 'es')->name('apps.ecommerce');

    Route::get('/apps/corporation', function () {
        return view('home.apps.corporation');
    })->defaults('locale', 'es')->name('apps.corporation');

    Route::get('/apps/landing', function () {
        return view('home.apps.landing');
    })->defaults('locale', 'es')->name('apps.landing');

    Route::get('/apps/porfolio', function () {
        return view('home.apps.porfolio');
    })->defaults('locale', 'es')->name('apps.porfolio');

    Route::get('/apps/management', function () {
        return view('home.apps.management');
    })->defaults('locale', 'es')->name('apps.management');

    Route::get('/apps/reservation', function () {
        return view('home.apps.reservation');
    })->defaults('locale', 'es')->name('apps.reservation');

    Route::get('/apps/blog', function () {
        return view('home.apps.blog');
    })->defaults('locale', 'es')->name('apps.blog');

    Route::get('/apps/api', function () {
        return view('home.apps.api');
    })->defaults('locale', 'es')->name('apps.api');

    Route::get('/apps/industry', function () {
        return view('home.apps.industry');
    })->defaults('locale', 'es')->name('apps.industry');
    // Fin Works - Apps


/* Rutas que inician en inglés */

/* Porfolio */
Route::get('/porfolio', function () {
    return view('porfolio.index');
})->defaults('locale', 'en')->name('porfolio');


/* Otras rutas */

/* Enviar Emails Porfolio - Homepage */
Route::post('/contact', function () {

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