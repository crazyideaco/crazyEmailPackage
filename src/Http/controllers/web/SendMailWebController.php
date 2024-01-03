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
    public function __invoke(array $mailData )
    {
        $view_path = config('SendMailConfig.view_path');
        $send_mail_service = new SendMailService();
        $send_mail_service->send_mail($mailData,$view_path);
        // return new JsonResponse(['success' => true]);
        return response()->json(['success' => true]);
    }
    
}
