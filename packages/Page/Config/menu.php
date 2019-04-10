<?php 

return [
	'name' => trans('Pages'),
	'route' => '',
	'sort' => 3,
	'active' => 'page',
	'icon' => 'fa fa-book',
	'middleware' => [],
	'group' => [
		'add-page' => [
            'name'  => trans('page::page.add_page'),
            'icon'  => null,
            'route' => route('admin.page.get.add'),
            'active'=> 'add-page',
            'middleware' => [],
        ],
        'list-page' => [
            'name'  => trans('page::page.list_page'),
            'icon'  => null,
            'route' => route('admin.page.get.list'),
            'active'=> 'list-page',
            'middleware' => [],
        ]
	]
];