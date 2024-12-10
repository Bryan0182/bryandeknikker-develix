@extends('develix::layouts.base')

@section('title', 'Missie en Visie')
@section('subtitle', 'Onze missie en visie voor digitale groei')
@section('meta_description', 'Ontdek de missie en visie van Develix. Wij helpen bedrijven groeien door kwalitatieve, innovatieve en klantgerichte digitale oplossingen.')
@section('meta_keywords', 'missie Develix, visie Develix, digitale groei, innovatie, klantgerichtheid')
@section('og_title', 'Missie en Visie | Develix')
@section('og_description', 'De missie van Develix is bedrijven helpen groeien met klantgerichte en innovatieve digitale oplossingen. Lees meer over onze visie.')
@section('og_image', asset('images/develix.nl/mission-vision.svg'))
@section('canonical', route('mission-vision'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Onze Missie en Visie',
        'description' => 'Bij Develix geloven wij in de kracht van technologie om bedrijven te laten groeien. Onze missie en visie zijn de drijvende kracht achter alles wat wij doen. Ontdek hoe wij werken om jouw bedrijf te ondersteunen en succesvoller te maken in de digitale wereld.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Over Develix',
        'second_button_url' => route('about-develix'),
        'imageSrc' => asset('images/develix.nl/mission-vision.svg'),
        'imageSrcDark' => asset('images/develix.nl/mission-vision-dark.svg'),
        'altText' => 'Illustratie van missie en visie',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Onze Missie',
        'description' => 'Onze missie is om bedrijven te ondersteunen bij hun digitale groei door het bieden van hoogwaardige, innovatieve en klantgerichte oplossingen. Wij geloven in het creëren van waarde door technologie in te zetten op een manier die bedrijven helpt om zichtbaarder, efficiënter en succesvoller te worden.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Onze Visie',
        'description' => 'Onze visie is om een toonaangevende digitale partner te zijn voor bedrijven die willen groeien in een steeds veranderende wereld. Wij streven ernaar om de nieuwste technologieën en methodologieën te gebruiken om bedrijven te helpen hun doelen te bereiken en een blijvende impact te maken.',
    ])
    @endcomponent

    @component('components.cards', [
        'title' => 'Onze Kernwaarden',
        'subtitle' => 'De kernwaarden van Develix vormen de basis van onze missie en visie. Deze waarden leiden al onze beslissingen en interacties.',
        'cards' => [
            [
                'title' => 'Kwaliteit',
                'description' => 'Wij streven naar perfectie in alles wat wij doen. Onze oplossingen worden ontwikkeld met aandacht voor detail en focus op resultaten.',
                'image' => '/images/global/quality-black.svg',
                'image-dark' => '/images/global/quality.svg',
                'imageAlt' => 'Kwaliteitsgarantie icon',
            ],
            [
                'title' => 'Innovatie',
                'description' => 'Wij geloven in de kracht van innovatie om bedrijven voorop te laten lopen. Door nieuwe technologieën te omarmen, creëren wij impactvolle oplossingen.',
                'image' => '/images/global/innovation-black.svg',
                'image-dark' => '/images/global/innovation.svg',
                'imageAlt' => 'Innovatie icon',
            ],
            [
                'title' => 'Klantgerichtheid',
                'description' => 'Bij Develix draait alles om onze klanten. Wij luisteren naar jouw behoeften en leveren oplossingen die aansluiten bij jouw specifieke doelen.',
                'image' => '/images/global/customer-focus-black.svg',
                'image-dark' => '/images/global/customer-focus.svg',
                'imageAlt' => 'Klantgerichtheid icon',
            ]
        ]
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar om samen te groeien?',
        'description' => 'Neem contact op om meer te weten over onze missie en visie en ontdek hoe wij jouw bedrijf kunnen helpen groeien in de digitale wereld.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Bekijk onze diensten',
        'second_button_url' => route('services')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
