<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validate the form data
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'email'      => 'required|email',
            'role'       => 'required|string',
            'message'    => 'required|string|max:2000',
        ]);

        // 2. Format the email content
        $emailContent = "
            You have a new contact message from your portfolio!\n\n
            Name: {$validated['first_name']} {$validated['last_name']}\n
            Email: {$validated['email']}\n
            Role: {$validated['role']}\n\n
            Message:\n
            {$validated['message']}
        ";

        // 3. Send the email using Laravel's raw mailer
        Mail::raw($emailContent, function ($mail) use ($validated) {
            $mail->to('pich.devkh@gmail.com')
                 ->subject('New Portfolio Contact from ' . $validated['first_name']);
        });

        // 4. Redirect back with a success message
        return redirect('/#contact')->with('success', 'Message sent successfully! I will get back to you soon.');
    }
}
