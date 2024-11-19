<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Show the form to create a new FAQ.
     */
    public function create()
    {
        return view('develix::faqs.create');
    }

    /**
     * Store a newly created FAQ in the database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category' => 'required|string|max:255',
            'is_active' => 'nullable|boolean', // Optionele validatie
        ]);

        Faq::create($validated);

        return redirect()->route('dashboard')->with('success', 'FAQ item succesvol aangemaakt.');
    }

    /**
     * Show the form to edit an existing FAQ.
     */
    public function edit($id)
    {
        $faq = Faq::findOrFail($id);

        return view('develix::faqs.edit', compact('faq'));
    }

    /**
     * Update an existing FAQ in the database.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category' => 'required|string|max:255',
            'is_active' => 'nullable|boolean', // Optionele validatie
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($validated);

        return redirect()->route('dashboard', $id)->with('success', 'FAQ item succesvol bijgewerkt.');
    }

    /**
     * Delete an existing FAQ from the database.
     */
    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('dashboard')->with('success', 'FAQ item succesvol verwijderd.');
    }
}
