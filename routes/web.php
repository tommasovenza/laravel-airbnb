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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// la route che reindirizza agli appartamenti, se non si è utenti loggati
Route::get('/apartments', 'ApartmentController@index')->name('guest.apartments');

Route::get('apartments/{$apartment}', 'ApartmentController@show')->name('guest.aparments');

// route per utenti loggati
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function() {
        Route::resource('/apartments', 'ApartmentController')
        ->name('admin', 'apartments');
}); 
