<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function send(array $details ) {

        Mail::to($details['email'])->send(new SendMail( 'email.user',$details));

    }
}
