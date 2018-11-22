<?php

use App\Models\User;

return [
	// 页面标题
	'title' => '管理员',

	// 模型单数
	'single' => '管理',

	// 数据模型，数据 CURD
	'model' => User::class,

	// 设置访问权限
	'permision' => function()
	{
		return Auth::user()->can('manage_users');
	},

	// 字段数据表格渲染
	'columns' => [
		'id',
		'name' => [
			'title' => '名称',
			'sortable' => false,
		],

		'phone' => [
			'title' => '手机',
		],

		'operation' => [
			'title' => '管理',
			'sortable' => false,
		],
	],

	//  模型表单设置
	'edit_fields' => [
		'name' => [
			'title' => '用户名',
		],
		'phone' => [
			'title' => '手机',
		],
		'password' => [
			'title' => '密码',
			// 表单使用 input 类型 password
			'type' => 'password',
		],
		'roles' => [
			'title' => '角色',
			// 表单使用 input 类型 password
			'type' => 'relationship',
			 // 关联模型的字段，用来做关联显示
			'name_field' => 'name',
		],
	],

	// 数据过滤设置
	'filters' => [
		'id' => [
			'title' => 'id',
		],
		'name' => [
			'title' => '名称',
		],
		'phone' => [
			'title' => '手机'
		],
	],

];