<?php

// 登录
Route::get('login','SessionController@loginPage')->name('login');

// 贷款
Route::get('loan','LoanController@loanPage')->name('loan');

// 验证
Route::get('verify','VerifyController@verifyPage')->name('verify');

// 特征
Route::get('feature','FeatureController@featurePage')->name('feature');

// 继续借
Route::get('continue','ContinueController@continuePage')->name('continue');


