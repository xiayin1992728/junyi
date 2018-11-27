<?php

use App\Models\CountPeople;

$number = date('YmdHis',time()).random_int(1000, 9999);
$link = env('APP_URL').'/'.$number;

return [
    'title'   => '推广统计',
    'single'  => '推广统计',
    'model'   => CountPeople::class,

    'permission'=> function()
    {
        return Auth::guard('admin')->user()->can('推广统计');
    },

    // 对 CRUD 动作的单独权限控制，通过返回布尔值来控制权限。
    'action_permissions' => [
        // 控制『新建按钮』的显示
        'create' => function ($model) {
           return false;
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

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'people' => [
            'title' => '注册人数',  
        ],
   
        'product' => [
            'title' => '产品名称',
            'output' => function ($value,$model) {
                return $model->spread->product->name;
            },
        ],

        'channel' => [
            'title' => '渠道名称',
            'output' => function ($value,$model) {
                return $model->spread->channel->name;
            }
        ],
      
        'create_time' => [
            'title' => '创建时间',
        ],
    ],

    'edit_fields' => [
        'people' => [
            'title' => '注册人数',
        ],
    ],

    'filters' => [
        'people' => [
            'title' => '注册人数',
        ],

    ],
];