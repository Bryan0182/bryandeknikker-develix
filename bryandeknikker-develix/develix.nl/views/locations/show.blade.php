@extends('develix::layouts.base')

@section('title', "Website laten maken in " . $location->location)

@section('content')
    <div class="container mx-auto py-5 px-4">
        <h1 class="text-4xl font-bold mb-4">Website laten maken in {{ $location->location }}</h1>
        <p>Welkom bij Develix! Wij helpen bedrijven in {{ $location->location }} met het ontwikkelen van professionele websites die perfect aansluiten bij hun wensen en doelen.</p>

        <p>Ons team zorgt ervoor dat uw bedrijf in {{ $location->location }} online optimaal zichtbaar is.</p>

        <p>Neem vandaag nog contact op voor uw project in {{ $location->location }}!</p>
    </div>
@endsection
