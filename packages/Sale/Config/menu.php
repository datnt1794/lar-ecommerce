<?php 

return [
    'name' => 'Sales',
    'route' => '',
    'sort' => 4,
    'active'=> 'sale',
    'icon' => 'fa fa-dollar bigfonts',
    'middleware' => [],
    'group' => [
        'sale-newlatest' => [
            'name'  => trans('Đơn hàng mới nhất'),
            'icon'  => null,
            'route' => '#',
            'active'=> 'posts',
            'middleware' => [],
        ],
        'sale-success' => [
            'name'  => trans('Đơn hàng đã xử lý'),
            'icon'  => null,
            'route' => '#',
            'active'=> 'categories',
            'middleware' => [],
        ],
        'sale-pending' => [
            'name'  => trans('Đơn hàng đang chờ'),
            'icon'  => null,
            'route' => '#',
            'active'=> 'tags',
            'middleware' => [],
        ]
    ]
];