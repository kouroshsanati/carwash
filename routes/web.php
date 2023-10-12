<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\ServiceController::class, 'home'])->name('home');

Route::post('/services', [\App\Http\Controllers\ServiceController::class, 'store'])->name('services.store');

Route::get('/services/create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('services.create');

Route::get('/rename', [\App\Http\Controllers\ServiceController::class, 'rename'])->name('rename');

Route::post('/edit', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');

Route::patch('/services/{service}', [\App\Http\Controllers\ServiceController::class, 'update'])->name('services.update');

Route::delete('/services/{service}', [\App\Http\Controllers\ServiceController::class, 'destroy'])->name('services.destroy');



/*Route::resource('services', \App\Http\Controllers\ServiceController::class);

Route::get('/rename', [\App\Http\Controllers\ServiceController::class, 'rename'])->name('rename');

Route::post('/edit', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');*/
