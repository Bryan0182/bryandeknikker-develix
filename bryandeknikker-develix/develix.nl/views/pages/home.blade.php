@extends('develix::layouts.base')

@section('title', 'Home')

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/services.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Jouw complete digitale partner voor succes',
        'description' => 'Welkom bij Develix – de plek waar we jouw digitale visie realiseren. Van websites die opvallen, SEO-strategieën die vindbaarheid verbeteren, en social media-boosts tot op maat gemaakte applicaties, professioneel design, en betrouwbare hosting. Met Develix heb je een partner die alles in huis heeft om jouw bedrijf online te laten groeien en bloeien.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Lees meer',
        'second_button_url' => route('over-develix'),
        'imageSrc' => asset('images/develix.nl/operating-system-vector.svg'),
        'imageSrcDark' => asset('images/develix.nl/operating-system-vector-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.services', [
        'title' => 'Diensten',
        'description' => 'Ontdek mijn professionele diensten die jouw bedrijf helpen groeien.',
        'services' => [
            [
                'title' => 'Website Laten Maken',
                'description' => 'Ik ontwerp en bouw gebruiksvriendelijke, responsive websites die werken op alle apparaten. Of het nu gaat om een eenvoudige site of een uitgebreide webshop, ik zorg voor een unieke online aanwezigheid die past bij jouw merk.',
                'url' => route('web'),
                'image' => '/images/global/globe-black.svg',
                'image-dark' => '/images/global/globe.svg'
            ],
            [
                'title' => 'Applicatie Laten Maken',
                'description' => 'Van mobiele apps tot complexe webapplicaties, ik ontwikkel op maat gemaakte oplossingen die aansluiten op de specifieke behoeften van jouw project. Ik gebruik moderne technologieën en zorg voor een soepele gebruikerservaring.',
                'url' => route('application'),
                'image' => '/images/global/application-black.svg',
                'image-dark' => '/images/global/application.svg'
            ],
            [
                'title' => 'SEO Werkzaamheden',
                'description' => 'Met mijn SEO-diensten zorg ik ervoor dat jouw website beter gevonden wordt in zoekmachines. Van technische optimalisatie tot content creatie – ik help je om hoger te ranken en meer verkeer te genereren.',
                'url' => route('seo'),
                'image' => '/images/global/magnifying-glass-black.svg',
                'image-dark' => '/images/global/magnifying-glass.svg'
            ],
            [
                'title' => 'Social Werkzaamheden',
                'description' => 'Ik ondersteun je met het beheren van social media-kanalen en het creëren van een effectieve online strategie. Laat je social media een krachtige tool worden om met je doelgroep te communiceren en je merk te versterken.',
                'url' => route('social'),
                'image' => '/images/global/social-black.svg',
                'image-dark' => '/images/global/social.svg'
            ],
            [
                'title' => 'Design Werkzaamheden',
                'description' => 'Met oog voor detail creëer ik aantrekkelijke ontwerpen die jouw merk op een professionele manier presenteren. Van logo’s tot complete huisstijlen – ik zorg ervoor dat jouw visuele identiteit perfect aansluit bij je doelgroep.',
                'url' => route('design'),
                'image' => '/images/global/webdesign-black.svg',
                'image-dark' => '/images/global/webdesign.svg'
            ],
            [
                'title' => 'Hosting',
                'description' => 'Ik bied betrouwbare en snelle hostingpakketten, inclusief technische ondersteuning, zodat je website altijd online is en optimaal presteert. Ontzorg jezelf en laat het beheer van je hosting aan mij over.',
                'url' => route('hosting'),
                'image' => '/images/global/server-black.svg',
                'image-dark' => '/images/global/server.svg'
            ]
        ]
    ])
    @endcomponent

    @component('components.text-image', [
        'title' => 'Wil je een simpele applicatie laten maken?',
        'description' => 'Of je nu een eenvoudige tool nodig hebt om tijd te besparen of een applicatie voor specifieke taken, ik help je graag. Neem vandaag nog contact op en ontdek de mogelijkheden!',
        'imageSrc' => asset('images/develix.nl/operating-system-vector.svg'),
        'imageSrcDark' => asset('images/develix.nl/operating-system-vector-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent
@endsection

@section('page-specific-js')
{{--    @vite(['resources/js/home.js'])--}}
@endsection
