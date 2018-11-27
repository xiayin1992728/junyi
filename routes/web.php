<?php

// 后台登录
Route::get('login','AdminController@adminLogin')->name('admin.login');
Route::post('adminLogin','AdminController@adminStore')->name('admin.login');
Route::get('logout','AdminController@destroy')->name('logout');



// 前台登录
Route::get('/{num?}','HomeController@index')->where('num', '[\d]{18}')->name('login');
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

