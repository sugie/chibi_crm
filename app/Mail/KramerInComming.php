<?php

namespace App\Mail;

use App\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KramerInComming extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Customer
     */
    public $kramer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Customer $kramer)
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
