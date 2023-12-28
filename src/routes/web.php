<?php

use CrazyEmailPackage\SendEmail\Http\controllers\SendMailController;
// use Fatoorahpayment\Gatewayintegration\Http\controllers\MyFatoorahApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/crazy_email', [SendMailController::class, 'send_mail'])->name('crazy_email.send_mail');

