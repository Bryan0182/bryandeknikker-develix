@extends('develix::layouts.base')

@section('title', 'Contact')

@section('page-specific-scss')
    @vite(['resources/scss/global/contact.scss'])
@endsection

@section('content')
    @component('components.contact', [
        'title' => 'Contact',
        'description' => 'Heb je een vraag, wil je meer informatie of ben je benieuwd wat ik voor jouw project kan betekenen? Neem gerust contact met mij op via onderstaand formulier of via de contactgegevens.',
        'button_text' => 'Verstuur',
        'contact_info' => 'Contactgegevens',
        'contact_info_text' => 'Neem direct contact met ons op via onderstaande gegevens. We staan voor je klaar!',
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
