<?php

use Illuminate\Support\Facades\Route;

phpinfo();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', function () {
    return ['message' => 'PONG'];
});
