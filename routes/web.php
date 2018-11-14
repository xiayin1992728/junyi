<?php

// 登录
Route::get('login','SessionController@loginPage')->name('login');

// 贷款
Route::get('loan','LoanController@loanPage')->name('loan');


