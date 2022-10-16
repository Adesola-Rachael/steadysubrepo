<?php

namespace App\Http\Controllers\frontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact_form(Request $request)
    {

        $data = array('name' => $request->name, 'user_email' => $request->email, 'user_subject' => $request->subject, 'user_message' => $request->message);

        // Mail::send('mail.contact', $data, function($message) {
        //     $message->to('fasanyafemi@gmail.com', '')->subject
        //        ('User request from steadyhub');
        //     $message->from('steadysub@veenodetech.com','Steadyhub');
        //  });
        return 'sent';
    }
}
