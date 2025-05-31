<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/jasa-list', function () {
    return view('jasa-list');
})->name('jasa.list');

Route::get('/jasa-detail', function () {
    return view('jasa-detail');
})->name('jasa.detail');


Route::get('/landing', function () {
    return view('landing');
})->name('landing');
