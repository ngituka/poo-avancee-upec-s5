<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return '<h1>Bienvenue dans mon Mini-CRM !</h1>';
});

Route::get('/contact', function () {
    return 'Contactez-nous';
});