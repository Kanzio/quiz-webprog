<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content.home');
});

Route::get('/detail', function () {
    return view('content.detail');
});

Route::get('/read', function () {
    return view('content.read');
});