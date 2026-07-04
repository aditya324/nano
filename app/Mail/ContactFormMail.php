<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $filePath;

    public function __construct($data, $filePath = null)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }

    public function build()
    {
        $mail = $this->subject('New Contact Form Enquiry - '.$this->data['source'])
            ->view('emails.contact');

        if (! empty($this->data['email'])) {
            $mail->replyTo($this->data['email'], $this->data['name'] ?? null);
        }

        if ($this->filePath) {
            $mail->attach(storage_path('app/public/' . $this->filePath));
        }

        return $mail;
    }
}
