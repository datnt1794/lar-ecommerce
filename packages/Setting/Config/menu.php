<?php 

return [
	'name' => trans('setting::setting.module_name'),
	'sort' => 24,
	'route' => '',
	'active' => 'setting',
	'icon' => 'fa fa-cog',
	'middleware' => [],
	'group' => [
		//Khai báo chương trình đào tạo gồm các thông tin cơ bản
		'config' => [
            'name'  => trans('setting::setting.module_name'),
            'icon'  => null,
            'route' => route('admin.setting.get.index'),
            'active'=> 'config',
            'middleware' => [],
        ],

        //Khai báo lớp học theo chương trình đạo tạo, gồm các thông tin
        'branch' => [
            'name'  => trans('Chi nhánh'),
            'icon'  => null,
            'route' => route('admin.branch.get.list'),
            'active'=> 'branch',
            'middleware' => [],
        ],
	]
];