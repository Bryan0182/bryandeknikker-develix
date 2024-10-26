@extends('develix::layouts.base')

@section('title', 'Home')

@section('page-specific-css')
    @vite(['resources/scss/global/hero.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Jouw complete digitale partner voor succes',
        'description' => 'Welkom bij Develix – de plek waar we jouw digitale visie realiseren. Van websites die opvallen, SEO-strategieën die vindbaarheid verbeteren, en social media-boosts tot op maat gemaakte applicaties, professioneel design, en betrouwbare hosting. Met Develix heb je een partner die alles in huis heeft om jouw bedrijf online te laten groeien en bloeien.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Lees meer',
        'second_button_url' => route('over-develix'),
        'imageSrc' => asset('images/develix.nl/operating-system-vector.svg'),
        'imageSrcDark' => asset('images/develix.nl/operating-system-vector-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent
@endsection

@section('page-specific-js')
{{--    @vite(['resources/js/home.js'])--}}
@endsection
