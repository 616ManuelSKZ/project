<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/musicas', function () {
    return view('musicas');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/about', function () {
    return view('about');
});
