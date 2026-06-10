<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

ROUTE::get('/about', function () {
    return view('about');
});
