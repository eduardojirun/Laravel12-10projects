<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('projects');
});

Route::resource('projects', ProjectController::class);
