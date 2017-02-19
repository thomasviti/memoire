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

Route::get('salut', function(){
	return 'salut les gens';
});

Route::get('salut/{slug}-{id}', ['as' => 'salut', function($slug, $id){
	return route('salut', ['slug' => 'Tezzzst', 'id' => 54]);
}])->where('name', '[a-z0-9\-]+')->where('id', '[0-9]+');

Route::group(['prefix' => 'admin', 'middleware' => 'ip'], function(){
	Route::get('salut', function(){
		return 'toto';
	});
});