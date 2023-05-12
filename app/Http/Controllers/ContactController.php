<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ContactMail;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Contracts\Mail\Mailer;
use Mail;

class ContactController extends Controller
{
    
    public function contact(){
        return view('contact-us');
    }
    public function sendEmail(Request $request){
        $details=[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
     Mail::to('mariamabdelaziz21@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been send succesfully!');
    }
}

