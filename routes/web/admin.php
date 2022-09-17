<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'day la trang admin';
    }); 
});