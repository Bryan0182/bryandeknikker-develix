@extends('develix::layouts.base')

@section('title', $blog->title)

@section('page-specific-scss')
    @vite(['resources/scss/global/blog-show.scss'])
@endsection

@section('content')
    @component('components.blog-show', ['blog' => $blog, 'relatedBlogs' => $relatedBlogs])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
