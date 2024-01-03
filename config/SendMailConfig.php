<?php

return [

    'view_path' => "emails_templates.mail_notify",
    'mailData' => [
        'project_name' => env('APP_NAME'),
        'logo' => asset('assets/media/logo.png'),
        'sender_email' => env('MAIL_FROM_ADDRESS', "mostafa.m.hashem.1@gmail.com"),
    ],

];
