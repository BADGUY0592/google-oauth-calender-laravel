<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/auth/callback', 'HomeController@oauth')->name('oauthCallback');
Route::get('/home/event/{eventid}', 'HomeController@destroy')->name('destroy');

Auth::routes();