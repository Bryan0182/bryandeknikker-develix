<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('develix::blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('develix::blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Blog::create($request->all());

        return redirect()->route('blog');
    }
}
