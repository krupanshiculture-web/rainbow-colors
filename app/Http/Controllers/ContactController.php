<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiryMail;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:30'],
            'subject' => ['nullable', 'string', 'max:200'],
            'message' => ['nullable', 'string', 'max:3000'],
        ]);

        ContactInquiry::create($validated);
        Mail::to('info.rainbowcolorss@gmail.com')
            ->cc('info@rainbowcolors.in')
            ->send(new ContactInquiryMail($validated));

        return back()->with(
            'contact_success',
            'Your message has been sent successfully. Our team will contact you soon.'
        );
    }
}
