@extends('develix::layouts.base')

@section('title', 'Blogs')

@section('page-specific-scss')
    @vite(['resources/scss/global/blogs.scss'])
@endsection

@section('content')
    @component('components.blogs', ['blogs' => $blogs])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
