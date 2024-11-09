<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show($slug)
    {
        // Haal de locatie op op basis van de slug
        $location = Location::where('slug', $slug)->firstOrFail();

        // Render de view en stuur de locatiegegevens mee
        return view('develix::locations.show', compact('location'));
    }

    public function create()
    {
        return view('develix::locations.create');
    }

    /**
     * Store a newly created location in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:location-develix,slug',
        ]);

        Location::create($request->only(['location', 'slug']));

        return redirect()->route('dashboard')->with('success', 'Locatie succesvol toegevoegd.');
    }

    /**
     * Show the form for editing the specified location.
     */
    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('develix::locations.edit', compact('location'));
    }

    /**
     * Update the specified location in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'location' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:location-develix,slug,' . $id,
        ]);

        $location = Location::findOrFail($id);
        $location->update($request->only(['location', 'slug']));

        return redirect()->route('dashboard')->with('success', 'Locatie succesvol bijgewerkt.');
    }

    /**
     * Remove the specified location from storage.
     */
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();

        return redirect()->route('dashboard')->with('success', 'Locatie succesvol verwijderd.');
    }
}
