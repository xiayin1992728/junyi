<?php

use App\Models\User;

return [
	// 页面标题
	'title' => '前台用户',

	// 模型单数
	'single' => '用户',

	// 数据模型，数据 CURD
	'model' => User::class,

	// 设置访问权限
	'permission'=> function()
    {
        return Auth::guard('admin')->user()->can('前台用户');
    },

	  // 对 CRUD 动作的单独权限控制，通过返回布尔值来控制权限。
	'action_permissions' => [
        // 控制『新建按钮』的显示
		'create' => function ($model) 
		{
			return isSuper();
		},
        // 允许更新
		'update' => function ($model) {
			return isSuper();
		},
        // 不允许删除
		'delete' => function ($model) {
			return isSuper();
		},
        // 允许查看
		'view' => function ($model) {
			return true;
		},
	],

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