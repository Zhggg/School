<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Frontend.pages.home');
});

Route::get('/about', function () {
    return view('Frontend.pages.about');
});

Route::get('/gallery', function () {
    return view('Frontend.pages.gallery');
});

Route::get('/events', function () {
    return view('Frontend.pages.events');
});

Route::get('/facilities', function() {
    return view('Frontend.pages.facilities');
});

Route::get('/career', function(){
    return view('Frontend.topmenu.career');
});

Route::get('/blog', function(){
    return view('Frontend.topmenu.blog');
});

Route::get('/contact', function(){
    return view('Frontend.topmenu.contact');
});

Route::get('/result', function(){
    return view('Frontend.topmenu.result');
});