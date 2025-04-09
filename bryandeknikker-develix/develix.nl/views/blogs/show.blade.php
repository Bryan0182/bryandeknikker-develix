@extends('develix::layouts.base')

@section('title', $blog->title)
@section('subtitle', $blog->subtitle ?? 'Jouw digitale partner voor groei')
@section('meta_description', $blog->meta_description ?? 'Ontdek hoe Develix bedrijven helpt groeien met maatwerk digitale oplossingen.')
@section('meta_keywords', 'Over Develix, digitale partner, webontwikkeling, SEO, maatwerk oplossingen')
@section('og_title', $blog->meta_title ?? $blog->title)
@section('og_description', $blog->meta_description ?? 'Bij Develix draait alles om kwaliteit, klantgerichtheid en innovatie. Ontdek hoe wij bedrijven helpen groeien met maatwerk digitale oplossingen.')
@section('og_image', $blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('images/develix.nl/operating-system-vector.svg'))
@section('canonical', route('blog', $blog->slug))

@section('page-specific-scss')
    @vite(['resources/scss/global/blog-show.scss', 'resources/scss/global/blogs.scss', 'resources/scss/global/cta.scss'])
@endsection

@section('content')
    @component('components.blog-show', ['blog' => $blog, 'relatedBlogs' => $relatedBlogs])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar om je online aanwezigheid naar het volgende niveau te tillen? ',
        'highlight_word' => 'volgende niveau',
        'description' => 'Plan direct je gratis adviesgesprek en ontdek hoe ik jouw digitale ambities kan waarmaken.',
        'first_button' => 'Plan je gratis adviesgesprek',
        'first_button_url' => route('contact'),
        'second_button' => 'Bekijk hoe ik jou kan helpen',
        'second_button_url' => route('services'),
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
