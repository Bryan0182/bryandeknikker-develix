<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mpdf\Mpdf;
use App\Mail\QuoteMail;
use App\Mail\CustomerQuoteMail;

class QuoteController extends Controller
{
    public function showForm()
    {
        return view('develix::pages.offerte'); // Verwijst naar resources/views/quote/form.blade.php
    }

    public function generate(Request $request)
    {
        // Validatie van alle velden
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'pages' => 'nullable|integer|min:1',
            'page_types' => 'nullable|array',
            'page_types.*' => 'string|max:255',
            'website_url' => 'nullable|url',
            'extra_features' => 'nullable|string|max:1000',
        ]);

        // Prijs per pagina-optie
        $page_prices = [
            'Home' => 150,
            'Over Ons' => 100,
            'Diensten' => 120,
            'Contact' => 80,
            'Webshop' => 200,
            'Blog' => 100,
            'Portfolio' => 150,
            'FAQ' => 100,
            'Testimonials' => 90,
            'Ons Team' => 110,
            'Prijzen' => 90,
            'Galerij' => 120,
            'Evenementen' => 140,
            'Vacatures' => 100,
            'Contactformulier' => 70,
            'Landingspagina' => 180,
            'Algemene Voorwaarden' => 60,
            'Privacyverklaring' => 60,
            'Support' => 100,
            'Maatwerk Pagina' => 250,
        ];

        // Bereken kosten per geselecteerde pagina
        $page_details = [];
        $total_page_cost = 0;
        if (!empty($validated['page_types'])) {
            foreach ($validated['page_types'] as $page) {
                $price = $page_prices[$page] ?? 0;
                $page_details[] = ['name' => $page, 'price' => $price];
                $total_page_cost += $price;
            }
        }

        // Basisprijs afhankelijk van de dienst
        $base_price = match ($validated['service']) {
            'website' => 500,
            'applicatie' => 600,
            'seo' => 300,
            'social' => 200,
            'design' => 400,
            'hosting' => 100,
            default => 0,
        };

        // Totale prijs berekenen
        $total_price = $base_price + $total_page_cost;

        // Gegevens voorbereiden voor PDF en e-mail
        $quote_data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'service' => ucfirst($validated['service']),
            'pages' => $validated['pages'] ?? 1,
            'page_details' => $page_details,
            'website_url' => $validated['website_url'] ?? 'Geen URL opgegeven',
            'extra_features' => $validated['extra_features'] ?? 'Geen extra\'s',
            'base_price' => $base_price,
            'total_price' => $total_price,
        ];

        // PDF genereren met MPDF
        $mpdf = new \Mpdf\Mpdf();
        $html = view('quote.pdf', $quote_data)->render();
        $mpdf->WriteHTML($html);
        $pdfOutput = $mpdf->Output('', 'S');

        Mail::to('info@develix.nl')->send(new QuoteMail($quote_data, $pdfOutput));

        Mail::to($validated['email'])->send(new CustomerQuoteMail($quote_data));

        return redirect()->back()->with('success', 'Offerte aanvraag succesvol verzonden!');
    }
}
