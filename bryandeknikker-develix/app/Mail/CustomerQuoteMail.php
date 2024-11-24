<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerQuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quote_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quote_data)
    {
        $this->quote_data = $quote_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Uw offerte aanvraag bij Develix')
            ->view('emails.customer_quote');
    }
}
