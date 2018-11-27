<?php

use App\Models\Spread;

return [
    'title'   => '推广管理',
    'single'  => '推广',
    'model'   => Spread::class,

    'permission' => function () {
        return Auth::guard('admin')->user()->can('推广管理');
    },

    // 对 CRUD 动作的单独权限控制，通过返回布尔值来控制权限。
    'action_permissions' => [
        // 控制『新建按钮』的显示
        'create' => function ($model) {
            return Auth::guard('admin')->user()->can('添加推广');
        },
        // 允许更新
        'update' => function ($model) {
            return Auth::guard('admin')->user()->can('修改推广');
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

    'columns' => [
        'user' => [
            'title' => '推广员',
            'output' => function ($value,$model) {
                 return $model->channel->admin->name;
            }
        ],
        'product' => [
            'title'    => '产品',
            'output' => function ($value,$model) {
               return $model->product->name;
            }
        ],
        'channel' => [
            'title' => '渠道',
            'output' =>function ($value,$model) {
                return $model->channel->name;
            }
        ],
        'link' => [
            'title' => '推广链接'
        ],
        'change' => [
            'title' => '开关'
        ],
        'operation' => [
            'title'    => '管理',
            'sortable' => false,
        ],
    ],

    'edit_fields' => [
        'change' => [
            'title' => '开关',
            'type' => 'enum',
            'options' => [
                '开','关'
            ]
        ],
        'product' => [
            'title' => '产品',
            'type' => 'relationship',
        ],
        'channel' => [
            'title' => '渠道',
            'type' => 'relationship'
        ],
    ],

    'filters' => [
        'channel' => [
            'title' => '渠道',
        ],
        'product' => [
            'title' => '产品'
        ]
    ],
];