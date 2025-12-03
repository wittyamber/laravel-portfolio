<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
// We will create this Mailable class next
// use App\Mail\ContactFormMailable; 
// use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 2. Save the message to the database
        Message::create($validated);

        // 3. Send an email (we will uncomment this after creating the Mailable)
        // Mail::to('your-email@example.com')->send(new ContactFormMailable($validated));

        // 4. Redirect back with a success message
        return redirect('/#contact')->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}