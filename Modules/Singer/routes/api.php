<?php

use Illuminate\Support\Facades\Route;
use Modules\Singer\Http\Controllers\SingerController;

Route::prefix('singers')->name('singers.')->group(function () {
    Route::post('/singer', [SingerController::class, 'store'])->name('singer');
});
