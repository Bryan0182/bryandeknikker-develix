@extends('develix::layouts.base')

@section('title', 'Website laten maken')
@section('subtitle', 'Professionele websites op maat')
@section('meta_description', 'Wil je een website laten maken? Bij Develix zorgen we voor professionele, gebruiksvriendelijke websites die aansluiten bij jouw merk en doelgroep. Neem contact op voor jouw online succes.')
@section('meta_keywords', 'website laten maken, maatwerk websites, professionele websites, WordPress, Laravel, Develix')
@section('og_title', 'Website laten maken | Develix')
@section('og_description', 'Een website laten maken? Bij Develix krijg je maatwerk en professionele ondersteuning voor jouw online aanwezigheid. Ontdek wat wij voor jou kunnen doen!')
@section('og_image', asset('images/develix.nl/create-website.svg'))
@section('canonical', route('website'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Website laten maken',
        'description' => 'Een website laten maken? Bij Develix ben je aan het juiste adres voor het creëren van een professionele en gebruiksvriendelijke website die aansluit bij jouw bedrijf en doelgroep. Of het nu gaat om een maatwerk website, een WordPress site of een Laravel applicatie, wij bouwen jouw online visitekaartje op maat.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Bekijk diensten',
        'second_button_url' => route('services'),
        'imageSrc' => asset('images/develix.nl/create-website.svg'),
        'imageSrcDark' => asset('images/develix.nl/create-website-dark.svg'),
        'altText' => 'Illustratie van website creatie',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom kiezen voor Develix?',
        'description' => 'Bij Develix bied ik directe communicatie, een scherpe prijs en uitgebreide kennis en ervaring. Klanten waarderen mijn flexibiliteit en het vermogen om snel en efficiënt in te spelen op hun behoeften. Met mijn passie voor technologie blijf ik continu leren en verbeteren, zodat ik altijd de beste oplossingen kan bieden.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Mijn expertise',
        'description' => 'Met jarenlange ervaring in webontwikkeling, SEO, social media beheer en het ontwikkelen van kleine applicaties met Python, helpt Develix bedrijven om online te groeien. Of je nu een nieuwe website wilt, betere zichtbaarheid in zoekresultaten of hulp bij social media, ik lever resultaatgerichte oplossingen die jouw doelen ondersteunen.',
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

    @component('components.timeline', [
       'title' => 'De mijlpalen van Develix',
       'description' => 'Develix heeft diverse belangrijke mijlpalen bereikt, elk een stap in de richting van betere ondersteuning voor klanten en een sterker online profiel. Onze reis is er een van groei, kwaliteit en klantgerichtheid, met als doel digitale groei mogelijk te maken voor elke ondernemer.',
       'timelineItems' => [
           [
               'number' => 1,
               'title' => 'Oprichting van Develix',
               'date' => 'December 2024',
               'description' => 'Het begin van Develix, opgericht met een visie op klantgerichte digitale oplossingen. Vanaf het eerste moment richten we ons op het creëren van sterke, op maat gemaakte websites en applicaties om ondernemers te helpen groeien.'
           ],
           [
               'number' => 2,
               'title' => 'Lancering van de website',
               'date' => 'December 2024',
               'description' => 'De ontwikkeling en lancering van de eerste Develix-website markeert een belangrijke stap. Hiermee presenteren we onszelf online en bouwen we aan een sterke merkidentiteit die vertrouwen en professionaliteit uitstraalt naar onze klanten.'
           ],
       ]
   ])
    @endcomponent

    @component('components.image-text', [
        'title' => 'Het verhaal van Develix',
        'description' => 'Develix is opgericht door Bryan de Knikker, een liefhebber van technologie die al vroeg zijn passie vond in het bouwen van websites en het ontdekken van de digitale wereld. Door opleidingen en praktijkervaring begon zijn wens te groeien om zijn kennis in te zetten voor anderen. Zo ontstond Develix: een bedrijf dat staat voor kwaliteit, klantgerichtheid en een persoonlijke benadering.',
        'imageSrc' => asset('images/develix.nl/developer-story.svg'),
        'imageSrcDark' => asset('images/develix.nl/developer-story-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar om te beginnen?',
        'description' => 'Wil je meer weten over wat Develix voor jouw bedrijf kan betekenen? Neem contact op voor een vrijblijvend gesprek en ontdek hoe ik je kan helpen jouw digitale doelen te bereiken.',
        'first_button' => 'Start met jouw nieuwe website!',
        'first_button_url' => route('quote'),
        'second_button' => 'Vragen over jouw nieuwe website?',
        'second_button_url' => route('contact')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/timeline.js'])
@endsection
