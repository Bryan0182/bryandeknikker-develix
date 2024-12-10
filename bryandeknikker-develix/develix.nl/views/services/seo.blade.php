@extends('develix::layouts.base')

@section('title', 'SEO Diensten')
@section('subtitle', 'Verbeter jouw online vindbaarheid')
@section('meta_description', 'Wil je jouw SEO verbeteren? Bij Develix bieden we SEO-diensten die jouw zichtbaarheid vergroten en meer verkeer naar jouw website genereren. Neem contact op voor een strategisch SEO-plan.')
@section('meta_keywords', 'SEO diensten, SEO verbeteren, vindbaarheid vergroten, SEO strategie, Develix')
@section('og_title', 'SEO Diensten | Develix')
@section('og_description', 'Ontdek hoe Develix jouw online vindbaarheid verbetert met resultaatgerichte SEO-diensten. Vraag een vrijblijvend advies aan.')
@section('og_image', asset('images/develix.nl/seo-activities.svg'))
@section('canonical', route('seo'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'SEO verbeteren',
        'description' => 'Wil je jouw website hoger laten ranken in zoekmachines? Bij Develix bieden we resultaatgerichte SEO-diensten die jouw online zichtbaarheid verbeteren. Van technische SEO-optimalisatie tot waardevolle content creatie – wij zorgen ervoor dat jouw website beter presteert en meer bezoekers aantrekt.',
        'first_button' => 'Vraag een SEO-advies',
        'first_button_url' => route('contact'),
        'second_button' => 'Bekijk onze aanpak',
        'second_button_url' => route('about-develix'),
        'imageSrc' => asset('images/develix.nl/seo-activities.svg'),
        'imageSrcDark' => asset('images/develix.nl/seo-activities-dark.svg'),
        'altText' => 'Illustratie van SEO-activiteiten',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom investeren in SEO?',
        'description' => 'SEO is essentieel om jouw bedrijf zichtbaar te maken in zoekmachines zoals Google. Met een doordachte SEO-strategie trek je meer potentiële klanten naar jouw website en vergroot je jouw online autoriteit. Bij Develix zorgen we voor een meetbare aanpak, zodat jij resultaten ziet.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Onze expertise in SEO',
        'description' => 'Met jarenlange ervaring in technische SEO, on-page optimalisatie en contentstrategie helpen wij bedrijven om online te groeien. Of je nu meer verkeer wilt genereren, beter wilt converteren of jouw domein autoriteit wilt verhogen, Develix heeft de kennis en tools om jouw doelen te bereiken.',
    ])
    @endcomponent

    @component('components.cards', [
        'title' => 'Onze kernwaarden',
        'subtitle' => 'Bij Develix staan kwaliteit, klantgerichtheid en innovatie centraal. Deze kernwaarden vormen de basis van onze dienstverlening en helpen ons om klanten te voorzien van hoogwaardige digitale oplossingen die echt het verschil maken.',
        'cards' => [
            [
                'title' => 'Kwaliteit',
                'description' => 'Wij leveren hoogwaardige SEO-diensten die voldoen aan de nieuwste richtlijnen van zoekmachines. Met oog voor detail zorgen we voor optimale prestaties van jouw website.',
                'image' => '/images/global/quality-black.svg',
                'image-dark' => '/images/global/quality.svg',
                'imageAlt' => 'Kwaliteitsgarantie icon',
            ],
            [
                'title' => 'Klantgerichtheid',
                'description' => 'Bij Develix staat de klant centraal. Wij luisteren naar jouw wensen en leveren maatwerkoplossingen die perfect aansluiten op jouw doelen. Jouw tevredenheid is onze prioriteit.',
                'image' => '/images/global/customer-focus-black.svg',
                'image-dark' => '/images/global/customer-focus.svg',
                'imageAlt' => 'Klantgerichtheid icon',
            ],
            [
                'title' => 'Innovatie',
                'description' => 'Wij blijven continu leren en innoveren om onze klanten de beste SEO-strategieën en tools te bieden. Met een passie voor technologie helpen wij bedrijven vooruit.',
                'image' => '/images/global/innovation-black.svg',
                'image-dark' => '/images/global/innovation.svg',
                'imageAlt' => 'Innovatie icon',
            ]
        ]
    ])
    @endcomponent

    @component('components.image-text', [
        'title' => 'Het verhaal van Develix',
        'description' => 'Develix is opgericht door Bryan de Knikker, een specialist in technologie en marketing. Met een passie voor digitale groei helpt hij bedrijven om online succesvol te worden. Van kleine ondernemers tot grotere bedrijven, Develix biedt de juiste strategieën voor elk doel.',
        'imageSrc' => asset('images/develix.nl/developer-story.svg'),
        'imageSrcDark' => asset('images/develix.nl/developer-story-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Boost jouw vindbaarheid vandaag!',
        'description' => 'Wil je jouw SEO verbeteren en meer klanten aantrekken? Neem contact op voor een gratis SEO-scan en ontdek hoe Develix jouw website naar een hoger niveau tilt.',
        'first_button' => 'Vraag SEO-advies aan',
        'first_button_url' => route('quote'),
        'second_button' => 'Meer weten over SEO?',
        'second_button_url' => route('contact')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/timeline.js'])
@endsection
