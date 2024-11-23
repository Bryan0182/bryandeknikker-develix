<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mpdf\Mpdf;
use App\Mail\QuoteMail;

class QuoteController extends Controller
{
    public function showForm()
    {
        return view('develix::pages.offerte'); // Verwijst naar resources/views/quote/form.blade.php
    }

    public function generate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'pages' => 'nullable|integer|min:1',
        ]);

        $base_price = 500;
        $total_price = $base_price * ($validated['pages'] ?? 1);

        $quote_data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'service' => ucfirst($validated['service']),
            'pages' => $validated['pages'] ?? 1,
            'extra_features' => $validated['extra_features'] ?? 'Geen extra\'s',
            'total_price' => $total_price,
        ];

        $mpdf = new \Mpdf\Mpdf();
        $html = view('quote.pdf', $quote_data)->render();
        $mpdf->WriteHTML($html);
        $pdfOutput = $mpdf->Output('', 'S');

        Mail::to('info@develix.nl')->send(new QuoteMail($quote_data, $pdfOutput));

        return redirect()->back()->with('success', 'Offerte succesvol verzonden!');
    }
}
