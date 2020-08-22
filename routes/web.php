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
Route::get('/calendar', 'BookingController@index')->name('calendar');
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/reports', 'ReportController@index')->name('reports');
Route::get('/users', 'ReportController@index')->name('users');
Route::get('/branch_settings', 'ReportController@index')->name('branch_settings');
Route::get('/company_settings', 'ReportController@index')->name('company_settings');
