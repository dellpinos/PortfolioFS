<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

/* Homepage */
Route::get('/', function () {
    return view('home.index');
});

/* Pages */
Route::get('/contact', function() {
    return view('home.pages.contact');
});

Route::get('/info', function() {
    return view('home.pages.tec_info');
});

// Route::get('/planning', function() {
//     return view('home.pages.planning');
// });

/* Works - Apps */
Route::get('/apps/ecommerce', function() {
    return view('home.apps.ecommerce');
});

Route::get('/apps/corporation', function() {
    return view('home.apps.corporation');
});

Route::get('/apps/landing', function() {
    return view('home.apps.landing');
});

Route::get('/apps/porfolio', function() {
    return view('home.apps.porfolio');
});

Route::get('/apps/management', function() {
    return view('home.apps.management');
});

Route::get('/apps/reservation', function() {
    return view('home.apps.reservation');
});

Route::get('/apps/blog', function() {
    return view('home.apps.blog');
});

Route::get('/apps/api', function() {
    return view('home.apps.api');
});

Route::get('/apps/industry', function() {
    return view('home.apps.industry');
});
// Fin Works - Apps

/* Porfolio */
Route::get('/porfolio', function () {
    $locale = session('locale', 'en'); // Obtener el locale de la sesión o 'en' por defecto
    App::setLocale($locale);
    return view('porfolio.index');
});

/* Enviar Email Porfolio */
Route::post('/', function () {
    return app()->call([SendEmailController::class, 'index']);
});

/* Cambiar Idioma Porfolio */
Route::get('/languages/{locale}', function ($locale) {
        // Guardar el idioma en la sesión
        session(['locale' => $locale]);

        // Establecer el idioma en la aplicación
        App::setLocale($locale);

        // Redirigir al usuario a la página anterior
        return redirect()->back();
})->name('home.language');