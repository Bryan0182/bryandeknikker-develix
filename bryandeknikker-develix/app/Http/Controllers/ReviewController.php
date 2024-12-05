<?php

namespace App\Http\Controllers;

use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all(); // Haalt alle reviews op
        return view('reviews.index', compact('reviews'));
    }
}
