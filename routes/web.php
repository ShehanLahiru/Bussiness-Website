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

Route::get('/backend', 'Auth\LoginController@showLoginForm')->name('backend.login');
Route::post('', 'Auth\LoginController@login')->name('backend.login.submit');
Route::post('logout', 'Auth\LoginController@logout')->name('backend.logout');
Route::get('/home', 'HomeController@index')->name('backend.home');



Route::get('/', 'HomeController@home')->name('home');
Route::get('/project', 'ProjectController@home')->name('project');
Route::get('/', function () {
    return view('backend.auth.login');
});

Route::get('/contact_us', function () {
    return view('frontend/page/contact_us');
})->name('contact-us');

Route::get('/about_us', function () {
    return view('frontend/page/about_us');
})->name('about-us');
