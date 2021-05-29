<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $sub;
     public $mes;
     public $info;
    public function __construct($subject, $messege, $warn)
    {
        $this->sub=$subject;
        $this->mes=$messege;
        $this->info=$warn;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_subject=$this->sub;
        $e_messege=$this->mes;
        $e_info=$this->info;

        return $this->view('co_admin.sendemail',compact("e_messege","e_info"))->subject($e_subject);
    }
}
