<?php

/*Trang quản trị - /admin */
Route::middleware(['admin'])->prefix(config('ttsoft.cms_path'))->group(function () {
    Route::prefix('theme')->group(function () {
    	Route::get('/','ThemeController@index')->name('admin.theme.get.index');
    	Route::get('/active/{id}','ThemeController@activeTheme')->name('admin.theme.get.activeTheme');
    });
});
