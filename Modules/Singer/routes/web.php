<?php

use Illuminate\Support\Facades\Route;
use Modules\Singer\Http\Controllers\SingerController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('singers', SingerController::class)->names('singer');
});
