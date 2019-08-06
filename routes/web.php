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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
/*
menu
*/
Route::get('/menus', 'admin\MenuController@index')->name('menus');
/*
page
*/
Route::get('/pages', 'admin\PageController@index')->name('pages');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'admin\AdminController@index')->name('admin.dashboard');
});

Route::prefix('shg')->group(function() {
    Route::get('/login', 'Auth\ShgLoginController@showLoginForm')->name('shg.login');
    Route::post('/login', 'Auth\ShgLoginController@userLogin')->name('shg.login.submit');
    Route::get('/dashboard', 'admin\ShgController@index')->name('shg.dashboard');
});
Route::prefix('district')->group(function() {
    Route::get('/login', 'Auth\DistrictLoginController@showLoginForm')->name('district.login');
    Route::post('/login', 'Auth\DistrictLoginController@userLogin')->name('district.login.submit');
    Route::get('/dashboard', 'admin\DistrictController@index')->name('district.dashboard');
});

