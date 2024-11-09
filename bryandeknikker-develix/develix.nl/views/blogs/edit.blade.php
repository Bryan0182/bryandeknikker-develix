@extends('develix::layouts.base')

@section('title', 'Blog aanpassen')

@section('page-specific-scss')
    @vite(['resources/scss/global/blog-create.scss'])
@endsection

@section('content')
    @component('components.blog-edit', ['users' => $users, 'blog' => $blog])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/develix.nl/wysiwyg-editor.js', 'resources/js/develix.nl/blog-planner.js'])
@endsection
