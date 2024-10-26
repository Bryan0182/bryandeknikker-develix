@extends('develix::layouts.base')

@section('title', '404')

@section('page-specific-scss')
    @vite(['resources/scss/global/404.scss'])
@endsection

@section('content')
    @component('components.404', [
        'title' => 'Pagina niet gevonden',
        'description' => 'Oeps! De pagina die je zoekt is niet gevonden. Mogelijk is de link verouderd of bestaat de pagina niet meer.',
        'error_text' => 'Ga terug naar de homepage om verder te navigeren.',
        'error_button' => 'Terug naar de homepage',
        'error_button_url' => '/'
    ])
    @endcomponent
@endsection

@section('page-specific-js')
        @vite([])
@endsection
