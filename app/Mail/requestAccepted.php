<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class requestAccepted extends Mailable {
    use Queueable, SerializesModels;

    public $receiver_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($receiver_name) {
        $this->receiver_name = $receiver_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->subject('Verzoek geaccepteerd')
        ->view('emails.requests.accepted',["receiver_name" => $this->receiver_name]);
    }
}
