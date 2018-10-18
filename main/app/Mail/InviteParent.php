<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteParent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $childcode,$childemail,$childname;

    public function __construct($childcode,$childemail,$childname)
    {
         $this->childcode = $childcode;
         $this->childemail = $childemail;
         $this->childname = $childname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kickstart@career.com')
                ->view('emails.student.inviteparent');

    }
}
