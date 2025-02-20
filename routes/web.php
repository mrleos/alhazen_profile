<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('Home/');
});

Route::get('Home/', [HomeController::class, 'index'])->name('home.index');
Route::get('Detail/{id}', [HomeController::class, 'detail'])->name('article.detail');
Route::post('Comment', [HomeController::class, 'comment'])->name('comment.post');

Route::get('info-ppdb',[PendaftaranController::class,'index'])->name('ppdb');

Route::get('detail-kelas/{id}', [HomeController::class, 'detailKelas'])->name('class.detail');
