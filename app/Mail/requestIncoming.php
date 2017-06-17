<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class requestIncoming extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * The user instance.
     *
     * @var User
     */

    public $user; 
    public $item_name;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $item_name) {
        $this->user = $user;
        $this->item_name = $item_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->subject('Inkomend verzoek')
        ->view('emails.requests.incoming', ["user" => $this->user, "item" => $this->item_name]);
    }
}
