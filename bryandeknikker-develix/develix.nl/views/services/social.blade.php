@extends('develix::layouts.base')

@section('title', 'Social Media Diensten')
@section('subtitle', 'Laat jouw merk groeien')
@section('meta_description', 'Bereik meer met social media! Develix biedt social media beheer, strategie en content creatie om jouw merk online te versterken. Neem contact op voor een plan op maat.')
@section('meta_keywords', 'social media beheer, social media strategie, social media diensten, content creatie, social media advertenties')
@section('og_title', 'Social Media Diensten | Develix')
@section('og_description', 'Laat jouw social media groeien met professionele diensten van Develix. Van strategie tot uitvoering – ik help jouw merk te versterken.')
@section('og_image', asset('images/develix.nl/social-activities.svg'))
@section('canonical', route('social'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Professioneel Social Media Beheer',
        'description' => 'Laat jouw social media groeien met Develix! Ik zorg voor een effectieve strategie, aantrekkelijke content en consequente interactie om jouw merk te versterken en meer volgers aan te trekken. Van Facebook tot Instagram – ik beheer het met zorg.',
        'first_button' => 'Start jouw social strategie',
        'first_button_url' => route('quote'),
        'second_button' => 'Ontdek mijn aanpak',
        'second_button_url' => route('about-develix'),
        'imageSrc' => asset('images/develix.nl/social-activities.svg'),
        'imageSrcDark' => asset('images/develix.nl/social-activities-dark.svg'),
        'altText' => 'Illustratie van social media beheer',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom kiezen voor social media beheer?',
        'description' => 'Social media is een krachtig middel om jouw doelgroep te bereiken. Bij Develix zorg ik voor een gerichte aanpak, zodat jouw merk consistent en professioneel wordt gepresenteerd. Of het nu gaat om content creatie, advertenties of community management – ik helpen je groeien.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat ik bied',
        'description' => 'Met expertise in social media strategie, content creatie en data-analyse help ik bedrijven om meer impact te maken. Of je nu nieuwe volgers wilt aantrekken of een sterke band met jouw bestaande klanten wilt opbouwen, mijn diensten zijn volledig afgestemd op jouw doelen.',
    ])
    @endcomponent

    @component('components.cards', [
        'title' => 'Mijn kernwaarden',
        'subtitle' => 'Bij Develix staan kwaliteit, klantgerichtheid en innovatie centraal. Deze kernwaarden vormen de basis van mijn dienstverlening en helpen ons om klanten te voorzien van hoogwaardige digitale oplossingen die echt het verschil maken.',
        'cards' => [
            [
                'title' => 'Kwaliteit',
                'description' => 'Ik lever hoogwaardige social media diensten die jouw merk sterker maken. Met oog voor detail zorg ik ervoor dat jouw social media strategie impact maakt.',
                'image' => '/images/global/quality-black.svg',
                'image-dark' => '/images/global/quality.svg',
                'imageAlt' => 'Kwaliteitsgarantie icon',
            ],
            [
                'title' => 'Klantgerichtheid',
                'description' => 'Bij Develix staat de klant centraal. Ik Luister naar jouw wensen en leveren maatwerkoplossingen die perfect aansluiten op jouw doelen. Jouw tevredenheid is mijn prioriteit.',
                'image' => '/images/global/customer-focus-black.svg',
                'image-dark' => '/images/global/customer-focus.svg',
                'imageAlt' => 'Klantgerichtheid icon',
            ],
            [
                'title' => 'Innovatie',
                'description' => 'Ik blijf continu leren en innoveren om mijn klanten de beste social media strategieën en tools te bieden. Met een passie voor technologie help ik bedrijven vooruit.',
                'image' => '/images/global/innovation-black.svg',
                'image-dark' => '/images/global/innovation.svg',
                'imageAlt' => 'Innovatie icon',
            ]
        ]
    ])
    @endcomponent

    @component('components.image-text', [
        'title' => 'Het verhaal van Develix',
        'description' => 'Develix is opgericht door Bryan de Knikker, een specialist in technologie en marketing. Met een passie voor sociale strategieën helpt hij bedrijven om een sterke online aanwezigheid op te bouwen. Van kleine bedrijven tot grotere merken – Develix biedt maatwerkoplossingen voor elk doel.',
        'imageSrc' => asset('images/develix.nl/developer-story.svg'),
        'imageSrcDark' => asset('images/develix.nl/developer-story-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar om jouw social media te laten groeien?',
        'description' => 'Wil je weten hoe Develix jouw merk op social media kan versterken? Neem contact op voor een vrijblijvend gesprek en ontdek hoe ik jouw online aanwezigheid kunnen verbeteren.',
        'first_button' => 'Gebruik mijn social media diensten',
        'first_button_url' => route('quote'),
        'second_button' => 'Meer weten over social media?',
        'second_button_url' => route('contact')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/timeline.js'])
@endsection
