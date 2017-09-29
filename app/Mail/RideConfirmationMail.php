<?php

namespace App\Mail;

use App\Ride;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RideConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $ride, $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ride $ride, User $user)
    {
        $this->ride = $ride;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@shareride.net')
                    ->view('mails.booking-confirmation')
                    ->with('user', $this->user)
                    ->with('ride', $this->ride);
    }
}
