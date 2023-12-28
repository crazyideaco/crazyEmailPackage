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
    public function send_mail(Request $request)
    {
        $send_mail_service = new SendMailService();
        $mailData['project_name'] = Config::get('app.name');
        $mailData['sender_email'] = $request->input('sender_email');
        $mailData['receiver_email'] = $request->input('receiver_email');
        $mailData['subject'] = $request->input('subject');
        $mailData['body'] = $request->input('body');
        $send_mail_service->send_mail($mailData);
        return new JsonResponse(['success' => true]);
    }
}
