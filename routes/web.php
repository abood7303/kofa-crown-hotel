<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/cafe', function () {
    return view('cafe');
});

Route::get('/booking', function () {
    return view('booking');
});
