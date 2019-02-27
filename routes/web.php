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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/hello', function () {
    return "test";
});
// Route::get('/about', 'PagesController@about');
//get parameters from url 
Route::get('/users/{id}/{name}',function($name,$id){
    return 'This is user ' .$name. 'and an id of' .$id;
});
Route::get('/about',function(){
    return view('pages.about');
});

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
