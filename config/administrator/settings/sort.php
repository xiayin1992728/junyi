<?php

$contol = ['开','关'];

return [
    'title' => '链接开关',

    // 访问权限判断
    'permission'=> function()
    {
        // 只允许站长管理站点配置
        return Auth::guard('admin')->user()->hasRole('超级管理员');
    },

    // 站点配置的表单
    'edit_fields' => [
        'loan' => [
            // 表单标题
            'title' => '第一个页面',

            // 表单条目类型
            'type' => 'enum',
            'options' => $contol,
        ],
        'verify' => [
            'title' => '第二个页面',
            'type' => 'enum',
            'options' => $contol,
        ],
        'feature' => [
            'title' => '第三个页面',
            'type' => 'enum',
            'options' =>$contol,
        ],
        'continue' => [
            'title' => '第四个页面',
            'type' => 'enum',
            'options' => $contol,
        ],
        'second' => [
            'title' => '第五个页面',
            'type' => 'enum',
            'options' => $contol,
        ],

        'find' => [
            'title' => '第六个页面',
            'type' => 'enum',
            'options' => $contol,
        ],

        'user' => [
            'title' => '第七个页面',
            'type' => 'enum',
            'options' => $contol,
        ],

    ],

    // 表单验证规则
    'rules' => [
 
    ],

    'messages' => [

    ],

    // 数据即将保持的触发的钩子，可以对用户提交的数据做修改
    'before_save' => function(&$data)
    {
        // // 为网站名称加上后缀，加上判断是为了防止多次添加
        // if (strpos($data['site_name'], 'Powered b') === false) {
        //     $data['site_name'] .= ' - Powered by ';
        // }
    },

    // 你可以自定义多个动作，每一个动作为设置页面底部的『其他操作』区块
    'actions' => [

        // // 清空缓存
        // 'clear_cache' => [
        //     'title' => '更新系统缓存',

        //     // 不同状态时页面的提醒
        //     'messages' => [
        //         'active' => '正在清空缓存...',
        //         'success' => '缓存已清空！',
        //         'error' => '清空缓存时出错！',
        //     ],

        //     // 动作执行代码，注意你可以通过修改 $data 参数更改配置信息
        //     'action' => function(&$data)
        //     {
        //         \Artisan::call('cache:clear');
        //         return true;
        //     }
        // ],
    ],
];