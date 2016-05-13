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

//Auth::loginUsingId(2); ֱ��ָ��user_idΪ2���û��ѵ�¼

Route::get('/home', 'HomeController@index');

//Route::get('/','SitesController@index');
Route::get('/','ArticlesController@index');
Route::Get('/hello','SitesController@hello');

Route::Get('/text','SitesController@text');


//Route::get('password/email', 'Auth\PasswordController@getEmail');//����������������·��

//Route::post('password/email', 'Auth\PasswordController@postEmail');

//Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');// ��������·��

//Route::post('password/reset', 'Auth\PasswordController@postReset');


// �����û�������΢���ĵ�¼��Ȩҳ��
Route::get('auth/weibo', 'Auth\AuthController@redirectToProvider');
// �û���Ȩ������΢���ص���ҳ��
Route::get('auth/callback', 'Auth\AuthController@handleProviderCallback');

//Route::Get('/articles','ArticlesController@index');
//
//Route::Get('/articles/create','ArticlesController@create');
//
//Route::Get('/articles/{id}','ArticlesController@show');
//
//Route::Post('/articles','ArticlesController@store');

//���±༭
//Route::Get('/articles/{id}/edit','ArticlesController@edit');
//Route::Post(xxxxxxxxx);
//����Ҫע��2��·�ɣ�һ��getһ��post�����ԣ�
// php artisan route:list
//��Route::resource()����

//Route::delete('/articles/delete','ArticlesController@delete');

Route::post('/articles/search','ArticlesController@search');
Route::get('/articles/search','ArticlesController@search');
Route::get('/articles/space/{user_id?}','ArticlesController@space');
Route::get('/articles/admin','ArticlesController@admin');
Route::resource('articles','ArticlesController');//ע��ArticlesController�µ�����·��

// ����������������·��
//Route::get('password/email', 'Auth\PasswordController@getEmail');
//Route::post('password/email', 'Auth\PasswordController@postEmail');

// ��������·��
//Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
//Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);