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
use App\task;

Route::get('/',function(){

return view('dash',['name' => '@ToDO L!$T']);

})->name('house');


Route::get('/task','ditto@index');

Route::get('/task/{task}','ditto@task');
 
 /////////////// NEW PROJECT ///////////////////

 
Route::get('/post','postController@index');


Route::post('/insert','postController@insert');
 
Route::get('/list/{list}','postController@delete');

Route::get('/edit','postController@edit');


Route::get('/edit/{edit}','postController@edd');

Route::post('/modify','postController@modify');

Route::get('/create','postController@create');
 
Route::post('/form','postController@store');

 Route::get('/search','postController@search');

 Route::post('/input','postController@game');
 
 Route::get('/list','postController@list');

 Route::get('/check/{title}','postController@check');
     
//Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register','registrationController@create');

Route::post('/register','registrationController@store');

Route::get('/ram','registrationController@show');

Route::get('/log','sessionController@log');

Route::get('/login','sessionController@create');

Route::post('/login','sessionController@show');





