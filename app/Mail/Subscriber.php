<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Subscriber extends Mailable
{
    use Queueable, SerializesModels;

    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Post Available',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.subscriber',
        );
    }
}