<?php

use App\Http\Controllers\ComicsPageController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'index'])->name('home');

Route::resource('comics', ComicsPageController::class);
