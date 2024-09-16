<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;
use Illuminate\Contracts\Cache\Store;

Route::get('/', [DiaryController::class, 'index'])->name('home');
Route::get('/show/{id}', [DiaryController::class, 'show'])->name('show');
Route::get('/create', [DiaryController::class, 'create'])->name('create');
Route::post('/store', [DiaryController::class, 'store'])->name('store');
Route::get('{id}/edit', [DiaryController::class, 'edit'])->name('edit');
Route::put('{id}/update', [DiaryController::class, 'update'])->name('update');
Route::delete('{id}/delete', [DiaryController::class, 'destroy'])->name('delete');