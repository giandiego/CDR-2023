<?php

use App\Http\Controllers\Api\V1\Admin\CdrApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Cdr
    Route::apiResource('cdrs', CdrApiController::class, ['only' => ['index', 'show', 'destroy']]);
});
