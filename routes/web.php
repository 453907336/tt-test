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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Admin','prefix' => 'admin'],function($router){

    $router->get('index', 'AdminController@index');
    $router->get('login', 'LoginController@login')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');

    Route::get('/code/{tmp}', 'LoginController@code');


    Route::get('/user','AdminController@user');
    Route::get('/user/create','AdminController@create');

});

