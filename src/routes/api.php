<?php

use CrazyEmailPackage\SendEmail\Http\controllers\api\SendMailApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/')->group(function () {
    Route::post('/crazy_email', SendMailApiController::class);
});
