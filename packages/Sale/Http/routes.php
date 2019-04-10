<?php

/*Trang quản trị - /admin */
Route::middleware(['admin'])->prefix(config('ttsoft.cms_path'))->group(function () {
    Route::prefix('sale')->group(function () {
    });
});
