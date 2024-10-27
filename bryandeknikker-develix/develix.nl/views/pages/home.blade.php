@extends('develix::layouts.base')

@section('title', 'Home')

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/services.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/text.scss'])
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

    @component('components.text', [
        'title' => 'Een betrouwbare partner voor digitale groei',
        'description' => 'Bij Develix draait alles om kwaliteit en klantgerichtheid. Met mijn ervaring en een passie voor technologie, ondersteunen ik ondernemers om digitaal te groeien en zich te onderscheiden. Ik luisteren naar jouw wensen, denken proactief mee en leveren oplossingen die écht aansluiten bij jouw doelen. Of het nu gaat om een sterke online aanwezigheid, betere vindbaarheid of een unieke visuele identiteit – Develix biedt maatwerk met aandacht voor detail en resultaatgerichtheid, zodat jouw bedrijf zich optimaal kan profileren in de digitale wereld.',
    ])
    @endcomponent

    @component('components.text-image', [
        'title' => 'Digitale strategieën die werken',
        'description' => 'Bij Develix gaan we verder dan alleen technische oplossingen. We creëren digitale ervaringen die jouw merk versterken en jouw doelen ondersteunen. Met een scherp oog voor detail en innovatie helpen we jouw bedrijf om zichtbaar te worden en te groeien in een digitale wereld die continu verandert. Vertrouw op ons voor strategisch advies, betrouwbare technologie en een aanpak die echt werkt voor jouw onderneming.',
        'imageSrc' => asset('images/develix.nl/code-languages.svg'),
        'imageSrcDark' => asset('images/develix.nl/code-languages-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Twijfel je nog?',
        'description' => 'Heb je nog vragen of twijfel je over de mogelijkheden? Neem gerust contact op en ik help je graag verder. Samen bespreken we jouw wensen en bekijken we hoe ik je het beste kan ondersteunen.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Lees meer',
        'second_button_url' => route('over-develix'),
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
