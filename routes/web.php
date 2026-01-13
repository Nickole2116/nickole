<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request; 

use App\Http\Controllers\Page\ResumeController;

Route::get('/', [ResumeController::class, 'index'])->name('resume');
Route::get('/projects', [ResumeController::class, 'projects'])->name('projects');

