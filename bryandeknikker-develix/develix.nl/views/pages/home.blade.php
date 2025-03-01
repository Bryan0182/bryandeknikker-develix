@extends('develix::layouts.base')

@section('title', 'Home')
@section('subtitle', 'Digitale Partner voor Succes')
@section('meta_description', 'Welkom bij Develix – jouw partner voor webdesign, SEO en digitale applicaties. Ontdek hoe wij jouw bedrijf digitaal laten groeien.')
@section('meta_keywords', 'webdesign, SEO, applicaties, digitale groei, Develix')
@section('og_title', 'Home | Develix')
@section('og_description', 'Develix helpt jouw bedrijf groeien met op maat gemaakte digitale oplossingen, van webdesign tot SEO en meer.')
@section('og_image', asset('images/develix.nl/operating-system-vector.svg'))
@section('canonical', route('home'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/services.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/text.scss', 'resources/scss/global/testimonial.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Website laten maken? Ontwikkeling van conversiegerichte websites die resultaat leveren',
        'description' => 'Zoek je een professionele website die niet alleen mooi is, maar ook écht leads en klanten oplevert? Develix combineert technische expertise met strategisch inzicht om jouw online succes meetbaar te maken. Van concept tot realisatie ontwikkelen we websites die converteren.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Ontdek hoe wij jou helpen',
        'second_button_url' => route('services'),
        'imageSrc' => asset('images/develix.nl/operating-system-vector.svg'),
        'imageSrcDark' => asset('images/develix.nl/operating-system-vector-dark.svg'),
        'altText' => 'Ondersteunende foto voor website laten maken',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.services', [
        'title' => 'Jouw groei, onze expertise',
        'description' => 'Van website tot workflow: complete digitale oplossingen die meetbaar resultaat leveren',
        'services' => [
            [
                'title' => 'Websites die converteren',
                'description' => 'Conversiegerichte websites met focus op resultaat. Van eerste design tot technische realisatie.',
                'url' => route('website'),
                'image' => '/images/global/website-black.svg',
                'image-dark' => '/images/global/website.svg'
            ],
            [
                'title' => 'Maatwerk applicaties',
                'description' => 'Slimme automatisering voor efficiëntere werkprocessen. Op maat ontwikkeld voor jouw bedrijf.',
                'url' => route('application'),
                'image' => '/images/global/application-black.svg',
                'image-dark' => '/images/global/application.svg'
            ],
            [
                'title' => 'SEO & Online vindbaarheid',
                'description' => 'Technische optimalisatie en contentstrategieën die je hoger in Google rankings brengen.',
                'url' => route('seo'),
                'image' => '/images/global/seo-black.svg',
                'image-dark' => '/images/global/seo.svg'
            ],
            [
                'title' => 'Social Media Management',
                'description' => 'Strategische content en advertenties die jouw doelgroep écht bereiken en betrekken',
                'url' => route('social'),
                'image' => '/images/global/social-black.svg',
                'image-dark' => '/images/global/social.svg'
            ],
            [
                'title' => 'Design & Branding',
                'description' => 'Professioneel design dat vertrouwen wekt. Van logo tot complete merkidentiteit',
                'url' => route('design'),
                'image' => '/images/global/design-black.svg',
                'image-dark' => '/images/global/design.svg'
            ],
            [
                'title' => 'Hosting & Support',
                'description' => '24/7 monitoring, automatische backups en persoonlijke ondersteuning',
                'url' => route('hosting'),
                'image' => '/images/global/hosting-black.svg',
                'image-dark' => '/images/global/hosting.svg'
            ]
        ]
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Professionele website maken met focus op resultaat',
        'description' => 'Je website is meer dan een digitaal visitekaartje. Het is je belangrijkste verkoop- en marketingtool. Daarom ontwikkelen we websites die:',
        'usps' => [
            "Direct de juiste doelgroep aanspreken",
            "Bezoekers omzetten in klanten",
            "Technisch perfect presteren",
            "Automatisch meegroeien met je bedrijf"
        ],
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Complete digitale oplossingen voor ambitieuze ondernemers',
        'description' => 'Bij website ontwikkeling kijken we verder dan alleen het design. Je krijgt:',
        'usps' => [
            "Strategisch advies voor maximale online impact",
            "Datagedreven optimalisatie voor continue verbetering",
            "24/7 monitoring en proactieve support",
            "Maatwerk functionaliteit die je bedrijf versterkt"
        ],
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Technische expertise & innovatie voor maximaal resultaat',
        'description' => 'We combineren bewezen technieken met innovatieve oplossingen:',
        'usps' => [
            "SEO-optimalisatie voor betere vindbaarheid",
            "Conversie-optimalisatie voor meer leads",
            "Snelle, veilige hosting met automatische backups",
            "Maatwerk applicatie ontwikkeling voor procesautomatisering"
        ],
    ])
    @endcomponent

    @component('components.small-testimonial')
    @endcomponent

    @component('components.text-image', [
        'title' => 'Techniek & strategie voor meetbaar resultaat',
        'description' => 'Bij Develix bouwen we niet zomaar websites – we creëren digitale oplossingen die converteren. Met een unieke mix van technische expertise en strategisch inzicht helpen we ambitieuze ondernemers vooruit. Van pixel-perfect design tot slimme automatisering: alles wat we doen is datagedreven, meetbaar en gericht op jouw groei.',
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
        'description' => 'Plan direct je gratis adviesgesprek en ontdek hoe we jouw digitale ambities kunnen waarmaken.',
        'first_button' => 'Plan je gratis adviesgesprek',
        'first_button_url' => route('contact'),
        'second_button' => 'Bekijk hoe wij helpen',
        'second_button_url' => route('services'),
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
