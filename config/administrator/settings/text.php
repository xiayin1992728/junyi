<?php

return [
    'title' => '文字设置',

    // 访问权限判断
    'permission'=> function()
    {
        // 只允许站长管理站点配置
        return Auth::guard('admin')->user()->can('站点管理');
    },

    // 站点配置的表单
    'edit_fields' => [
        'tuijian' => [
            'type' => 'text',
            'title' => '第一行',
        ],
        'kefu' => [
            'type' => 'text',
            'title' => '第二行',
        ],
        'notice' => [
            'title' => '注意',
            'type' => 'textarea',
            'description' => '换行请使用半角状态的 ,'
        ],
    ],

    // 表单验证规则
    'rules' => [
        'notice' => 'required|max:200',
    ],

    'messages' => [
        'notice.required' => '请填写内容',
    ],

    // 数据即将保持的触发的钩子，可以对用户提交的数据做修改
    'before_save' => function(&$data)
    {

    },
];