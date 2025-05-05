<?php

use Illuminate\Support\Facades\Route;
use Modules\Singer\Http\Controllers\SingerController;

Route::prefix('v1')->group(function () {
    Route::apiResource('singers', SingerController::class)->names('singers');
});
