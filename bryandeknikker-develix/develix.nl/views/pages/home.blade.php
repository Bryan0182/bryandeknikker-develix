@extends('develix::layouts.base')

@section('title', 'Home')
@section('subtitle', 'Digitale Partner voor Succes')
@section('meta_description', 'Welkom bij Develix – jouw partner voor webdesign, SEO en digitale applicaties. Ontdek hoe ik jouw bedrijf digitaal laat groeien.')
@section('meta_keywords', 'webdesign, SEO, applicaties, digitale groei, Develix')
@section('og_title', 'Home | Develix')
@section('og_description', 'Develix helpt jouw bedrijf groeien met op maat gemaakte digitale oplossingen, van webdesign tot SEO en meer.')
@section('og_image', asset('images/develix.nl/operating-system-vector.svg'))
@section('canonical', route('home'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/featured-services.scss', 'resources/scss/global/services.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/text.scss', 'resources/scss/global/testimonial.scss', 'resources/scss/global/text-image.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Website laten maken? Samen creëren we een site die echt resultaat oplevert.',
        'description' => 'Zoek je een professionele website die niet alleen mooi is, maar ook écht leads en klanten oplevert? Develix combineert technische expertise met strategisch inzicht om jouw online succes meetbaar te maken. Van concept tot realisatie ontwikkel ik websites die converteren.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Ontdek hoe ik jou kan helpen',
        'second_button_url' => route('services'),
        'imageSrc' => asset('images/develix.nl/operating-system-vector.svg'),
        'imageSrcDark' => asset('images/develix.nl/operating-system-vector-dark.svg'),
        'altText' => 'Ondersteunende foto voor website laten maken',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.featured-services', [
        'title' => 'Jouw groei, mijn expertise',
        'description' => 'Van website tot workflow: complete digitale oplossingen die meetbaar resultaat leveren',
        'plans' => [
            [
                'title' => 'SEO & Online vindbaarheid',
                'description' => 'Technische optimalisatie en contentstrategieën die je hoger in Google rankings brengen.',
                'button_text' => 'Verbeter mijn vindbaarheid',
                'url' => route('seo'),
                'features_title' => 'Wat je krijgt:',
                'features' => [
                    'Technische SEO optimalisatie',
                    'Sterke contentstrategie',
                    'Hogere Google-positie',
                    'Lokale vindbaarheid versterken',
                    'SEO-analyse & rapportage',
                    'Focus op meetbaar resultaat'
                ]
            ],
            [
                'title' => 'Websites die converteren',
                'description' => 'Conversiegerichte websites met focus op resultaat. Van eerste design tot technische realisatie.',
                'button_text' => 'Start met jouw website',
                'url' => route('website'),
                'popular' => true,
                'popular_text' => 'Populair',
                'features_title' => 'Wat je krijgt:',
                'features' => [
                    'Maatwerk design gericht op conversie',
                    'Supersnelle laadtijden',
                    'Mobielvriendelijk en toegankelijk',
                    'Geoptimaliseerd voor SEO',
                    'Gebruiksvriendelijke navigatie',
                    'Integratie met contactformulieren & analytics'
                ]
            ],
            [
                'title' => 'Maatwerk applicatie',
                'description' => 'Slimme automatisering voor efficiëntere werkprocessen. Op maat ontwikkeld voor jouw bedrijf.',
                'button_text' => 'Ontdek maatwerk oplossingen',
                'url' => route('application'),
                'features_title' => 'Wat je krijgt:',
                'features' => [
                    'Applicatie op maat van jouw proces',
                    'Automatisering van terugkerende taken',
                    'Intuïtieve en schaalbare oplossing',
                    'Koppelingen met je bestaande tools',
                    'Veilig en onderhoudsvriendelijk',
                    'Ondersteuning en updates op maat'
                ]
            ]
        ]
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Professionele website maken met focus op resultaat',
        'description' => 'Je website is meer dan een digitaal visitekaartje. Het is je belangrijkste verkoop- en marketingtool. Daarom ontwikkel ik websites die:',
        'usps' => [
            ['icon' => '🎯', 'text' => 'Direct de juiste doelgroep aanspreken'],
            ['icon' => '🤝', 'text' => 'Bezoekers omzetten in klanten'],
            ['icon' => '⚙️', 'text' => 'Technisch perfect presteren'],
            ['icon' => '📈', 'text' => 'Automatisch meegroeien met je bedrijf'],
        ],
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Complete digitale oplossingen voor ambitieuze ondernemers',
        'description' => 'Bij website ontwikkeling kijk ik verder dan alleen het design. Je krijgt:',
        'usps' => [
            ['icon' => '🧠', 'text' => 'Strategisch advies voor maximale online impact'],
            ['icon' => '📊', 'text' => 'Datagedreven optimalisatie voor continue verbetering'],
            ['icon' => '🛠️', 'text' => '24/7 monitoring en proactieve support'],
            ['icon' => '⚙️', 'text' => 'Maatwerk functionaliteit die je bedrijf versterkt'],
        ],
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Technische expertise & innovatie voor maximaal resultaat',
        'description' => 'Ik combineer bewezen technieken met innovatieve oplossingen:',
        'usps' => [
            ['icon' => '🔍', 'text' => 'SEO-optimalisatie voor betere vindbaarheid'],
            ['icon' => '🎯', 'text' => 'Conversie-optimalisatie voor meer leads'],
            ['icon' => '🔒', 'text' => 'Snelle, veilige hosting met automatische backups'],
            ['icon' => '💡', 'text' => 'Maatwerk applicatie ontwikkeling voor procesautomatisering'],
        ],
    ])
    @endcomponent

    @component('components.small-testimonial')
    @endcomponent

    @component('components.text-image', [
        'title' => 'Techniek & strategie voor meetbaar resultaat',
        'description' => 'Bij Develix bouw ik niet zomaar websites – ik creëer digitale oplossingen die converteren. Met een unieke mix van technische expertise en strategisch inzicht help ik ambitieuze ondernemers vooruit. Van pixel-perfect design tot slimme automatisering: alles wat ik doe is datagedreven, meetbaar en gericht op jouw groei.',
        'imageSrc' => asset('images/develix.nl/code-languages.svg'),
        'imageSrcDark' => asset('images/develix.nl/code-languages-dark.svg'),
        'altText' => 'Foto ter illustratie.',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar om je online aanwezigheid naar het volgende niveau te tillen? ',
        'highlight_word' => 'volgende niveau',
        'description' => 'Plan direct je gratis adviesgesprek en ontdek hoe ik jouw digitale ambities kan waarmaken.',
        'first_button' => 'Plan je gratis adviesgesprek',
        'first_button_url' => route('contact'),
        'second_button' => 'Bekijk hoe ik jou kan helpen',
        'second_button_url' => route('services'),
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
