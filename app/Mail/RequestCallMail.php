<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestCallMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The validated request data.
     *
     * @var array<string, mixed>
     */
    public array $data;

    /**
     * Create a new message instance.
     *
     * @param  array<string, mixed>  $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        $mail = $this->subject('Request Call Back');

        if (!empty($this->data['email'])) {
            $mail->replyTo($this->data['email'], $this->data['name'] ?? null);
        }

        return $mail->view('emails.contact', ['data' => $this->data]);
    }
}

