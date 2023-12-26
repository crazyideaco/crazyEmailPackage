<?php

namespace CrazyEmailPackage\SendEmail\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    public $view_path;

    /**
     * Create a new message instance.
     */
    public function __construct($mailData,$view_path)
    {
        $this->mailData = $mailData;
        $this->view_path = $view_path;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->mailData['subject']
        );
    }

    public function build()
    {
        return $this->view($this->view_path)->with(['mailData' => $this->mailData]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
