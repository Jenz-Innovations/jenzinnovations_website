<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
{
    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    // Create a new email message
    $mail = new Message($message);
    $mail->from($email, $name);
    $mail->to('iamjesse75@gmail.com');
    $mail->subject('New Message from Website');
    $mail->body($message);

    // Send the email
    \Illuminate\Support\Facades\Mail::send($mail);

    // Redirect back to the form with a success message
    return redirect()->back()->with('success', 'Email sent successfully!');
}
}



