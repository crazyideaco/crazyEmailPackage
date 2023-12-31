<?php

namespace CrazyEmailPackage\SendEmail\Http\controllers\api;

use App\Http\Controllers\Controller;
use CrazyEmailPackage\SendEmail\Services\SendMailService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class SendMailApiController extends Controller
{
    /**
     * Executes the PHP function and sends an email notification.
     *
     * @param Request $request the HTTP request object
     *  $mailData The data to be used in the email
     * the required fields in the array are sender_email, receiver_email, subject, body, logo
     * @param string $view_path the path to the email template
     * @throws Some_Exception_Class if an error occurs while sending the email
     * @return JsonResponse the JSON response indicating the success of the operation
     */

    public function __invoke(Request $request, string $view_path = "emails_templates.mail_notify")
    {
        $send_mail_service = new SendMailService();
        $mailData = $request->only(['sender_email', 'receiver_email', 'subject', 'body', 'logo']);
        $mailData['project_name'] = Config::get('app.name');
        $send_mail_service->send_mail($mailData,$view_path);
        return new JsonResponse(['success' => true]);
    }
    
    
}
