<?php

return [
    'navigation' => [
        'admin' => [
            [
                'title' => '首页',
                'url' => '/admin'
            ],
            [
                'title' => '联系我们',
            ],
        ],
        'student' => [
            [
                'title' => '首页',
                'url' => '/student'
            ],
            [
                'title' => '联系我们',
            ],
        ],
    ],
    'sidebar' => [
        'admin' =>[
            'home' => [
                'dashboard' => [
                    'title' => '使用说明',
                    'icon' => 'dashboard',
                    'url' => '/',
                ],
            ],
            'setting' => [
                'title' => '系统管理',
                [
                    'title' => '用户管理',
                    'icon' => 'users'
                ],
            ],
            'user' => [
                'title' => '账户设置',
                [
                    'title' => '基本信息',
                    'icon' => 'user'
                ],
                'password' => [
                    'title' => '修改密码',
                    'icon' => 'lock',
                    'route' => 'admin.user.password',
                ],
            ],
        ],
        'student' => [
            'home' => [
                'title' => '使用说明',
                'icon' => 'dashboard',
                'url' => '/'
            ],
            '账户设置',
            [
                'title' => '基本信息',
                'icon' => 'user'
            ],
            [
                'title' => '修改密码',
                'icon' => 'lock'
            ],
        ],
    ],
];
