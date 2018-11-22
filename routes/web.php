<?php

// 后台登录
Route::get('admin/login','AdminController@index')->name('admin.login');

// 登录
Route::get('/','HomeController@index')->name('login');
Route::post('login','HomeController@store')->name('login');
Route::post('code','HomeController@message')->name('code');

// 贷款
Route::get('loan','LoanController@loanPage')->name('loan');
Route::post('loan','LoanController@store')->name('loan');

// 验证
Route::get('verify','VerifyController@verifyPage')->name('verify');
Route::post('verify','VerifyController@store')->name('verify');

// 特征
Route::get('feature','FeatureController@featurePage')->name('feature');

// 继续借
Route::get('continue','ContinueController@continuePage')->name('continue');

// 秒借
Route::get('second','SecondController@secondPage')->name('second');

// 发现
Route::get('find','FindController@findPage')->name('find');

// 我的
Route::get('user','UserController@userPage')->name('user');

