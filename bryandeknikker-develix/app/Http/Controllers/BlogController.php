<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 'gepubliceerd')
            ->orderBy('publication_date', 'desc') // Sorteer op publication_date in aflopende volgorde
            ->get();

        return view('develix::blogs.overview', compact('blogs'));
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
            'meta_description' => 'nullable|string|max:160',
        ]);

        $author = $request->input('author', 'Bryan de Knikker');
        $featuredImagePath = $request->file('featured_image')
            ? $request->file('featured_image')->store('uploads/blog_images', 'public')
            : null;

        // Converteer publication_date naar MySQL-formaat
        $publicationDate = $request->input('publication_date')
            ? Carbon::createFromFormat('Y-m-d\TH:i', $request->input('publication_date'))
            : null;

        Blog::create([
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->input('content'),
            'publication_date' => $publicationDate,
            'author' => $author,
            'status' => $request->input('status'),
            'featured_image' => $featuredImagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('dashboard');
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $relatedBlogs = Blog::where('id', '!=', $blog->id)
            ->where('status', 'gepubliceerd')
            ->limit(3)
            ->get();

        return view('develix::blogs.show', compact('blog', 'relatedBlogs'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $users = User::all();

        // Formatteer de publicatiedatum correct als deze bestaat
        $blog->publication_date = $blog->publication_date
            ? \Carbon\Carbon::parse($blog->publication_date)->format('Y-m-d\TH:i')
            : null;

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
            'meta_description' => 'nullable|string|max:160',
        ]);

        $blog = Blog::findOrFail($id);

        $featuredImagePath = $request->file('featured_image')
            ? $request->file('featured_image')->store('uploads/blog_images', 'public')
            : $blog->featured_image;

        $publicationDate = $request->input('publication_date')
            ? Carbon::createFromFormat('Y-m-d\TH:i', $request->input('publication_date'))->format('Y-m-d H:i:s')
            : $blog->publication_date;


        $blog->update([
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->input('content'),
            'publication_date' => $publicationDate,
            'author' => $request->input('author', $blog->author),
            'status' => $request->input('status'),
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
