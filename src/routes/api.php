<?php

use CrazyEmailPackage\SendEmail\Http\controllers\SendMailApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/')->group(function () {
    Route::post('/crazy_email', [SendMailApiController::class, 'send_mail']);
});
