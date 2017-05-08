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

Route::get('accueil', function () {
    return view('accueil');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('service', function () {
    return view('service');
});

Route::get('vragen', function (){
    return view('vragen');
});

Route::get('login1', function (){
    return view('login1');
});
Route::get('cvs','CvController@index' );
Route::get('cvs/create','CvController@create' );
Route::post('cvs','CvController@store' );
Route::get('cvs/{id}/edit','CvController@edit' );
Route::put('cvs/{id}','CvController@update' );
Route::delete('cvs/{id}','CvController@destroy' );

Route::get('cvs/make','CvController@make');
route::get('msgreturn',function (){
    return view('cv.msgreturn');

});


Auth::routes();

Route::get('/home', 'HomeController@index');
