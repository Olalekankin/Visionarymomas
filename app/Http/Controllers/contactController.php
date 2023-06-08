<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail; 

class contactController extends Controller
{
    public function contact()
    {
        return view('support');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message 
        ];

        Mail::to('hello@visionarymomasfreemium.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message has been sent successfully');
    }
}
