<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/contacts/all', 'App\Http\Controllers\ContactsController@getList')->name('contact-list');
Route::post('/contacts/submit', 'App\Http\Controllers\ContactsController@submit')->name('contact-form');

Route::post('/form/callback', 'App\Http\Controllers\CallbackController@submit')->name('callback-form');
