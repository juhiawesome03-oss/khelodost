<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/signin', function () {
    return view('pages.signin');
})->name('signin');

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