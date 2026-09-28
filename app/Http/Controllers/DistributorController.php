<?php

namespace App\Http\Controllers;

use App\Mail\DistributorInquiryMail;
use App\Models\DistributorInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DistributorController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'company' => ['nullable', 'string', 'max:150'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:150'],
            'city' => ['nullable', 'string', 'max:100'],
            'state' => ['nullable', 'string', 'max:100'],
            'business_type' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        DistributorInquiry::create($validated);

        Mail::to('info.rainbowcolorss@gmail.com')
            ->cc('info@rainbowcolors.in')
            ->send(new DistributorInquiryMail($validated));

        return back()->with(
            'distributorship_success',
            'Thank you for your enquiry. Our team will contact you soon.'
        );
    }
}
