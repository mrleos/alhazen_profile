<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('Home');
});

Route::get('Home', [HomeController::class, 'index'])->name('home.index');