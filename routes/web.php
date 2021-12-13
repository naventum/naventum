<?php

use App\Http\Controllers\HomeController;
use Naventum\Framework\Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
