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

//admin
Route::get('admin/index','Admin\AdminController@index')->name('index');

//product
Route::get('admin/product/index','Admin\ProductController@index')->name('product.index');

//typeproduct
Route::get('admin/typeproduct/index','Admin\TypeproductController@index')->name('typeproduct.index');

//user
Route::get('admin/user/index','Admin\UserController@index')->name('user.index');

//background
Route::get('admin/background/index','Admin\BackgroundController@index')->name('background.index');

//content
Route::get('admin/content/index','Admin\ContentController@index')->name('content.index');

//homepage
Route::get('admin/homepage/index','Admin\HomepageController@index')->name('homepage.index');

//welcome
Route::get('/layouts/front_end/index', function () {
    return view('/layouts/front_end/index');
    });

Route::get('/layouts/front_end/menu', function () {
    return view('/layouts/front_end/menu');
    });

Route::get('/layouts/front_end/contact', function () {
    return view('/layouts/front_end/contact');
    });

Route::get('/layouts/front_end/login', function () {
    return view('/layouts/front_end/login');
    });

            


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
