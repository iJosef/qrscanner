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
                    ->subject('Software Developer Looking For A New Challenge - Joseph Emeruwa\'s CV')
                    ->attach(public_path('document/Joseph_Emeruwa_CV.pdf'), [
                        'as' => 'Joseph_Emeruwa_CV.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
