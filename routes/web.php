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

//<-- Admin page -->
Route::group(['prefix'=>'admin', 'namespace' => 'Admin', "middleware" => "auth"],function(){

    Route::get('/','dashboardController@index');
    Route::get('/profile','dashboardController@profile')->name("admin.profile");
    Route::post('profile/update/{id}','dashboardController@update')->name("admin.profile.update");

//    category
    Route::get('category','categoriesController@index')->name("admin.category");
    Route::get('category/update/{id?}','categoriesController@update')->name("admin.category.update");
    Route::post('category/updateProcess/{id}','categoriesController@updateProcess')->name("admin.category.updateProcess");
    Route::get('category/delete/{id}','categoriesController@destroy')->name("admin.category.delete");
});
Route::get('/', function () {
    return view('welcome');
});

//request password to continue
Route::get('/user', 'HomeController@user');
//->middleware('password.confirm');
//Route::get('/user','HomeController@user');
Route::get('/dangnhap','HomeController@dangnhap');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



