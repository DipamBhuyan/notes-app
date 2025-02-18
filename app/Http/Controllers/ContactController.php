<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('bhuyandipam@gmail.com')->send(new ContactFormSubmitted($request->all()));

        // You can also store the form data in the database or perform other actions

        // For now, let's just return a response
        return response()->json(['message' => 'Form submitted successfully']);
    }
}
