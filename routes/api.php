<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CntController;

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('cnt', CntController::class)->only('show');
});