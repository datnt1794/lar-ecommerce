<?php 

return [
	'name' => trans('Acl Permissions'),
	'route' => '',
	'sort' => 23,
	'active' => 'user',
	'icon' => 'fa fa-user bigfonts',
	'middleware' => [],
	'group' => [
		'users' => [
            'name'  => 'Users',
            'icon'  => null,
            'route' => route('users.index'),
            'active'=> 'users',
            'middleware' => [], //'permission:user-view'
        ],
        'roles' => [
            'name'  => 'Roles',
            'icon'  => null,
            'route' => route('roles.index'),
            'active'=> 'roles',
            'middleware' => [],
        ],
	]
];