<?php

namespace CrazyEmailPackage\SendEmail\Http\controllers\Api;

use App\Http\Controllers\Controller;
use CrazyEmailPackage\SendEmail\Services\SendMailService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class SendMailApiController extends Controller
{
    public function __invoke()
    {
    }
    /**
     * Sends an email using the provided mail data and view path.
     *
     * @param array $mailData The data to be used in the email.
     * the required fields in the array are sender_email, receiver_email, subject, body, logo
     * @param string $view_path The path to the email template.
     * @throws Exception If an error occurs while sending the email.
     * @return JsonResponse The JSON response indicating the success of the email sending.
     */
    public function send_mail(array $mailData, string $view_path = "emails_templates.mail_notify")
    {
        $send_mail_service = new SendMailService();
        $mailData['project_name'] = Config::get('app.name');
        $send_mail_service->send_mail($mailData,$view_path);
        return new JsonResponse(['success' => true]);
    }
}
