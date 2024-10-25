@extends('develix::layouts.base')

@section('title', 'Home')

@section('page-specific-css')
    @vite(['resources/scss/develix.scss', 'resources/scss/home.scss'])
@endsection

@section('content')
    <section class="hero">
        <h1>Welkom op de homepagina</h1>
        <!-- Pagina-inhoud hier -->
    </section>
@endsection

@section('page-specific-js')
{{--    @vite(['resources/js/home.js'])--}}
@endsection
