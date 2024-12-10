<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\Location;
use App\Models\User;
use App\Models\Review;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $blogs = Blog::all();
        $users = User::all();
        $locations = Location::all();
        $faqs = Faq::all();
        $reviews = Review::all();

        return view('develix::backend.dashboard', compact('blogs', 'users', 'locations', 'faqs', 'reviews'));
    }
}
