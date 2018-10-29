<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteChild extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $parentcode,$parentemail,$parentname;

    public function __construct($parentcode,$parentemail,$parentname)
    {
         $this->parentcode = $parentcode;
         $this->parentemail = $parentemail;
         $this->parentname = $parentname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kickstart@career.com')
                ->view('emails.parent.invitechild');

    }
}
