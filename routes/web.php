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
Route::get('logout', 'DashBoard\DashBoardController@logout')->name('logout_dashboard');
Route::group(['prefix' => 'dashboard','middleware' => ['auth','admin']],function(){

    Route::get('/','DashBoard\DashBoardController@index')->name('index_dashboard');
   
    
});

Route::group(['prefix' => 'aluno','middleware' => ['auth','aluno']],function(){

    Route::get('/','DashBoard\Aluno\DashBoardController@index')->name('aluno_dashboard');
   
    
});

