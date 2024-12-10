@extends('develix::layouts.base')

@section('title', 'Applicatie laten maken')
@section('subtitle', 'Maatwerk digitale oplossingen')
@section('meta_description', 'Wil je een applicatie laten maken? Bij Develix bouwen we op maat gemaakte digitale oplossingen die aansluiten bij jouw unieke bedrijfsbehoeften. Neem contact op voor jouw ideale applicatie.')
@section('meta_keywords', 'applicatie laten maken, maatwerk applicaties, digitale oplossingen, Develix')
@section('og_title', 'Applicatie laten maken | Develix')
@section('og_description', 'Ontdek hoe Develix jouw bedrijf kan versterken met op maat gemaakte applicaties. Van kleine tools tot complexe systemen.')
@section('og_image', asset('images/develix.nl/create-application.svg'))
@section('canonical', route('application'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Applicatie laten maken',
        'description' => 'Wil je een applicatie laten maken die jouw bedrijf ondersteunt en optimaliseert? Bij Develix ontwikkelen we maatwerkapplicaties die jouw bedrijfsprocessen versterken. Of het nu gaat om een eenvoudige tool of een complexe oplossing, wij bouwen het op maat voor jouw unieke behoeften.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Lees wat klanten zeggen',
        'second_button_url' => route('testimonials'),
        'imageSrc' => asset('images/develix.nl/create-application.svg'),
        'imageSrcDark' => asset('images/develix.nl/create-application-dark.svg'),
        'altText' => 'Illustratie van applicatie ontwikkeling',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom een maatwerk applicatie?',
        'description' => 'Een maatwerkapplicatie biedt jouw bedrijf de mogelijkheid om unieke uitdagingen aan te pakken en processen te automatiseren. Bij Develix bouwen we oplossingen die volledig zijn afgestemd op jouw wensen. Met een focus op gebruiksvriendelijkheid en efficiëntie zorgen we ervoor dat jouw applicatie écht waarde toevoegt.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Mijn aanpak',
        'description' => 'Bij het ontwikkelen van applicaties werk ik nauw samen met mijn klanten. Van idee tot realisatie zorg ik ervoor dat het proces transparant is en de oplossing perfect aansluit bij jouw bedrijfsdoelen. Of je nu een kleine tool nodig hebt of een uitgebreid systeem, bij Develix ben je aan het juiste adres.',
    ])
    @endcomponent

    @component('components.cards', [
        'title' => 'Mijn kernwaarden',
        'subtitle' => 'Bij Develix staan kwaliteit, klantgerichtheid en innovatie centraal. Deze kernwaarden vormen de basis van mijn dienstverlening en helpen mij om klanten te voorzien van hoogwaardige digitale oplossingen die echt het verschil maken.',
        'cards' => [
            [
                'title' => 'Kwaliteit',
                'description' => 'Ik lever hoogwaardige digitale oplossingen die voldoen aan de hoogste standaarden. Met oog voor detail en een focus op kwaliteit, zorg ik ervoor dat jouw project een succes wordt.',
                'image' => '/images/global/quality-black.svg',
                'image-dark' => '/images/global/quality.svg',
                'imageAlt' => 'Kwaliteitsgarantie icon',
            ],
            [
                'title' => 'Klantgerichtheid',
                'description' => 'Bij Develix staat de klant centraal. Ik luister naar jouw wensen en behoeften en lever maatwerkoplossingen die perfect aansluiten op jouw doelen. Jouw tevredenheid is mijn prioriteit.',
                'image' => '/images/global/customer-focus-black.svg',
                'image-dark' => '/images/global/customer-focus.svg',
                'imageAlt' => 'Klantgerichtheid icon',
            ],
            [
                'title' => 'Innovatie',
                'description' => 'Ik blijf continu leren en verbeteren om de beste oplossingen te kunnen bieden aan mijn klanten. Met een passie voor technologie en innovatie, help ik jou om voorop te blijven lopen in de digitale wereld.',
                'image' => '/images/global/innovation-black.svg',
                'image-dark' => '/images/global/innovation.svg',
                'imageAlt' => 'Innovatie icon',
            ]
        ]
    ])
    @endcomponent

    @component('components.image-text', [
        'title' => 'Het verhaal van Develix',
        'description' => 'Develix is opgericht door Bryan de Knikker, een tech-liefhebber met een passie voor innovatie. Door de jaren heen heeft hij zijn kennis en ervaring ingezet om bedrijven te ondersteunen met unieke, op maat gemaakte applicaties. Met een focus op kwaliteit en klantgerichtheid helpt Develix bedrijven digitaal te groeien.',
        'imageSrc' => asset('images/develix.nl/developer-story.svg'),
        'imageSrcDark' => asset('images/develix.nl/developer-story-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar om te starten?',
        'description' => 'Wil je een applicatie laten maken die jouw bedrijfsprocessen optimaliseert? Neem contact op voor een vrijblijvend gesprek en ontdek hoe Develix jouw digitale ambities kan realiseren.',
        'first_button' => 'Start met jouw applicatie',
        'first_button_url' => route('quote'),
        'second_button' => 'Vragen over jouw applicatie?',
        'second_button_url' => route('contact')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/timeline.js'])
@endsection
