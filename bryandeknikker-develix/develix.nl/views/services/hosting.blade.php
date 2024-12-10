@extends('develix::layouts.base')

@section('title', 'Hosting Diensten')
@section('subtitle', 'Snelle en betrouwbare hosting voor jouw website')
@section('meta_description', 'Ontdek hoe Develix jouw website snel en veilig online houdt met betrouwbare hostingdiensten. Laat jouw website optimaal presteren!')
@section('meta_keywords', 'hosting diensten, betrouwbare hosting, veilige hosting, snelle hosting, Develix')
@section('og_title', 'Hosting Diensten | Develix')
@section('og_description', 'Houd jouw website snel en veilig online met de hostingdiensten van Develix. Ontdek onze hostingoplossingen op maat.')
@section('og_image', asset('images/develix.nl/hosting-activities.svg'))
@section('canonical', route('hosting'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Hosting Diensten',
        'description' => 'Houd jouw website snel en veilig online met de hostingdiensten van Develix. Wij bieden betrouwbare en snelle hostingoplossingen, inclusief technische ondersteuning. Laat jouw website optimaal presteren zonder zorgen.',
        'first_button' => 'Maak jouw website veilig',
        'first_button_url' => route('quote'),
        'second_button' => 'Meer over onze hosting',
        'second_button_url' => route('about-develix'),
        'imageSrc' => asset('images/develix.nl/hosting-activities.svg'),
        'imageSrcDark' => asset('images/develix.nl/hosting-activities-dark.svg'),
        'altText' => 'Illustratie van hostingdiensten',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom kiezen voor hosting van Develix?',
        'description' => 'Een snelle en betrouwbare website is essentieel voor succes. Bij Develix zorgen wij voor hostingoplossingen die altijd up-to-date, veilig en snel zijn. Of je nu een kleine website hebt of een uitgebreide webshop – wij bieden een hostingpakket dat aansluit bij jouw behoeften.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat wij bieden',
        'description' => 'Onze hostingdiensten omvatten alles wat je nodig hebt om jouw website optimaal te laten presteren. Van dagelijkse back-ups en SSL-certificaten tot snelle laadtijden en uitgebreide technische ondersteuning – wij hebben het allemaal in huis.',
    ])
    @endcomponent

    @component('components.cards', [
        'title' => 'Onze kernwaarden',
        'subtitle' => 'Bij Develix staan kwaliteit, klantgerichtheid en innovatie centraal. Deze kernwaarden vormen de basis van onze dienstverlening en helpen ons om klanten te voorzien van hostingoplossingen die écht het verschil maken.',
        'cards' => [
            [
                'title' => 'Betrouwbaarheid',
                'description' => 'Onze hostingdiensten zorgen ervoor dat jouw website altijd bereikbaar is. Met robuuste servers en up-to-date technologie houden wij jouw website online.',
                'image' => '/images/global/customer-focus-black.svg',
                'image-dark' => '/images/global/customer-focus.svg',
                'imageAlt' => 'Betrouwbaarheid icon',
            ],
            [
                'title' => 'Veiligheid',
                'description' => 'Met SSL-certificaten en regelmatige beveiligingsupdates beschermen wij jouw website tegen dreigingen. Bij Develix is jouw data in veilige handen.',
                'image' => '/images/global/safety-black.svg',
                'image-dark' => '/images/global/safety.svg',
                'imageAlt' => 'Veiligheid icon',
            ],
            [
                'title' => 'Snelheid',
                'description' => 'Wij optimaliseren de laadtijden van jouw website, zodat bezoekers een snelle en soepele ervaring hebben. Perfect voor conversies en gebruikerservaring.',
                'image' => '/images/global/fast-black.svg',
                'image-dark' => '/images/global/fast.svg',
                'imageAlt' => 'Snelheid icon',
            ]
        ]
    ])
    @endcomponent

    @component('components.image-text', [
        'title' => 'Het verhaal van Develix',
        'description' => 'Develix is opgericht door Bryan de Knikker, een specialist in technologie en digitale oplossingen. Met een passie voor innovatie biedt Develix hostingoplossingen die betrouwbaar, snel en veilig zijn. Wij helpen bedrijven om online te groeien zonder zorgen over hun websiteprestaties.',
        'imageSrc' => asset('images/develix.nl/developer-story.svg'),
        'imageSrcDark' => asset('images/develix.nl/developer-story-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar voor snelle hosting?',
        'description' => 'Wil je jouw website snel en veilig online houden? Neem contact op voor een vrijblijvend gesprek en ontdek hoe Develix jouw hosting kan verzorgen.',
        'first_button' => 'Maak jouw website snel',
        'first_button_url' => route('quote'),
        'second_button' => 'Meer weten over hosting?',
        'second_button_url' => route('contact')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/timeline.js'])
@endsection
