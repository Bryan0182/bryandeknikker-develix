@extends('develix::layouts.base')

@section('title', 'Over Develix')
@section('subtitle', 'Jouw digitale partner voor groei')
@section('meta_description', 'Ontdek hoe Develix bedrijven helpt groeien met maatwerk digitale oplossingen. Lees meer over onze missie, visie en waarden.')
@section('meta_keywords', 'Over Develix, digitale partner, webontwikkeling, SEO, maatwerk oplossingen')
@section('og_title', 'Over Develix | Jouw digitale partner')
@section('og_description', 'Bij Develix draait alles om kwaliteit, klantgerichtheid en innovatie. Ontdek hoe wij bedrijven helpen groeien met maatwerk digitale oplossingen.')
@section('og_image', asset('images/develix.nl/operating-system-vector.svg'))
@section('canonical', route('about-develix'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Over Develix',
        'description' => 'Bij Develix draait alles om het leveren van hoogwaardige digitale oplossingen die jouw bedrijf laten groeien. Mijn missie is om jou te helpen bij het bouwen van een sterke online aanwezigheid, beter gevonden te worden en je merk te versterken. Met een focus op kwaliteit en klantgerichtheid, lever ik maatwerkoplossingen die echt impact maken.',
        'first_button' => 'Leer onze missie & visie kennen',
        'first_button_url' => route('mission-vision'),
        'second_button' => 'Neem contact op',
        'second_button_url' => route('contact'),
        'imageSrc' => asset('images/develix.nl/operating-system-vector.svg'),
        'imageSrcDark' => asset('images/develix.nl/operating-system-vector-dark.svg'),
        'altText' => 'Illustratie van digitale groei',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat maakt Develix uniek?',
        'description' => 'Develix onderscheidt zich door een persoonlijke benadering, duidelijke communicatie en een focus op kwaliteit. Met brede expertise in technologie en een passie voor digitale oplossingen, bieden wij diensten die echt het verschil maken. Of je nu een kleine ondernemer bent of een groeiend bedrijf – wij staan voor je klaar.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Onze missie en visie',
        'description' => 'De missie van Develix is om bedrijven te ondersteunen bij hun digitale groei door het leveren van kwalitatieve, klantgerichte oplossingen. Onze visie is om een betrouwbare partner te zijn die bedrijven helpt om online succesvol te zijn door middel van innovatie en maatwerk.',
    ])
    @endcomponent

    @component('components.cards', [
        'title' => 'Onze kernwaarden',
        'subtitle' => 'De kernwaarden van Develix vormen de basis van alles wat wij doen. Ze leiden onze beslissingen, onze samenwerking en de oplossingen die wij bieden.',
        'cards' => [
            [
                'title' => 'Kwaliteit',
                'description' => 'Wij streven naar het hoogste niveau van kwaliteit in al onze diensten en oplossingen. Onze focus ligt op precisie en aandacht voor detail, zodat elk project een succes wordt.',
                'image' => '/images/global/quality-black.svg',
                'image-dark' => '/images/global/quality.svg',
                'imageAlt' => 'Kwaliteitsgarantie icon',
            ],
            [
                'title' => 'Klantgerichtheid',
                'description' => 'Jouw wensen en behoeften staan centraal. Bij Develix luisteren wij aandachtig en werken wij samen om oplossingen te creëren die perfect aansluiten op jouw doelen.',
                'image' => '/images/global/customer-focus-black.svg',
                'image-dark' => '/images/global/customer-focus.svg',
                'imageAlt' => 'Klantgerichtheid icon',
            ],
            [
                'title' => 'Innovatie',
                'description' => 'Met een passie voor technologie en creativiteit blijven wij leren en innoveren. Wij gebruiken de nieuwste tools en methoden om jou de beste oplossingen te bieden.',
                'image' => '/images/global/innovation-black.svg',
                'image-dark' => '/images/global/innovation.svg',
                'imageAlt' => 'Innovatie icon',
            ]
        ]
    ])
    @endcomponent

    @component('components.timeline', [
       'title' => 'De mijlpalen van Develix',
       'description' => 'Develix heeft in zijn ontwikkeling diverse belangrijke mijlpalen bereikt. Deze successen weerspiegelen onze groei en de impact die wij hebben gemaakt voor onze klanten.',
       'timelineItems' => [
           [
               'number' => 1,
               'title' => 'Oprichting van Develix',
               'date' => 'December 2024',
               'description' => 'Het begin van Develix, opgericht met een visie op klantgerichte digitale oplossingen. Vanaf het eerste moment richten wij ons op het creëren van sterke, op maat gemaakte websites en applicaties om ondernemers te helpen groeien.'
           ],
           [
               'number' => 2,
               'title' => 'Lancering van de website',
               'date' => 'December 2024',
               'description' => 'De ontwikkeling en lancering van de eerste Develix-website markeert een belangrijke stap. Hiermee presenteren wij onszelf online en bouwen wij aan een sterke merkidentiteit die vertrouwen en professionaliteit uitstraalt.'
           ],
       ]
   ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Wil je meer weten over ons?',
        'description' => 'Neem contact op voor meer informatie over onze diensten en ontdek hoe wij jouw bedrijf kunnen helpen groeien. Wij staan klaar om jouw vragen te beantwoorden!',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Onze missie en visie',
        'second_button_url' => route('mission-vision')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/timeline.js'])
        @endsection
