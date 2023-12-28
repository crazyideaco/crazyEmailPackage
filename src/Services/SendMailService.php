<?php

namespace CrazyEmailPackage\SendEmail\Services;


use CrazyEmailPackage\SendEmail\Mail\SendMail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;




class SendMailService
{

    public function send_mail(array $mailData, string $view_path)
    {
        // Update the MAIL_FROM_ADDRESS dynamically
        
        Config::set('mail.from.address', $mailData['sender_email']);


        Mail::to($mailData['receiver_email'])->send(new SendMail( mailData:$mailData,  view_path:$view_path));
    }
}
