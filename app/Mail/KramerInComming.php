<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KramerInComming extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var \App\Models\Customer
     */
    public $kramer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\App\Models\Customer $kramer)
    {
        $this->kramer = $kramer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('kramer-in-comming');
    }
}
