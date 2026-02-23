<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('beranda');

Route::get('/tentang', function () {
    return view('about');
})->name('tentang');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/kontak', function () {
    return view('contact');
})->name('kontak');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
