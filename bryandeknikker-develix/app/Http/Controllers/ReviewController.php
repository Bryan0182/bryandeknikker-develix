<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('develix::pages.testimonials', compact('reviews'));
    }

    /**
     * Display the specified review.
     */
    public function show($id)
    {
        // Haal de review op op basis van het ID
        $review = Review::findOrFail($id);

        // Render de view en stuur de reviewgegevens mee
        return view('develix::reviews.show', compact('review'));
    }

    /**
     * Show the form for creating a new review.
     */
    public function create()
    {
        return view('develix::reviews.create');
    }

    /**
     * Store a newly created review in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'website_url' => 'nullable|url',
        ]);

        Review::create($request->only(['content', 'author', 'role', 'company', 'website_url']));

        return redirect()->route('dashboard')->with('success', 'Review succesvol toegevoegd.');
    }

    /**
     * Show the form for editing the specified review.
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);

        return view('develix::reviews.edit', compact('review'));
    }

    /**
     * Update the specified review in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'website_url' => 'nullable|url',
        ]);

        $review = Review::findOrFail($id);

        $review->update($request->only(['content', 'author', 'role', 'company', 'website_url']));

        return redirect()->route('dashboard')->with('success', 'Review succesvol bijgewerkt.');
    }

    /**
     * Remove the specified review from storage.
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('dashboard')->with('success', 'Review succesvol verwijderd.');
    }
}
