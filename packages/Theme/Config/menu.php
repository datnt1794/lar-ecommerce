<?php 
return [
    'name' => 'Themes',
    'route' => '',
    'sort' => 6,
    'active'=> 'themes',
    'icon' => 'fa fa-paint-brush',
    'middleware' => [],
    'group' => [
        'theme' => [
            'name'  => trans('Theme'),
            'icon'  => null,
            'route' => route('admin.theme.get.index'),
            'active'=> 'theme',
            'middleware' => [],
        ],
        'menu' => [
            'name'  => trans('Menu'),
            'icon'  => null,
            'route' => route('admin.menu.get.list'),
            'active'=> 'menu',
            'middleware' => [],
        ],
        'widgets' => [
            'name'  => trans('Widget'),
            'icon'  => null,
            'route' => '#',
            'active'=> 'widgets',
            'middleware' => [],
        ],
        'shortcode' => [
            'name'  => trans('Shortcode'),
            'icon'  => null,
            'route' => '#',
            'active'=> 'shortcode',
            'middleware' => [],
        ]
    ]
];