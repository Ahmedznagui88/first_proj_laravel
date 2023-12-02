<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name;
    public $email;
    public $user_message;

    public function __construct($name,$email,$user_message)
    {                                           ///////////
        $this->name = $name;
        $this->email = $email;
        $this->user_message = $user_message;
    }                                           ///////////

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope /* sta per busta gestisce tutte le info della mail */
    {
        return new Envelope(
            from: new Address('no-reply@unix.com', 'Unix '),
            subject: 'Grazie per averci contattato', /* mess visualizzato all'utente */
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content /* andra a definire html dell'utente  */
    {
        return new Content(
            view: 'mail.contact-mail', /* inserire il nome del file nella VIEW */
        );
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
