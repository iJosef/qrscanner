<?php

namespace App\Repositories;

use App\Events\ReceiveEmailEvent;

class SendMailRepository
{
    public function send_mail($visitor_email)
    {
        event(new ReceiveEmailEvent($visitor_email));
    }
}
