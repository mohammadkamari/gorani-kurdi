<?php

use Illuminate\Support\Facades\Route;
use Modules\Singer\Http\Controllers\SingerController;

Route::prefix('singers')->name('singers.')->group(function () {
    Route::get('/', [SingerController::class, 'index'])->name('index');
    Route::post('/singer', [SingerController::class, 'store'])->name('store');
    Route::get('/{id}', [SingerController::class, 'show'])->name('show');
    Route::put('/{id}', [SingerController::class, 'update'])->name('update');
    Route::delete('/{id}', [SingerController::class, 'destroy'])->name('destroy');
});
