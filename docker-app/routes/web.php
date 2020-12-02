<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/ping', function () {
    return ['message' => 'PONG'];
});

Route::get('podcasts', function () {

    \App\Jobs\ProcessPodcast::dispatch();

    return ['status' => 'OK'];
});
