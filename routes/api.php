<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CntController;

Route::group([
    'middleware' => 'api_version',
    'prefix' => '{apiVersion}'
], function () {

    Route::apiResource('cnt', CntController::class)->only('show');

});