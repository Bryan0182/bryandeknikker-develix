@extends('develix::layouts.base')

@section('title', 'Home')

@section('page-specific-css')
    @vite(['resources/scss/develix.nl/develix.scss', 'resources/scss/develix.nl/header.scss'])
@endsection

@section('content')
    @component('components.text', [
        'title' => 'Waarom investeren in goed design?',
        'description' => 'Een sterk design is essentieel voor het succes van je merk. Het zorgt voor een herkenbare identiteit, geeft je bedrijf professionaliteit en trekt de aandacht van je doelgroep. Hier zijn enkele redenen waarom goed design belangrijk is:
        <ul>
            <li><strong>Merkherkenning:</strong> Een uniek en consistent design zorgt voor een sterke merkidentiteit.</li>
            <li><strong>Gebruikerservaring:</strong> Goed design maakt je website of product gebruiksvriendelijker, wat leidt tot hogere tevredenheid.</li>
            <li><strong>Professionele uitstraling:</strong> Een goed ontworpen website of logo straalt professionaliteit uit en wekt vertrouwen bij je klanten.</li>
            <li><strong>Meer conversies:</strong> Een aantrekkelijk design zorgt ervoor dat bezoekers langer blijven en sneller actie ondernemen.</li>
        </ul>',
    ])
    @endcomponent
@endsection

@section('page-specific-js')
{{--    @vite(['resources/js/home.js'])--}}
@endsection
