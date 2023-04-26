<?php

use App\Http\Controllers\Api\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('patients', PatientController::class);
});