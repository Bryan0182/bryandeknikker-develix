<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show($slug)
    {
        $location = Location::where('slug', $slug)->firstOrFail();

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
            'show_in_footer' => 'nullable|boolean',
        ]);

        Location::create($request->only(['location', 'slug', 'show_in_footer']));

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

        $location->update([
            'location' => $request->input('location'),
            'slug' => $request->input('slug'),
            'show_in_footer' => $request->has('show_in_footer') ? true : false, // Zet expliciet false als niet aangevinkt
        ]);

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
