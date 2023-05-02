<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

//JALUR UTAMA
route::get('/', [DashboardController::class, 'index'])->name('dashboard');
route::get('/create', [DashboardController::class, 'create'])->name('create');
Route::post('/store', [DashboardController::class, 'store'])->name('store');
Route::get('/destroy/{id}', [DashboardController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [DashboardController::class, 'update'])->name('update');
