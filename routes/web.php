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

Route::get('/backend', 'Auth\LoginController@showLoginForm')->name('backend.login');
Route::post('/dashboard', 'Auth\LoginController@login')->name('backend.login.submit');
Route::post('logout', 'Auth\LoginController@logout')->name('backend.logout');
Route::get('/dashboard', 'HomeController@index')->name('backend.dashboard');

Route::resource('projects', 'ProjectController', ['as' => 'backend']);


#frontend

Route::get('/project', 'ProjectController@home')->name('project');

Route::get('/contact_us', function () {
    return view('frontend/page/contact_us');
})->name('contact-us');

Route::get('/about_us', function () {
    return view('frontend/page/about_us');
})->name('about-us');
