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

// Homepage
// Add Home Funcationlity
Route::get('yHome', 'yHomeController@home')->name('yHome');
// Route::get('home', 'HomeController@home')->name('home');

// Route::get('/', 'yPagesController@index'); // localhost:8000/
// Route::get('/about', 'YPagesController@about'); // localhost:8000/about
// Route::get('/contact', 'YPagesController@contact'); // localhost:8000/contact

// Create Register Page Routes
Route::get('yRegister', 'Auth\yRegisterController@register');
Route::post('yRegister', 'Auth\yRegisterController@store')->name('yRegister');


// Add Login Routes
Route::get('yLogin', 'Auth\yLoginController@login')->name('yLogin');
Route::post('yLogin', 'Auth\yLoginController@authenticate');
Route::get('yLogout', 'Auth\yLoginController@logout')->name('yLogout');

// Create Forget Password Routes
Route::get('yForget-password', 'Auth\yForgotPasswordController@getEmail');
Route::post('yForget-password', 'Auth\yForgotPasswordController@postEmail');

// Create Reset Password Routes
Route::get('yReset/{token}', 'Auth\yResetPasswordController@getPassword');
Route::post('yReset', 'Auth\yResetPasswordController@updatePassword');


