<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormToAdmin;
use App\Mail\ContactFormToUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $details = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ];

        // Stuur e-mail naar de admin
        Mail::to('info@develix.nl')->send(new ContactFormToAdmin($details));

        // Stuur e-mail naar de gebruiker
        Mail::to($validated['email'])->send(new ContactFormToUser($details));

        return redirect()->back()->with('success', 'We nemen snel contact met je op.');
    }
}
