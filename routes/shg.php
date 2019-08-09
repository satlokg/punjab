<?php
Route::prefix('shg')->group(function() {
    Route::get('/login', 'Auth\ShgLoginController@showLoginForm')->name('shg.login');
    Route::post('/login', 'Auth\ShgLoginController@login')->name('shg.login.submit');
    Route::get('/dashboard', 'admin\ShgController@index')->name('shg.dashboard');
});