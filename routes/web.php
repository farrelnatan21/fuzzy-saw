<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
