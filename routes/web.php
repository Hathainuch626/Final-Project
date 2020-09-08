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
Route::resource('regis','registed');
Route::get('log','registed@loginuser');
Route::get('loginin','registed@loginsuccess');
Route::get('/historyform','Historyform@index');    
Route::get('/createtree','Createtree@index');
Route::get('/Account', function () {
    return view('Account');
});
Route::get('/AddRelationship','AddRelationship@index');
Route::get('/Maps','MapsController@index');
Route::get('inrelation','registed@relationformset');