<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCreated extends Mailable
{
    use Queueable, SerializesModels;

        /**
     * The order instance.
     *
     * @var \App\Models\Order
     */

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public User $user, public $valid)
    {
        //
    }

    public function build(){
        return $this->markdown('emails.registeredUser');
    }


}
