<?php

return [
	'navigation' => [
		[
			'title' => '首页',
			'url' => '/'
		],
		[
			'title' => '联系我们',
		]
	],
	'sidebar' => [
		[
			'title' => 'Dashboard',
			'icon' => 'dashboard',
			'children' => [
				[
					'title' => 'Dashboard v1',
				],
				[
					'title' => 'Dashboard v2',
				],
				[
					'title' => 'Dashboard v3',
				],
			],
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
		]
	]
];