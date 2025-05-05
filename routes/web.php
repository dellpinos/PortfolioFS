<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;


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

/* Porfolio */
Route::get('/porfolio', function () {
    $locale = session('locale', 'en'); // Obtener el locale de la sesión o 'en' por defecto
    App::setLocale($locale);
    return view('porfolio.index');
})->name('porfolio');

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
