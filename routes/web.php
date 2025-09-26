<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/signin', function () {
    return view('pages.signin');
})->name('signin');

Route::get('/forgot_password', function () {
    return view('pages.forgot_password');
})->name('forgot_password');

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/cricket', function () {
    return view('pages.cricket');
})->name('cricket');

Route::get('/football', function () {
    return view('pages.football');
})->name('football');

Route::get('/tennis', function () {
    return view('pages.tennis');
})->name('tennis');

Route::get('/indian_card_games', function () {
    return view('pages.indian_card_games');
})->name('indian_card_games');

Route::get('/casino', function () {
    return view('pages.casino');
})->name('casino');

Route::get('/1X2_gaming', function () {
    return view('pages.1X2_gaming');
})->name('1X2_gaming');

Route::get('/ezugi', function () {
    return view('pages.ezugi');
})->name('ezugi');

Route::get('/supernova', function () {
    return view('pages.supernova');
})->name('supernova');

Route::get('/slot_casino', function () {
    return view('pages.slot_casino');
})->name('slot_casino');