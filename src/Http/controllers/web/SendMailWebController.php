<?php

namespace CrazyEmailPackage\SendEmail\Http\controllers\web;

use App\Http\Controllers\Controller;
use CrazyEmailPackage\SendEmail\Services\SendMailService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class SendMailWebController extends Controller
{
    /**
     * Invokes the function with the given parameters.
     *
     * @param array $mailData The array of mail data.
     * the required fields in the array are sender_email, receiver_email, subject, body, logo
     * @param string $view_path The path to the view template. Defaults to "emails_templates.mail_notify".
     * @throws \Some_Exception_Class Description of the exception that can be thrown.
     * @return \Illuminate\Http\JsonResponse The JSON response with the success status.
     */
    public function __invoke(array $mailData, string $view_path = "emails_templates.mail_notify")
    {
        $send_mail_service = new SendMailService();
        $mailData['project_name'] = Config::get('app.name');
        $send_mail_service->send_mail($mailData,$view_path);
        return new JsonResponse(['success' => true]);
    }
    
}
