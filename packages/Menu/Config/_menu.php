<?php 

return [
	'name' => trans('Menus'),
	'route' => route('admin.menu.get.list'),
	'sort' => 6,
	'active'=> 'menu',
	'icon' => 'fa fa-navicon',
	'middleware' => [],
	'group' => []
];