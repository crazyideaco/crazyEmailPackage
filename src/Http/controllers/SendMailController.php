<?php

namespace CrazyEmailPackage\SendEmail\Http\Controllers;

use App\Http\Controllers\Controller;
use CrazyEmailPackage\SendEmail\Services\SendMailService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class SendMailController extends Controller
{
    
    /**
     * Send a mail using the provided mail data.
     *
     * @param array $mailData The data for sending the mail.
     * the required fields are sender_email, receiver_email, subject, body, logo
     * and we get the project_name from the .env app_name variable
     * @throws Some_Exception_Class Description of exception
     * @return JsonResponse The JSON response indicating the success of the operation.
     */
    public function send_mail($mailData)
    {
        $send_mail_service = new SendMailService();
        $mailData['project_name'] = Config::get('app.name');
        $send_mail_service->send_mail($mailData);
        return new JsonResponse(['success' => true]);
    }
}
