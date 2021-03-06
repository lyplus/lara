<?php
// Route::get('/','HomesController@root')->name('root');
Route::get('/', 'HomeController@root')->name('home');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// 用户注册
Route::get('/users/add', 'UsersController@add')->name('users.add');
Route::post('/users/create', 'UsersController@create')->name('users.create');

//用户个人中心
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::patch('/users/{user}/update', 'UsersController@update')->name('users.update');

//用户修改头像
Route::post('/users/{user}/avatar', 'UsersController@avatar')->name('users.avatar');


//主题
Route::get('/topics/show', 'TopicsController@show')->name('topics.show');

Route::get('/topics/{topic}/add', 'TopicsController@add')->name('topics.add');
Route::post('/topics/{topic}/create', 'TopicsController@create')->name('topics.create');

Route::get('/topics/{topic}/edit', 'TopicsController@edit')->name('topics.edit');
Route::patch('/topics/{topic}/update', 'TopicsController@update')->name('topics.update');

//导航
Route::get('/navs/{nav}', 'NavsController@show')->name('navs.show');










































// Route::get('/','HomesController@root')->name('root');
