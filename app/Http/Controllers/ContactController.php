<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Mail::raw(
            "Name: {$data['name']}\nEmail: {$data['email']}\nSubject: {$data['subject']}\n\n{$data['message']}",
            function ($message) use ($data) {
                $message->to('Skilledge.com@gmail.com')
                    ->subject('Website Enquiry: ' . $data['subject'])
                    ->replyTo($data['email'], $data['name']);
            }
        );

        return back()->with('success', 'Thank you! Your message has been sent. We will get back to you shortly.');
    }
}
