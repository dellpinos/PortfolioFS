<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/brand', function () {
    return response()->view('api/brand')
        ->header('Content-Type', 'text/html')
        ->header('Access-Control-Allow-Origin', '*')
        ->header('X-Content-Usage', 'This resource is intended to be public. Massive use is not recommended.')
        ->header('Content-Security-Policy', "default-src 'self'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src https://fonts.gstatic.com; img-src 'self'; frame-ancestors 'none'; script-src 'none';")
        ->header('Cache-Control', 'public, max-age=600, must-revalidate');
})->middleware('throttle:3,1');

Route::get('/brand-notxt', function () {
    return response()->view('api/brand-notxt')
        ->header('Content-Type', 'text/html')
        ->header('Access-Control-Allow-Origin', '*')
        ->header('X-Content-Usage', 'This resource is intended to be public. Massive use is not recommended.')
        ->header('Content-Security-Policy', "default-src 'self'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src https://fonts.gstatic.com; img-src 'self'; frame-ancestors 'none'; script-src 'none';")
        ->header('Cache-Control', 'public, max-age=600, must-revalidate');
})->middleware('throttle:3,1');

Route::get('/brand-nobg', function () {
    return response()->view('api/brand-nobg')
        ->header('Content-Type', 'text/html')
        ->header('Access-Control-Allow-Origin', '*')
        ->header('X-Content-Usage', 'This resource is intended to be public. Massive use is not recommended.')
        ->header('Content-Security-Policy', "default-src 'self'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src https://fonts.gstatic.com; img-src 'self'; frame-ancestors 'none'; script-src 'none';")
        ->header('Cache-Control', 'public, max-age=600, must-revalidate');
})->middleware('throttle:3,1');

Route::get('/simple-brand', function () {
    return response()->view('api/simple-brand')
        ->header('Content-Type', 'text/html')
        ->header('Access-Control-Allow-Origin', '*')
        ->header('X-Content-Usage', 'This resource is intended to be public. Massive use is not recommended.')
        ->header('Content-Security-Policy', "default-src 'self'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src https://fonts.gstatic.com; img-src 'self'; frame-ancestors 'none'; script-src 'none';")
        ->header('Cache-Control', 'public, max-age=600, must-revalidate');
})->middleware('throttle:3,1');