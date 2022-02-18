<?php

namespace App\Listeners;

use App\Mail\CreateEmail;
use App\Events\ReceiveEmailEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReceiveEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ReceiveEmailEvent  $event
     * @return void
     */
    public function handle(ReceiveEmailEvent $event)
    {
        Mail::to($event->visitor_email)->send(new CreateEmail);
    }
}
