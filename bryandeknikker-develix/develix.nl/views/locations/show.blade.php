@extends('develix::layouts.base')

@section('title', "Website laten maken in " . $location->location)
@section('meta_description', "Op zoek naar een professionele website in " . $location->location . "? Develix helpt zzp'ers en kleine ondernemers met maatwerk websites, SEO en meer. Persoonlijk contact, lokale aanpak.")
@section('meta_keywords', "website laten maken " . $location->location . ", webdesigner " . $location->location . ", SEO " . $location->location . ", Develix")
@section('og_title', "Website laten maken in " . $location->location . " | Develix")
@section('og_description', "Een professionele website laten maken in " . $location->location . "? Bij Develix krijg je maatwerk, persoonlijk contact en een website die écht klanten oplevert.")
@section('og_image', asset('images/develix.nl/create-website.svg'))
@section('canonical', url('/locatie/' . $location->slug))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/faq.scss'])
@endsection

@section('content')
    @component('components.location-show', ['location' => $location])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/faq.js'])
@endsection
