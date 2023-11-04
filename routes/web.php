<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\BlogController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);
Route::post('/create', [PostController::class, 'create'])->name('job.create');

// Route::get('/blog', [BlogController::class, 'blog']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/contact', [ContactController::class, 'contact']);

// Route::get('/category', [CategoryController::class, 'category']);

// Route::post('/create-job', [NewpostController::class, 'create'])->name('job.create');