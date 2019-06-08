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

//prikaz pojedinacnih strana
Route::get('/', "FrontEndController@index")->name("home");
Route::get('/shop',"FrontEndController@shop")->name("shop");
Route::get('/login', "FrontEndController@login")->name("getLogin");
Route::get('/contactUs',"FrontEndController@contactUs")->name("contactUs");
Route::get('/author',"FrontEndController@author")->name("author");
Route::get('/posts/{id}','FrontEndController@posts')->name('posts');

//rute za logovanje i registraciju
Route::post('/login', "AuthController@login")->name("login");
Route::post('/registration', "AuthController@registration")->name("registration");
Route::get('/logout',"AuthController@logout")->name("logout");
Route::get('/activateUser/{token}',"AuthController@activateUser")->name("activateUser");
Route::post('/contact',"AuthController@contact")->name("contacUs");


//ruta za crud nad tabelama
Route::resource('admin/users','admin\usersController')->middleware('admin');
Route::resource('admin/menu','admin\MenuController')->middleware('admin');
Route::resource('admin/brands','admin\BrandsController')->middleware('admin');
Route::resource('admin/categories','admin\CategoriesController')->middleware('admin');
Route::resource('admin/posts','admin\PostsController')->middleware('admin');
Route::resource('admin/images','admin\ImagesController')->middleware('admin');
//rute za akcije korisnika
Route::get('admin/actions','admin\ActionsController@index')->name('getActions')->middleware('admin');
//dohvatanje analitics strane
Route::get('/admin',"admin\AnaliticsController@admin")->name("admin");

//rute za dohvatanje pojedinih stvati za ajax u admin panelu
Route::get('api/users','ApiController@getAllUsers');
Route::get('api/menus','ApiController@getAllMenus');
Route::get('api/brands','ApiController@getAllBrands');
Route::get('api/categories','ApiController@getAllCategories');
Route::get('api/posts','ApiController@getAllPosts');
Route::get('api/images','ApiController@getAllImages');
Route::get('api/filters','ApiController@filtering')->name('filters');
Route::get('api/filtersDate','ApiController@fileteringDate')->name('filtersDate');

//rute za korpu
Route::get('/add-to-cart/{id}','CartController@getAddToCart')->name('addToCart')->middleware('user');
Route::get('/cart',"CartController@cart")->name("cart")->middleware('user');
Route::get('/deleteFromCart/{id}',"CartController@deleteFromCart")->name("deleteFromCart")->middleware('user');
Route::post('/checkout', "CartController@checkout")->name("checkout");

