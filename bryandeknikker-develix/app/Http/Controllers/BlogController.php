<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('develix::blogs.index', compact('blogs'));
    }

    public function create()
    {
        $users = User::all();
        return view('develix::blogs.create', compact('users'));
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

        $author = $request->input('author', 'Bryan de Knikker');
        $featuredImagePath = $request->file('featured_image')
            ? $request->file('featured_image')->store('uploads/blog_images', 'public')
            : null;

        Blog::create([
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->input('content'),
            'publication_date' => $request->publication_date,
            'author' => $author,
            'status' => $request->publication_date && $request->publication_date > now() ? 'concept' : $request->status,
            'featured_image' => $featuredImagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('develix::blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $users = User::all();
        return view('develix::blogs.edit', compact('blog', 'users'));
    }

    public function update(Request $request, $id)
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

        $blog = Blog::findOrFail($id);
        $featuredImagePath = $request->file('featured_image')
            ? $request->file('featured_image')->store('uploads/blog_images', 'public')
            : $blog->featured_image;

        $blog->update([
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->input('content'),
            'publication_date' => $request->publication_date,
            'author' => $request->input('author', $blog->author),
            'status' => $request->publication_date && $request->publication_date > now() ? 'concept' : $request->status,
            'featured_image' => $featuredImagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('dashboard');
    }
}
