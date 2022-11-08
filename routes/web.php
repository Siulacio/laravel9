<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/contacto', 'contact');
Route::view('/blog', 'blog');
Route::view('/about', 'about');

