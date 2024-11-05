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
            'intro' => 'required',
            'content' => 'required',
            'publication_date' => 'nullable|date',
            'status' => 'required|in:concept,gepubliceerd',
            'featured_image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160'
        ]);

        // Zet de auteur standaard op 'Bryan de Knikker' als deze niet is ingevuld
        $author = $request->input('author', 'Bryan de Knikker');

        // Opslaan van de afbeelding indien aanwezig
        $featuredImagePath = $request->file('featured_image')
            ? $request->file('featured_image')->store('uploads/blog_images', 'public')
            : null;

        Blog::create([
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->content,
            'publication_date' => $request->publication_date,
            'author' => $author, // Hier wordt de standaard auteur ingesteld
            'status' => $request->publication_date && $request->publication_date > now() ? 'concept' : $request->status,
            'featured_image' => $featuredImagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('blog');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('develix::blogs.show', compact('blog'));
    }
}
