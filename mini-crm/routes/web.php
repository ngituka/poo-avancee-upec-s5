<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return '<h1>Bienvenue dans mon Mini-CRM !</h1>';
});

Route::get('/bonjour/{nom}', function ($nom) {
    return "Bonjour $nom !";
});

Route::get('/contact', function () {
    return 'Contactez-nous';
});

//7. exercice
Route::get('/produit/{nom}', function ($nom) {
    return "Vous consultez le produit : $nom.";
});