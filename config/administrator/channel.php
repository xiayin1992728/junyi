<?php

use App\Models\Channel;
return [
    'title'   => '渠道管理',
    'single'  => '渠道',
    'model'   => Channel::class,

    'permission'=> function()
    {
        return Auth::guard('admin')->user()->can('渠道管理');
    },


    // 对 CRUD 动作的单独权限控制，通过返回布尔值来控制权限。
    'action_permissions' => [
        // 控制『新建按钮』的显示
        'create' => function ($model) {
           return Auth::guard('admin')->user()->can('添加渠道');
        },
        // 允许更新
        'update' => function ($model) {
           return Auth::guard('admin')->user()->can('修改渠道');
        },
        // 不允许删除
        'delete' => function ($model) {
            return Auth::guard('admin')->user()->can('删除渠道');
        },
        // 允许查看
        'view' => function ($model) {
            return true;
        },
    ],

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'name' => [
            'title' => '渠道名称',
            'sortable' => false,
        ],
   
        'types' => [
            'title' => '结算方式',
            'sortable' => false,
        ],
        'phone' => [
            'title' => '电话',
            'output' => function ($value,$model) {
                return $model->admin->phone;
            }
        ],
        'company' => [
            'title' => '公司名称'
        ],
        'salesman' => [
            'title' => '渠道业务员',
            'output' => function ($value,$model) {
                return $model->admin->name;
            }
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
        'types' => [
            'title' => '结算方式',
            'type' => 'enum',
            'options' => [
                '支付宝' => '支付宝',
                '微信' => '微信',
                '其他' => '其他'
            ],
        ],
        'name' => [
            'title' => '名称',
            'type' => 'text',
        ],

        'admin' => [
            'title' => '业务员',
            'type' => 'relationship',
            'name_field' => 'name'
        ],
        'company' => [
            'title' => '公司名称',
            'type' => 'text',
        ],
        // 'admin' => [
        //     'type' => 'relationship',
        //     'name_field' => 'phone'
        // ],     'title' => '电话',
       
    ],

    'filters' => [
        'name' => [
            'title' => '名称',
        ],
        'saleman' => [
            'title' => '业务员',
        ]
    ],

    // 新建和编辑时的表单验证规则
    'rules' => [
        'name' => 'required|',
        'types' => 'required',
        //'salesman' => 'required',
        //'phone' => 'required',
        'company' => 'required|unique:channels,company',
    ],

    // 表单验证错误时定制错误消息
    'messages' => [
        'name.required' => '名称不能为空',
        'types.required' => '选择结算方式',
        //'salesman.required' => '业务员不能为空',
        //'phone.required' =>'电话不能为空',
        'company.required' => '公司名称不能为空',
        'company.unique' => '公司名称已存在'
    ],
];