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

//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('foo', function () {
    return 'Hello World!';
});
Route::group(['middleware' => 'auth', 'prefix'=>'JobDescription'], function () {
    Route::get('/', 'JobDescriptionController@index')->name('index');
    Route::get('/create', 'JobDescriptionController@create')->name('create');
});


Route::group(['middleware' => 'auth', 'prefix' => 'Requirement'], function () {
    Route::get('/','RequirementController@index')->name('índex');
    Route::get('/create','RequirementController@create')->name('create');
    Route::get('/store', 'RequirementController@store')->name('requirement.store');
    
});

