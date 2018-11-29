<?php

use App\Models\Product;

return [
    'title'   => '产品管理',
    'single'  => '产品',
    'model'   => Product::class,

    'permission'=> function()
    {
        return Auth::guard('admin')->user()->can('产品管理');
    },

      // 对 CRUD 动作的单独权限控制，通过返回布尔值来控制权限。
    'action_permissions' => [
        // 控制『新建按钮』的显示
        'create' => function ($model) {
            return Auth::guard('admin')->user()->can('添加产品');
        },
        // 允许更新
        'update' => function ($model) {
           return Auth::guard('admin')->user()->can('修改产品');
       },
        // 不允许删除
       'delete' => function ($model) {
           return Auth::guard('admin')->user()->can('删除产品');
       },
        // 允许查看
       'view' => function ($model) {
        return true;
    },
],

'columns' => [
    'id' => [
        'title' => 'ID',
    ],
    'name' => [
        'title' => '名称'
    ],
    'maxs' => [
        'title' => '最大额度'
    ],
    'longtimes' => [
        'title' => '借款期限'
    ],
    'tag' => [
        'title' => '标签'
    ], 
    'logo' => [
        'title' => '产品logo',
        'output' => function($value,$model) {
            return '<img src="'.env('APP_URL').'/uploads/products/'.$model->logo.'">';
        }

    ],
    'link' => [
        'title' => '产品链接',
        'type' => 'text'
    ],
    'saleman' => [
        'title' => '业务员'
    ],
    'operation' => [
        'title'  => '管理',
        'output' => function ($value, $model) {
            return $value;
        },
        'sortable' => false,
    ],
],

'edit_fields' => [
    'name' => [
        'title' => '名称',
    ],
    'saleman' => [
        'title' => '业务员'
    ],
    'link' => [
        'title' => '链接',
        'type' => 'text' 
    ],
    'longtimes' => [
        'title' => '借款时间',
    ],
    'tag' => [
        'title' => '标签',
        'type' => 'text'
    ],
    'maxs' => [
        'title' => '最大额度',
        'type' => 'text',
    ],
    'logo' => [
        'title' =>'产品logo',
        'type' => 'image',
        'location' => public_path() . '/uploads/products/',
        'naming' => 'random',
        'length' => 20,
        'size_limit' => 2,
        'display_raw_value' => false,
        'sizes' => array(
            array(65, 57, 'crop', public_path() . '/uploads/products/', 100)
        )
    ],
],

'filters' => [
    'name' => [
        'title' => '产品',
    ]
],

    // 新建和编辑时的表单验证规则
'rules' => [
    'name' => 'required|max:30|unique:products,name',
    'saleman' => 'required'
],

    // 表单验证错误时定制错误消息
'messages' => [
    'name.required' => '产品不能为空',
    'name.unique' => '产品已存在',
    'saleman.required' => '业务员不能为空'
],
];