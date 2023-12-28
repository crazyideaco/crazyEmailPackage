# send-email
this package to facilitate the creation of the email and send it 


> composer require crazy-email-package/send-email

>php artisan vendor:publish --provider="CrazyEmailPackage\SendEmail\CrazySendMailServiceProvider"

```json
Route::any('/crazy_email', [SendMailController::class, 'send_mail'])->name('crazy_email.send_mail');


```

this is the route for sending the email 