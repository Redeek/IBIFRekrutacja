<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function contact(){
        return view('emails/contact');
    }

    public function sendEmail(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('mati.red@gmail.com')->send(new MailSender($data));

    return redirect()->back()->with('success', 'E-mail został wysłany.');

    }
}
