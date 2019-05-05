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

// Route::get('/', function () {
//     return view('index');
// });	
// Route::get('login', function () {
//     return view('login');
// });
//Admin

//Route::get('/pages/index/{slug?}', 'BlogController@category')->name('pages.index');
//Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
});

Route::get('/','HomeController@index')->name("pages.index");

Route::get('/library','HomeController@library')->name("pages.library");
Route::get('/canteen','HomeController@canteen')->name("pages.canteen");

Route::get('/library','HomeController@library')->name("pages.library");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


