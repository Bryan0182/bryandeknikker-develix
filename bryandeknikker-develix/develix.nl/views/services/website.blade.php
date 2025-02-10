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
        'title' => 'Website laten maken, professioneel, betaalbaar & conversiegericht',
        'description' => "Wil jij een professionele website die klanten aantrekt en omzet verhoogt? Bij Develix bouwen we snelle, conversiegerichte websites op maat – perfect voor zzp'ers en kleine ondernemers. Wij regelen alles, zodat jij je kunt focussen op je bedrijf.",
        'uspsIcon' => asset('images/develix.nl/check.svg'),
        'usps' => [
            "Voor zzp'ers & kleine bedrijven",
            "Mobielvriendelijk & supersnel",
            "SEO-geoptimaliseerd voor betere vindbaarheid",
            "Inclusief gratis kennismakingsgesprek"
        ],
        'first_button' => 'Offerte aanvragen',
        'first_button_url' => route('quote'),
        'second_button' => 'Plan jouw gratis kennismaking',
        'second_button_url' => route('contact'),
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
        'description' => 'Bij Develix geloven we in een persoonlijke aanpak waarbij we jouw wensen en doelen centraal stellen. We zorgen ervoor dat je een website krijgt die niet alleen visueel aantrekkelijk is, maar ook functioneel en gebruiksvriendelijk. Door onze ervaring in webontwikkeling en digitale strategie kunnen we je helpen om een sterke online positie op te bouwen. We luisteren naar jouw ideeën en vertalen deze naar een website die echt werkt voor jouw bedrijf. Transparantie en samenwerking staan bij ons voorop, zodat je altijd weet waar je aan toe bent.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Hoe werkt het?',
        'description' => 'Het proces van een website laten maken bij Develix begint met een kennismakingsgesprek waarin we jouw wensen en doelen bespreken. Vervolgens maken we een concept en werken we dit uit tot een volledig ontwerp. Zodra het ontwerp akkoord is, beginnen we met de ontwikkeling van de website en zorgen we ervoor dat alles goed functioneert en geoptimaliseerd is. Na de oplevering bieden we ondersteuning en begeleiding, zodat je het maximale uit je website kunt halen. Of het nu gaat om kleine aanpassingen of toekomstige uitbreidingen, wij staan voor je klaar om je website verder te laten groeien.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Mijn expertise',
        'description' => 'Met jarenlange ervaring in webontwikkeling, SEO en digitale zichtbaarheid help ik bedrijven om online te groeien. Ik ontwikkel websites met een focus op gebruiksvriendelijkheid en prestaties, zodat bedrijven een sterke online aanwezigheid kunnen opbouwen. Daarnaast zorg ik ervoor dat websites goed vindbaar zijn in zoekmachines en optimaal presteren op verschillende apparaten. Door een combinatie van design, techniek en strategische optimalisatie help ik ondernemers bij het bereiken van hun digitale doelen.',
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

    @component('components.faq', [
        'title' => 'Veelgestelde Vragen',
        'description' => 'Bekijk de antwoorden op de meest gestelde vragen over het laten maken van een website.',
        'faqs' => \App\Models\Faq::active()->byCategory('website')->get(),
        'imageSrc' => asset('/images/develix.nl/angle-down.svg'),
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
        'first_button' => 'Klaar om jouw bedrijf online te laten groeien?',
        'first_button_url' => route('quote'),
        'second_button' => 'Vragen over jouw nieuwe website?',
        'second_button_url' => route('contact')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/faq.js'])
@endsection
