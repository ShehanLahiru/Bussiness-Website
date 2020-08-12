<?php

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
Route::get('/', 'HomeController@home')->name('home');
Route::get('/project', 'ProjectController@home')->name('project');
;

Route::get('/contact_us', function () {
    return view('frontend/page/contact_us');
})->name('contact-us');

Route::get('/about_us', function () {
    return view('frontend/page/about_us');
})->name('about-us');
