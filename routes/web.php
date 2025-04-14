<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

// Vista principal
Route::get('/porfolio', function () {
    $locale = session('locale', 'en'); // Obtener el locale de la sesión o 'en' por defecto
    App::setLocale($locale);
    return view('porfolio.index');
});

// Enviar Email
Route::post('/', function () {
    return app()->call([SendEmailController::class, 'index']);
});

// Idioma
Route::get('/languages/{locale}', function ($locale) {
        // Guardar el idioma en la sesión
        session(['locale' => $locale]);

        // Establecer el idioma en la aplicación
        App::setLocale($locale);

        // Redirigir al usuario a la página anterior
        return redirect()->back();
})->name('home.language');

// Nueva vista
Route::get('/', function () {
    return view('home.index');
});