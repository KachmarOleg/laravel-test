<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "Post ID: {$id}, Name: {$name}";
// });

Route::get('/', [BasicController::class, 'index'])->name('home');

Route::get('/about', [BasicController::class, 'about'])->name('about');

Route::get('/contact', [BasicController::class, 'contact'])->name('contact');

Route::post('/contact', [BasicController::class, 'submit'])->name('contact.post');