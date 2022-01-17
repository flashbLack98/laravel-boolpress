<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->middleware('auth')
    ->group(function(){

        Route::get('/', 'HomeController@index')->name('home');
    });

Route::get("{any?}", function() {
    return view("guests.home");
    })->where("any", ".*");

