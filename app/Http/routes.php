<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

//Auth::loginUsingId(2); 直接指定user_id为2的用户已登录

Route::get('/home', 'HomeController@index');

//Route::get('/','SitesController@index');
Route::get('/','ArticlesController@index');
Route::Get('/hello','SitesController@hello');

Route::Get('/text','SitesController@text');


//Route::get('password/email', 'Auth\PasswordController@getEmail');//密码重置链接请求路由

//Route::post('password/email', 'Auth\PasswordController@postEmail');

//Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');// 密码重置路由

//Route::post('password/reset', 'Auth\PasswordController@postReset');


// 引导用户到新浪微博的登录授权页面
Route::get('auth/weibo', 'Auth\AuthController@redirectToProvider');
// 用户授权后新浪微博回调的页面
Route::get('auth/callback', 'Auth\AuthController@handleProviderCallback');

//Route::Get('/articles','ArticlesController@index');
//
//Route::Get('/articles/create','ArticlesController@create');
//
//Route::Get('/articles/{id}','ArticlesController@show');
//
//Route::Post('/articles','ArticlesController@store');

//文章编辑
//Route::Get('/articles/{id}/edit','ArticlesController@edit');
//Route::Post(xxxxxxxxx);
//总是要注册2个路由，一个get一个post，所以：
// php artisan route:list
//用Route::resource()方法

//Route::delete('/articles/delete','ArticlesController@delete');

Route::post('/articles/search','ArticlesController@search');
Route::get('/articles/search','ArticlesController@search');
Route::get('/articles/space/{user_id?}','ArticlesController@space');
Route::get('/articles/admin','ArticlesController@admin');
Route::resource('articles','ArticlesController');//注册ArticlesController下的所有路由

// 发送密码重置链接路由
//Route::get('password/email', 'Auth\PasswordController@getEmail');
//Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密码重置路由
//Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
//Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);