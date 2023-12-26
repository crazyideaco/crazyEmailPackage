<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use CrazyEmailPackage\SendEmail\Services\SendMailService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class SendMailController extends Controller
{
    public function send_mail($mailData)
    {
        $send_mail_service = new SendMailService();
        $mailData['project_name'] = Config::get('app.name');
        $send_mail_service->send_mail($mailData);
    }
}
