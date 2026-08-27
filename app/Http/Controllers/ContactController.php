<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; // Make sure to import this!

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validate the form data (kept your original rules)
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'email'      => 'required|email',
            'role'       => 'required|string',
            'message'    => 'required|string|max:2000',
        ]);

        // 2. Send the email using the queued Mailable
        Mail::to('pich.devkh@gmail.com')->send(new ContactMail($validated));

        // 3. Redirect back with a success message
        return redirect('/#contact')->with('success', 'Message sent successfully! I will get back to you soon.');
    }
}
