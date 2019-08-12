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
    //admin category
    Route::get('/category', 'admin\AdminController@category')->name('admin.category');
    Route::get('/category/add', 'admin\AdminController@categoryAdd')->name('admin.category.add');
    Route::post('/category/add', 'admin\AdminController@categoryAdd')->name('admin.category.post');

    //admin shg
    Route::get('/shg', 'admin\AdminController@shg')->name('admin.shg');
    Route::get('/shg/add', 'admin\AdminController@shgAdd')->name('admin.shg.add');
    Route::post('/shg/add', 'admin\AdminController@shgAdd')->name('admin.shg.post');

    //admin district
    Route::get('/district', 'admin\AdminController@district')->name('admin.district');
    Route::get('/district/add', 'admin\AdminController@districtAdd')->name('admin.district.add');
    Route::post('/district/add', 'admin\AdminController@districtAdd')->name('admin.district.post');
});
//User Route


  //Route::get('/usersregister','User\UserController@register')->name('usersregister');
//Route::get('registar_learner', 'FrountedControllers@registar_learner');
   // Route::post('signup_learner', 'FrountedControllers@signup_learner');
//
Route::prefix('shg')->group(function() {
    Route::get('/login', 'Auth\ShgLoginController@showLoginForm')->name('shg.login');
    Route::post('/logout', 'Auth\ShgLoginController@userLogout')->name('shg.logout');
    Route::post('/login', 'Auth\ShgLoginController@userLogin')->name('shg.login.submit');
    Route::get('/dashboard', 'admin\ShgController@index')->name('shg.dashboard');
    //products
    Route::get('/products', 'admin\ShgController@products')->name('shg.products');
    Route::get('/product/add', 'admin\ShgController@productsAdd')->name('shg.product.add');
    Route::post('/product/add', 'admin\ShgController@productsAdd')->name('shg.product.post');
});
Route::prefix('district')->group(function() {
    Route::get('/login', 'Auth\DistrictLoginController@showLoginForm')->name('district.login');
    Route::post('/logout', 'Auth\DistrictLoginController@userLogout')->name('district.logout');
    Route::post('/login', 'Auth\DistrictLoginController@userLogin')->name('district.login.submit');
    Route::get('/dashboard', 'admin\DistrictController@index')->name('district.dashboard');
});

