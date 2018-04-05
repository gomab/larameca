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

/*
 * Route::get('/', function () {
    return view('welcome');
});
 */

Route::resource('/link', 'LinksController', ['only'=> ['create', 'store']]);

Route::get('/r/{link}', ['as' => 'link.show', 'uses' => 'LinksController@show'])->where('link', '[0-9]+');
//Route::get('/', 'LinksController@index');

//Route::post('/', 'LinksController@store');

//Route::get('/r/{id}', 'LinksController@show')->where('id', '[0-9]+');