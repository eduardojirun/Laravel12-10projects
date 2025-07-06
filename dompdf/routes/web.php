<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfGeneratorController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/resume', [PdfGeneratorController::class, 'index']);
