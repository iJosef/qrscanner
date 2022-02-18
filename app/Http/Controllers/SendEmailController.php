<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\CreateEmail;
use Illuminate\Http\Request;
use App\Events\ReceiveEmailEvent;
use App\Repositories\SendMailRepository;

class SendEmailController extends Controller
{
    public $send_mail_repository;

    public function __construct(SendMailRepository $send_mail_repository)
    {
        $this->send_mail_repository = $send_mail_repository;
    }


    public function send_mail_to_visitor(Request $request)
    {
        $visitor_email = $request->email;

        $this->send_mail_repository->send_mail($visitor_email);

        if (count(Mail::failures()) > 0) {
                $data = [
                    'status' => 'error',
                    'message' => 'An error occurred'
                ];

                return response()->json($data, 400);
        }

        $data = [
            'status' => 'success',
            'message' => 'Mail sent successfully'
        ];

        return response()->json($data, 200);

    }
}
