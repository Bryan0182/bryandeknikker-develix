<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quote_data;
    public $pdf;

    /**
     * Create a new message instance.
     *
     * @param array $quote_data
     * @param string $pdf
     */
    public function __construct($quote_data, $pdf)
    {
        $this->quote_data = $quote_data;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nieuwe offerte aanvraag')
            ->view('emails.quote')
            ->attachData($this->pdf, 'offerte.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
