<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Location;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Haal alle blogs en gebruikers op
        $blogs = Blog::all();
        $users = User::all();
        $locations = Location::all();

        // Stuur data naar de dashboard view
        return view('develix::backend.dashboard', compact('blogs', 'users', 'locations'));
    }
}
