<?php

return [
	'admin' => [
		'navigation' => [
			[
				'title' => '首页',
				'url' => '/admin'
			],
			[
				'title' => '联系我们',
			]
		],
		'sidebar' => [
			[
				'title' => '使用说明',
				'icon' => 'dashboard',
				'url' => '/'
			],
			'系统管理',
			[
				'title' => '用户管理',
				'icon' => 'users'
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
	'student' => [
		'navigation' => [
			[
				'title' => '首页',
				'url' => '/student'
			],
			[
				'title' => '联系我们',
			]
		],
		'sidebar' => [
			[
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
	]
];