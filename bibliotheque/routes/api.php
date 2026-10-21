<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Livre;

Route::get('/livres', function () {
    return Livre::all();
});
