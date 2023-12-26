<?php

namespace CrazyEmailPackage\SendEmail\Services;


use CrazyEmailPackage\SendEmail\Mail\SendMail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;




class SendMailService
{

    public function send_mail($mailData)
    {
        // Update the MAIL_FROM_ADDRESS dynamically
        
        Config::set('mail.from.address', $mailData['sender_email']);


        Mail::to($mailData['receiver_email'])->send(new SendMail($mailData, 'emails_templates.mail_notify'));
    }
}
