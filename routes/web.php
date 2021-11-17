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

Route::get(
    '/contacts/all/{id}',
    'App\Http\Controllers\ContactsController@getMessage'
)->name('contact-single');
Route::get(
    '/contacts/all',
    'App\Http\Controllers\ContactsController@getList'
)->name('contact-list');
Route::post(
    '/contacts/submit',
    'App\Http\Controllers\ContactsController@submit'
)->name('contact-form');
Route::get(
    '/contacts/update/{id}',
    'App\Http\Controllers\ContactsController@updateMessage'
)->name('contact-update');
Route::post(
    '/contacts/update/{id}',
    'App\Http\Controllers\ContactsController@updateMessageSubmit'
)->name('contact-update-submit');
Route::get(
    '/contacts/delete/{id}',
    'App\Http\Controllers\ContactsController@deleteMessage'
)->name('contact-delete');

Route::post(
    '/form/callback',
    'App\Http\Controllers\CallbackController@submit'
)->name('callback-form');

Route::get(
    '/news',
    'App\Http\Controllers\NewsController@getList'
)->name('news');
Route::get('/news/add', function () {
    return view('news-add');
})->name('news-add');
Route::get(
    '/news/{id}',
    'App\Http\Controllers\NewsController@getNews'
)->name('news-detail');
Route::post(
    '/news/add/submit',
    'App\Http\Controllers\NewsController@submit'
)->name('news-add-submit');
Route::get(
    '/news/edit/{id}',
    'App\Http\Controllers\NewsController@updateNews'
)->name('news-edit');
Route::post(
    '/news/edit/{id}',
    'App\Http\Controllers\NewsController@updateNewsSubmit'
)->name('news-edit-submit');
Route::get(
    '/news/delete/{id}',
    'App\Http\Controllers\NewsController@deleteNews'
)->name('news-delete');
