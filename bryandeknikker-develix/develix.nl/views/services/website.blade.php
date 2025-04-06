@extends('develix::layouts.base')

@section('title', 'Website laten maken | Professionele websites op maat')
@section('subtitle', 'Develix')
@section('meta_description', 'Op zoek naar een professionele website die converteert? Develix ontwikkelt maatwerk WordPress websites met focus op resultaat. Vraag een gratis adviesgesprek aan.')
@section('meta_keywords', 'website laten maken, maatwerk websites, professionele websites, WordPress, Laravel, Develix')
@section('og_title', 'Website laten maken | Develix')
@section('og_description', 'Een website laten maken? Bij Develix krijg je maatwerk en professionele ondersteuning voor jouw online aanwezigheid. Ontdek wat ik voor jou kunnen doen!')
@section('og_image', asset('images/develix.nl/create-website.svg'))
@section('canonical', route('website'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/testimonial.scss', 'resources/scss/global/timeline.scss', 'resources/scss/global/faq.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Website laten maken? Conversiegericht en op maat gemaakt',
        'description' => "In de huidige digitale wereld is jouw website het visitekaartje van uw onderneming. Onderzoek toont aan dat bezoekers binnen seconden beslissen of ze jouw bedrijf vertrouwen op basis van jouw online presentatie. Een professionele website is geen luxe meer, maar een noodzaak voor groeiende ondernemingen. Bij Develix combineren we website ontwikkeling met strategisch inzicht om websites te bouwen die niet alleen mooi zijn, maar ook doelgericht conversies genereren en jouw bedrijf laten groeien.",
        'usps' => [
            "Voor zzp'ers & kleine bedrijven",
            "Persoonlijke aanpak & technische expertise",
            "SEO-geoptimaliseerd voor betere vindbaarheid",
            "WordPress specialist met focus op conversie",
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
        'title' => 'Waarom een professionele website laten maken?',
        'usps' => [
            "Versterk jouw online aanwezigheid en bereik meer potentiële klanten",
            "Converteer bezoekers naar klanten met doelgerichte call-to-actions",
            "Bouw autoriteit op in jouw branche met een professionele uitstraling",
            "Verbeter jouw vindbaarheid in Google met een <a href='/diensten/seo'>technisch geoptimaliseerde website</a>",
            "Automatiseer bedrijfsprocessen en bespaar kostbare tijd"
        ],
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Zo maak ik jouw website succesvol',
        'description' => 'Bij Develix geloven we in websites die werken. Mijn aanpak combineert:',
        'usps' => [
            "Data-gedreven design voor maximale gebruiksvriendelijkheid",
            "Conversion Rate Optimization (CRO) technieken",
            "Mobiel-eerst ontwikkeling voor perfecte weergave op alle apparaten",
            "Snelle laadtijden voor betere gebruikerservaring en SEO",
            "Gebruiksvriendelijk content management systeem",
            "<a href='/diensten/hosting'>Betrouwbare hosting</a> met 24/7 monitoring"
        ],
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'WordPress websites op maat',
        'description' => 'WordPress is wereldwijd het meest gebruikte platform voor professionele websites - en met reden. Als WordPress specialist ontwikkelt Develix:',
        'usps' => [
            "Volledig maatwerk thema afgestemd op jouw <a href='/diensten/design'>huisstijl</a>",
            "Gebruiksvriendelijke beheeromgeving",
            "Veilige en schaalbare oplossingen",
            "SEO-geoptimaliseerde structuur",
            "Integraties met uw bedrijfssoftware",
            "<a href='/diensten/applicaties'>Maatwerk applicaties</a> wanneer nodig"
        ],
    ])
    @endcomponent

    @component('components.timeline', [
       'title' => 'Het proces van website ontwikkeling',
       'timelineItems' => [
           [
               'number' => 1,
               'title' => 'Vrijblijvend adviesgesprek en analyse van jouw wensen',
               'description' => 'Ik bespreek jouw doelen, doelgroep en wensen voor de website. Samen bepalen we de beste strategie om jouw online aanwezigheid te versterken.'
           ],
           [
               'number' => 2,
               'title' => 'Strategisch plan en wireframes',
               'description' => 'Op basis van de analyse maak ik een doordacht plan en wireframes. Deze vormen de basis voor een website die perfect aansluit bij jouw bedrijfsdoelen.'
           ],
           [
               'number' => 3,
               'title' => 'Design en feedback rondes',
               'description' => 'IK ontwerp een unieke website die past bij jouw huisstijl. Via feedback rondes zorg ik dat het design precies aansluit bij jouw wensen.'
           ],
           [
               'number' => 4,
               'title' => 'Professionele ontwikkeling en testing',
               'description' => 'Met de nieuwste technieken bouw ik jouw website. Ik test uitgebreid op gebruiksvriendelijkheid, snelheid en werking op alle apparaten.'
           ],
           [
               'number' => 5,
               'title' => 'Content implementatie en optimalisatie',
               'description' => 'Ik plaats jouw content en optimaliseren deze voor zoekmachines. Daarnaast zorg ik voor een gebruiksvriendelijk content management systeem.'
           ],
           [
               'number' => 6,
               'title' => 'Launch en nazorg',
               'description' => 'Na een laatste controle gaat jouw website live. Ik blijv bereikbaar voor support en zorgen voor regelmatige updates en onderhoud.'
           ],
       ]
    ])
    @endcomponent

    @component('components.cards', [
        'title' => 'Mijn kernwaarden',
        'subtitle' => 'Bij Develix staan kwaliteit, klantgerichtheid en innovatie centraal. Deze kernwaarden vormen de basis van mijn dienstverlening en helpen mij om klanten te voorzien van hoogwaardige digitale oplossingen die echt het verschil maken.',
        'cards' => [
            [
                'title' => 'Kwaliteit',
                'description' => 'Als WordPress specialist lever ik hoogwaardige websites die voldoen aan de laatste technische standaarden. Met oog voor detail en focus op conversie, zorg ik ervoor dat jouw website meetbaar resultaat oplevert.',
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

    @component('components.small-testimonial')
    @endcomponent

    @component('components.faq', [
        'title' => 'Veelgestelde Vragen',
        'description' => 'Bekijk de antwoorden op de meest gestelde vragen over het laten maken van een website.',
        'faqs' => \App\Models\Faq::active()->byCategory('website')->get(),
        'imageSrc' => asset('/images/develix.nl/angle-down.svg'),
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar om te beginnen?',
        'description' => 'Klaar voor een professionele website die converteert? Plan je gratis adviesgesprek',
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
