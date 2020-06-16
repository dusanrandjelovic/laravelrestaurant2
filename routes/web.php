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

//osnovne strane
Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/menu', 'PagesController@getMenu');

Route::get('/gallery', 'PagesController@getGallery');

Route::get('/contact', 'PagesController@getContact');
Route::get('/reservation', 'PagesController@getReservation');

// ruta za logovanje obicnih korisnika
Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// user rezervacija i porudzbina
Route::post('/userreservation/submit', 'DashboardController@reservationSubmit');
Route::get('/user-reservations', 'DashboardController@getUserReservations');

Route::post('/usercart/submit', 'DashboardController@orderSubmit');
Route::get('/user-orders', 'DashboardController@getUserOrders');

// recepti
Route::get('/recipes', 'RecipesController@index');
Route::resource('recipes', 'RecipesController');
Route::get('/allrecipes', 'RecipesController@allRecipes');

// shop
Route::resource('product', 'ProductsController');
Route::get('products', 'ProductsController@index')->name('shop');
Route::get('/search', 'ProductsController@search');
Route::get('cart', 'ProductsController@cart');
Route::get('checkout', 'ProductsController@checkout');

Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('update-cart', 'ProductsController@update');
Route::post('remove-from-cart', 'ProductsController@remove');

Route::post('/cart/submit', 'OrdersController@store'); 

// kontakt forma
Route::resource('messages', 'MessagesController');
Route::post('/contact/submit', 'MessagesController@submit');
Route::get('/messages', 'MessagesController@getMessages');

// vesti
Route::get('/news', 'BlogsController@index');
Route::resource('news', 'BlogsController');

// komentari na vesti
Route::resource('blogcomments', 'BlogcommentsController');
Route::post('blogcomments/{blog_id}', ['uses' => 'BlogcommentsController@store', 'as' => 'comments.store']);

// rezervisanje
Route::get('/reservations', 'ReservationController@index');
Route::post('/reservation/submit', 'ReservationController@submit');

// admin panel
Route::get('/users', 'AdminController@getUsers');
Route::get('/orders', 'AdminController@getOrders');
Route::get('/all-user-orders', 'AdminController@getUserOrders');
Route::get('/all-user-reservations', 'ReservationController@getUserReservations');
// admin crud na proizvode
Route::get('/admin-products', 'AdminProductsController@index');
Route::resource('admin-products', 'AdminProductsController');
// admin recepti
Route::resource('admin-recipes', 'AdminRecipesController');
Route::get('/admin-recipes', 'AdminRecipesController@index');

//admin
Route::get('/admin', 'AdminController@index')->name('admin.dashboard'); // imenovanje rute
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register', 'Auth\AdminRegisterController@create')->name('admin.register.submit');
