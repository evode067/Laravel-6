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
Route::get('h/', function () {
    return 'Hello World';
});
Route::get('n/', function () {
    return [1, 2, 3];
});

Route::get('home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});











Route::get('/', function () {
    return view('welcome');
});
//Route::get("insert","testing@index");
//Route::post("store","testing@store");
Route::get("form","teste@index");
Route::post('submit','teste@save');
Route::view("formlogin","login1");
Route::get('loginn','login1@index');
Route::get('login1','login1@admin');

Route::get('regular','login1@indexmenstrual');
Route::post('regular1','login1@menstruation');

// Route::post('regular','login1@indexmenstrual');
// Route::get('regular1','login1@menstruation');
Route::get('profile','userprofileController@showall');
Route::get('insert','HistoryController@index');
Route::post('store','HistoryController@store');











//peter
Route::get('insert2','ContactController@index');
Route::post('store1','ContactController@store');
Route::get('Register2','RegisterController@index');
Route::post('Register1','RegisterController@store');
Route::get('logn','ContactController@logn');
Route::post('login','ContactController@login');
Route::get('log','indexController@index');
Route::post('login1','login1@admin');
//peter
Route::get("showall", 'HistoryController@showall');
Route::get("edit/{name}","HistoryController@edit");
 Route::patch('edit/update/{id}', "HistoryController@update");
 Route::get("delete/{id}", "HistoryCrudController@destroy");
 Route::get("done","HistoryCrudController@done");
 Route::get('predict',"HistoryController@prediction");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get("showall", 'HistoryCrudController@showall');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
