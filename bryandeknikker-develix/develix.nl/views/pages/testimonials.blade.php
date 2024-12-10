@extends('develix::layouts.base')

@section('title', 'Klantbeoordelingen')

@section('page-specific-scss')
    @vite(['resources/scss/global/testimonial.scss'])
@endsection

@section('content')
    @component('components.overview-testimonials', [
        'title' => 'Klantbeoordelingen',
        'description' => 'Lees wat klanten over mij zeggen.',
        'reviews' => $reviews
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
