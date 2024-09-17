<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/page1', function () {
    return view('pages.page1');
});

Route::get('/page2', function () {
    return view('pages.page2');
});

Route::get('/page3', function () {
    return view('pages.page3');
});



