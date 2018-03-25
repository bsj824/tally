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
/*Route::middleware(['auth'])->group(function () {
    Route::get('backend/create','BackendController@create');

});*/
Route::Auth();

Route::resource('/feed', 'FeedController',['only'=>['index','store']]);
Route::resource('/backend', 'BackendController',['only'=>['index','store','create']]);
Route::resource('/user', 'UserController',['except'=>'destroy','update','show']);
Route::get('/index', function () {
    return view('index');//
});
Route::get('logout',function (){
    Auth::logout();
    return view('index');
});
Route::get('show','IndexController@show');
Route::post('store','IndexController@store');