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
        'title' => 'Digitale oplossingen die jouw bedrijf laten groeien',
        'description' => 'Wil jij een professionele website, beter vindbaar zijn in Google of je bedrijf digitaal laten groeien? Bij Develix bouwen we maatwerkoplossingen die aansluiten op jouw doelen. Van conversiegerichte websites tot SEO en applicaties – wij zorgen dat jouw bedrijf online écht impact maakt.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Ontdek hoe wij jou helpen',
        'second_button_url' => route('services'),
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
                'title' => 'Website',
                'description' => 'Laat een professionele, snelle en SEO-geoptimaliseerde website maken die klanten aantrekt en omzet verhoogt. Wij ontwerpen websites die jouw bedrijf online laten groeien – met een sterk design en de nieuwste technieken.',
                'url' => route('website'),
                'image' => '/images/global/website-black.svg',
                'image-dark' => '/images/global/website.svg'
            ],
            [
                'title' => 'Applicatie',
                'description' => 'Automatiseer processen en werk efficiënter met een op maat gemaakte applicatie. Van interne tools tot klantgerichte webapplicaties – wij ontwikkelen slimme en schaalbare oplossingen die perfect aansluiten op jouw bedrijfsdoelen. Onze applicaties verbeteren workflows, verhogen productiviteit en zorgen voor een soepele gebruikerservaring.',
                'url' => route('application'),
                'image' => '/images/global/application-black.svg',
                'image-dark' => '/images/global/application.svg'
            ],
            [
                'title' => 'SEO',
                'description' => 'Sta bovenaan in Google en trek meer klanten aan met een doordachte SEO-strategie. Wij optimaliseren jouw website technisch en inhoudelijk, zodat je beter vindbaar wordt en meer leads genereert. Van snelle laadtijden tot sterke content – wij zorgen dat jouw bedrijf opvalt in de zoekresultaten.',
                'url' => route('seo'),
                'image' => '/images/global/seo-black.svg',
                'image-dark' => '/images/global/seo.svg'
            ],
            [
                'title' => 'Social',
                'description' => 'Bouw een sterk merk op social media en vergroot je zichtbaarheid. Wij creëren content, beheren advertenties en ontwikkelen strategieën die jouw doelgroep aanspreken en betrokken houden. Laat social media voor je werken met een consistente, professionele uitstraling die jouw bedrijf versterkt.',
                'url' => route('social'),
                'image' => '/images/global/social-black.svg',
                'image-dark' => '/images/global/social.svg'
            ],
            [
                'title' => 'Design',
                'description' => 'Maak indruk met een uniek en professioneel design dat jouw merk versterkt. Wij ontwerpen alles van logo’s tot complete huisstijlen, zodat jouw bedrijf herkenbaar en onderscheidend blijft. Met een sterk visueel concept zorg je voor een consistente merkbeleving die vertrouwen en professionaliteit uitstraalt.',
                'url' => route('design'),
                'image' => '/images/global/design-black.svg',
                'image-dark' => '/images/global/design.svg'
            ],
            [
                'title' => 'Hosting',
                'description' => 'Zorg voor een snelle, veilige en stabiele website zonder zorgen. Wij bieden betrouwbare hosting met 24/7 uptime monitoring, automatische back-ups en technische ondersteuning. Focus op je bedrijf, terwijl wij zorgen voor de prestaties en beveiliging van jouw website.',
                'url' => route('hosting'),
                'image' => '/images/global/hosting-black.svg',
                'image-dark' => '/images/global/hosting.svg'
            ]
        ]
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Een betrouwbare partner voor digitale groei',
        'description' => 'Bij Develix draait alles om kwaliteit, klantgerichtheid en resultaat. Wij helpen ondernemers met op maat gemaakte digitale oplossingen die niet alleen mooi zijn, maar ook effectief werken. Of je nu een sterke online aanwezigheid wilt opbouwen, je vindbaarheid in zoekmachines wilt verbeteren of efficiënter wilt werken met slimme applicaties – wij bieden maatwerk dat écht impact maakt.',
        'usps' => [
            "100% Maatwerk & Persoonlijk – Oplossingen afgestemd op jouw bedrijf en doelen.",
            "SEO & Conversiegericht – Websites en strategieën die klanten opleveren.",
            "Technisch Sterk & Veilig – De nieuwste technologieën en optimale prestaties.",
            "Volledige Ondersteuning – Van strategie tot onderhoud, wij staan klaar."
        ],
    ])
    @endcomponent

    @component('components.small-testimonial')
    @endcomponent

    @component('components.text-image', [
        'title' => 'Digitale strategieën die werken',
        'description' => 'Bij Develix combineren we techniek en strategie om bedrijven online te laten groeien. Van conversiegerichte websites tot slimme automatiseringen – wij helpen ondernemers met digitale oplossingen die écht impact maken. Met een datagedreven aanpak zorgen we dat jouw bedrijf zichtbaar wordt, beter scoort in Google en klaar is voor de toekomst.',
        'imageSrc' => asset('images/develix.nl/code-languages.svg'),
        'imageSrcDark' => asset('images/develix.nl/code-languages-dark.svg'),
        'altText' => 'Foto ter illustratie.',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Twijfel je nog? Wij helpen je graag verder!',
        'description' => 'Wil je een website laten maken of je online vindbaarheid verbeteren? Laten we samen kijken naar de beste oplossing voor jouw bedrijf!',
        'first_button' => 'Vraag een gratis adviesgesprek aan',
        'first_button_url' => route('contact'),
        'second_button' => 'Bekijk hoe wij helpen',
        'second_button_url' => route('services'),
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
