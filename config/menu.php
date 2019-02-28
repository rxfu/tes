<?php

return [
	[
		'title' => 'Dashboard',
		'icon' => 'dashboard',
		'children' => [
			[
				'title' => 'Dashboard v1',
				'action' => '#',
				'icon' => 'circle-o'
			],
			[
				'title' => 'Dashboard v2',
				'action' => '#',
				'icon' => 'circle-o'
			],
			[
				'title' => 'Dashboard v3',
				'action' => '#',
				'icon' => 'circle-o'
			],
		],
	],
	'系统管理',
	[
		'title' => '用户管理',
		'action' => 'user.list',
		'icon' => 'user'
	],
	'账户设置',
	[
		'title' => '基本信息',
		'action' => 'user.profile',
		'icon' => 'user'
	],
	[
		'title' => '修改密码',
		'action' => 'user.password',
		'icon' => 'lock'
	]
];