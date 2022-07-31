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
Route::get('/about', 'admin\PageController@about')->name('about');
Route::get('/contact', 'admin\PageController@contact')->name('contact');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'admin\AdminController@index')->name('admin.dashboard');
    //admin category
    Route::get('/category', 'admin\AdminController@category')->name('admin.category');
    Route::get('/category/edit/{id}', 'admin\AdminController@categoryEdit')->name('admin.category.edit');
    Route::get('/category/add', 'admin\AdminController@categoryAdd')->name('admin.category.add');
    Route::post('/category/add', 'admin\AdminController@categoryAdd')->name('admin.category.post');

    //admin shg
    Route::get('/shg', 'admin\AdminController@shg')->name('admin.shg');
    Route::get('/shg/edit/{id}', 'admin\AdminController@shgEdit')->name('admin.shg.edit');
    Route::get('/shg/add', 'admin\AdminController@shgAdd')->name('admin.shg.add');
    Route::post('/shg/add', 'admin\AdminController@shgAdd')->name('admin.shg.post');
    Route::get('/shg/list/{district_id}', 'admin\AdminController@shgList')->name('admin.shg.list');
    Route::get('/user/list', 'admin\AdminController@userList')->name('admin.user.list');
    Route::get('/user/order/{user_id}', 'admin\AdminController@userOrders')->name('admin.user.order');

    //admin district
    Route::get('/district', 'admin\AdminController@district')->name('admin.district');
    Route::get('/district/edit/{id}', 'admin\AdminController@districtEdit')->name('admin.district.edit');
    Route::get('/add/district', 'admin\AdminController@districtAdd')->name('admin.district.add');
    Route::post('/add/district', 'admin\AdminController@districtAdd')->name('admin.district.post');

    //admin sub category
    Route::get('/subcategory/{cat}', 'admin\AdminController@subcategory')->name('admin.subcategory');
     Route::get('/subcategory/edit/{id}/{cat}', 'admin\AdminController@subcategoryEdit')->name('admin.subcategory.edit');
    Route::get('/add/subcategory/{cat}', 'admin\AdminController@subcategoryAdd')->name('admin.subcategory.add');
    Route::post('/add/subcategory', 'admin\AdminController@subcategoryAdd')->name('admin.subcategory.post');
    //admin banner
    Route::get('/banner', 'admin\AdminController@banner')->name('admin.banner');
    Route::get('/banner/add', 'admin\AdminController@bannerAdd')->name('admin.banner.add');
    Route::post('/banner/add', 'admin\AdminController@bannerAdd')->name('admin.banner.post');

    //admin advertisment
    Route::get('/advertisment', 'admin\AdminController@advertisment')->name('admin.advertisment');
    Route::get('/advertisment/add', 'admin\AdminController@advertismentAdd')->name('admin.advertisment.add');
    Route::post('/advertisment/add', 'admin\AdminController@advertismentAdd')->name('admin.advertisment.post');

    //admin collection
    Route::get('/collection', 'admin\AdminController@callection')->name('admin.collection');
    Route::get('/collection/add', 'admin\AdminController@callectionAdd')->name('admin.collection.add');
    Route::post('/collection/add', 'admin\AdminController@callectionAdd')->name('admin.collection.post');




    Route::get('/ajax/{action}/{stat}', 'admin\AdminController@ajax');
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
    Route::get('/product/edit/{id}', 'admin\ShgController@productsEdit')->name('shg.product.edit');
    //orders
    Route::get('/order/today', 'User\OrderController@today')->name('shg.today.order');
    Route::get('/order/month', 'User\OrderController@month')->name('shg.month.order');
    Route::get('/order/all', 'User\OrderController@order')->name('shg.order');
    Route::get('/order/delivered', 'User\OrderController@delivered')->name('shg.delivered.order');
    Route::get('/order/pending', 'User\OrderController@pending')->name('shg.pending.order');
    Route::get('/order/cancel', 'User\OrderController@cancel')->name('shg.cancel.oreder');

    Route::get('/product/status/{id}/{status}', 'User\OrderController@productStatus')->name('product.status');
});
Route::prefix('district')->group(function() {
    Route::get('/login', 'Auth\DistrictLoginController@showLoginForm')->name('district.login');
    Route::post('/logout', 'Auth\DistrictLoginController@userLogout')->name('district.logout');
    Route::post('/login', 'Auth\DistrictLoginController@userLogin')->name('district.login.submit');
    Route::get('/dashboard', 'admin\DistrictController@index')->name('district.dashboard');

    Route::get('/shg', 'admin\DistrictController@shg')->name('district.shg');
    Route::get('/shg/add', 'admin\DistrictController@shgAdd')->name('district.shg.add');
    Route::get('/shg/edit/{id}', 'admin\DistrictController@shgEdit')->name('district.shg.edit');
    Route::post('/shg/add', 'admin\DistrictController@shgAdd')->name('district.shg.post');
    //village
    Route::resource('village', 'admin\VillageController');

    //block
    Route::resource('block', 'admin\BlockController');
    Route::get('/ajax/{action}/{stat}', 'admin\DistrictController@ajax');
});



//user

Route::get('/old', 'User\WelcomeController@index')->name('welcome');
Route::get('/', 'User\WelcomeController@index1')->name('welcome1');

Route::get('/districts/{d}', 'User\WelcomeController@districts')->name('districts');
Route::get('/category/{c}', 'User\WelcomeController@category')->name('category');
Route::get('/shg-store/{c}', 'User\WelcomeController@shgstore')->name('shg.store');
Route::get('/product_detail/{id}', 'User\ProductController@productDetail')->name('product.detail');

Route::get('/checkout', 'User\ProductController@checkout')->name('checkout')->middleware('auth');
Route::post('/final-checkout', 'User\ProductController@checkout')->name('final.checkout')->middleware('auth');
Route::get('/viewcart', 'User\ProductController@viewcart')->name('viewcart');
Route::get('/order', 'User\ProductController@order')->name('order');

Route::get('/account', 'User\UserController@index')->name('account');




//cart
Route::prefix('cart')->group(function() {
    Route::get('/index', 'cart\CartController@index')->name('cart.index');
    Route::get('/add/{id}', 'cart\CartController@add')->name('cart.add');
    Route::get('/remove/{id}', 'cart\CartController@remove')->name('cart.remove');
    Route::get('/clear', 'cart\CartController@clear')->name('cart.clear');
    Route::post('/updateCart', 'cart\CartController@updateCart')->name('cart.update');
});
