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
    session_start();
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('regis','registed');
Route::get('log','registed@loginuser');
Route::get('loginin','registed@loginsuccess');
Route::get('/Resetpassword','Resetpassword@index');
Route::get('/historyform','Historyform@index');    
Route::get('/createtree2','Createtree@index');
Route::get('sendmessage','registed@sendmessage');
Route::get('createtree','registed@createtree');
Route::get('destroymenber','registed@destroymenber');
Route::get('updateinfomenber','registed@updateinfomenber');

Route::get('/Account', function () {
    return view('Account');
});
Route::get('/AddRelationship','AddRelationship@index');
Route::get('/Savelocation','MapsController@index');
Route::get('inrelation','registed@relationformset');
Route::get('/Messenger','Messenger@index');

Route::get('createrelation','registed@relationformset');

Route::get('Accountbycheng', function () {
    return view('Accountbycheng');
});
Route::post('showmenber','registed@showmenber');
Route::get('checkcreate','registed@checkcreate');
Route::get('Messenger', function () {
    return view('Messenger');
});
Route::get('acceptorcancel','registed@acceptorcancel');
Route::get('index', function () {
    return view('index');
});



