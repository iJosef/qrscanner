<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.create_email')
                    ->subject('Joseph Emeruwa')
                    ->attach(public_path('document/Receipt_for_John Doe.pdf'), [
                        'as' => 'name.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
