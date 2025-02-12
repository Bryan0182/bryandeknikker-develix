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
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/timeline.scss', 'resources/scss/global/faq.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Jouw Website Hoger in Google & Meer Bezoekers',
        'description' => 'Wil je dat jouw website beter gevonden wordt door potentiële klanten? Bij Develix bieden we resultaatgerichte SEO-diensten die jouw online zichtbaarheid vergroten. Van technische optimalisatie tot waardevolle contentcreatie – wij zorgen ervoor dat jouw website hoger scoort in zoekmachines en meer relevant verkeer aantrekt.',
        'usps' => [
            "Voor zzp'ers & kleine bedrijven",
            "Technische & contentoptimalisatie",
            "SEO-geoptimaliseerd voor betere vindbaarheid",
            "Inclusief gratis kennismakingsgesprek"
        ],
        'first_button' => 'Vraag een SEO-advies',
        'first_button_url' => route('contact'),
        'second_button' => 'Plan jouw gratis kennismaking',
        'second_button_url' => route('contact'),
        'imageSrc' => asset('images/develix.nl/seo-activities.svg'),
        'imageSrcDark' => asset('images/develix.nl/seo-activities-dark.svg'),
        'altText' => 'Illustratie van SEO-activiteiten',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom kiezen voor Develix voor SEO?',
        'description' => 'Bij Develix draait alles om maatwerk en klantgerichtheid. We zorgen ervoor dat jouw SEO-strategie niet alleen effectief is, maar ook perfect aansluit bij jouw bedrijfsdoelen. Dankzij onze ervaring in SEO en digitale marketing krijg je een aanpak die zowel technisch sterk is als gericht op jouw doelgroep.',
        'usps' => [
            "Maatwerk SEO-strategieën – Afgestemd op jouw specifieke doelen",
            "Transparante werkwijze – Heldere communicatie en rapportages",
            "Blijvende resultaten – Duurzame verbeteringen in zoekresultaten",
            "Persoonlijke begeleiding – Direct contact en korte lijnen"
        ],
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Mijn expertise in SEO',
        'description' => 'Met een sterke achtergrond in technische SEO, contentcreatie en linkbuilding help ik bedrijven hun online doelen te bereiken. Ik optimaliseer websites voor betere vindbaarheid, hogere rankings en meer conversies. Of het nu gaat om lokale SEO, e-commerce of contentmarketing, ik zorg voor een strategie die werkt.',
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

    @component('components.text', [
        'title' => 'Hoe werkt het?',
        'description' => 'Het proces van SEO bij Develix begint met een grondige analyse van jouw website en doelen. We voeren een uitgebreide SEO-audit uit, bepalen de beste strategie en implementeren de optimalisaties. Vervolgens monitoren en verbeteren we continu om duurzame resultaten te behalen.',
        'usps' => [
            "Gratis kennismaking – We analyseren jouw website en SEO-doelen",
            "SEO-audit en strategie – Een plan op maat voor maximale vindbaarheid",
            "Optimalisatie en uitvoering – Technische verbeteringen en contentaanpassingen",
            "Monitoring en bijsturing – Doorlopende analyses en rapportages voor blijvend succes"
        ],
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
        'title' => 'Boost je vindbaarheid vandaag!',
        'description' => 'Wil je hoger in Google en meer klanten aantrekken? Vraag een gratis SEO-scan aan en ontdek hoe wij jouw online groei kunnen versnellen!',
        'first_button' => 'Gratis SEO-Scan aanvragen',
        'first_button_url' => route('quote'),
        'second_button' => 'Vragen over onze SEO-strategie',
        'second_button_url' => route('contact')
    ])
    @endcomponent

    @component('components.faq', [
        'title' => 'Veelgestelde Vragen',
        'description' => 'Vind hier antwoorden op de meest voorkomende vragen over onze diensten.',
        'faqs' => \App\Models\Faq::active()->byCategory('seo')->get(),
        'imageSrc' => asset('/images/develix.nl/angle-down.svg'),
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/timeline.js'])
@endsection
