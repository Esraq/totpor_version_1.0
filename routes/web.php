<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;


use App\Http\Controllers\RegisteredController;

use App\Http\Controllers\SiteController;





Route::get('/', [SiteController::class, 'site'])->name('/');

Route::get('/how_it_works', [SiteController::class, 'about'])->name('/how_it_works');


Route::get('/categories', [SiteController::class, 'category'])->name('/categories');



Route::get('/tasks', [SiteController::class, 'tasks'])->name('/tasks');



Route::get('/signup', [SiteController::class, 'signup'])->name('/signup');