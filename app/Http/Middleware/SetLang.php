<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Obtiene el idioma predeterminado de la ruta, si existe
        $defaultLocale = $request->route()->defaults['locale'] ?? 'es';

        // Si hay un valor en sesión, se usa; si no, el predeterminado
        $locale = session('locale', $defaultLocale);

        // Establece el idioma para la aplicación
        App::setLocale($locale);

        // Compartir el idioma para el tag <html>
        view()->share('htmlLang', $locale);

        return $next($request);
    }
}
