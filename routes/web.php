<?php

    // 后台登录
Route::get('login','AdminController@adminLogin')->name('admin.login')->middleware('guest');
Route::post('adminLogin','AdminController@adminStore')->name('admin.login')->middleware('guest');
Route::delete('logout','AdminController@destroy')->name('logout')->middleware('auth');

// 前台登录
Route::get('/{num?}','HomeController@index')->where('num', '[\d]{18}')->name('login')->middleware('guest');
Route::post('login','HomeController@store')->name('login')->middleware('guest');
Route::post('code','HomeController@message')->name('code')->middleware('guest');

// 贷款
Route::get('loan','LoanController@loanPage')->name('loan')->middleware('auth');
Route::post('loan','LoanController@store')->name('loan')->middleware('auth');

// 验证
Route::get('verify','VerifyController@verifyPage')->name('verify')->middleware('auth');
Route::post('verify','VerifyController@store')->name('verify')->middleware('auth');

// 特征
Route::get('feature','FeatureController@featurePage')->name('feature')->middleware('auth');

// 继续借
Route::get('continue','ContinueController@continuePage')->name('continue')->middleware('auth');

// 秒借
Route::get('second','SecondController@secondPage')->name('second')->middleware('auth');

// 发现
Route::get('find','FindController@findPage')->name('find')->middleware('auth');

// 我的
Route::get('user','UserController@userPage')->name('user')->middleware('auth');
Route::delete('homeLogout','UserController@destroy')->name('homeLogout')->middleware('auth');

