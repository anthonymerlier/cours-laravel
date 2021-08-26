<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InsertedPhoneMail extends Mailable
{
    use Queueable, SerializesModels;

    public $arrayUser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $arrayUser)
    {
        $this->arrayUser = $arrayUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@monsite.fr')
                            ->subject("Un email qui confirme l'ajout d'un phone")
                            ->view('emails.phones.inserted');
    }
}
