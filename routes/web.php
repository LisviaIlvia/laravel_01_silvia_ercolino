<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/chi-siamo', function () {
    return view('chi-siamo');
});
Route::get('/cosa-facciamo', function () {
    return view('cosa-facciamo');
});
