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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::middleware(['auth'])->group(function () {
    Route::get('backend/create','BackendController@create');
});*/
Route::Auth();
Route::get('/index', function (){
    return view('index');
});
Route::resource('/feed', 'FeedController',['only'=>['index','store']]);
Route::resource('/backend', 'BackendController');
Route::resource('/user', 'UserController');

Route::get('/logout',function (){
    Auth::logout();
    return redirect('register');
});