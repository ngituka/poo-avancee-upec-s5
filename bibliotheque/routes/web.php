<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreControleur;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('livres', LivreControleur::class);
