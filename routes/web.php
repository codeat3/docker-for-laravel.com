<?php

use App\Models\DockerResource;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'resources' => DockerResource::all(),
    ]);
});
