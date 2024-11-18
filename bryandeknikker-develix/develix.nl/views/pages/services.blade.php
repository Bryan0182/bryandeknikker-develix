@extends('develix::layouts.base')

@section('title', 'Diensten')

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/services.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/text.scss', 'resources/scss/global/features.scss', 'resources/scss/global/faq.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Diensten die jouw digitale ambities waarmaken',
        'description' => 'Bij Develix bied ik een breed scala aan digitale diensten, afgestemd op jouw unieke doelen en ambities. Van strategisch ontworpen websites en effectieve SEO-oplossingen tot op maat gemaakte applicaties en krachtige social media campagnes – alles wat je nodig hebt om online te groeien en je te onderscheiden. Ontdek hoe ik jouw bedrijf naar een hoger digitaal niveau kan tillen met op maat gemaakte oplossingen die echt impact maken.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Lees meer',
        'second_button_url' => route('about-develix'),
        'imageSrc' => asset('images/develix.nl/software-code.svg'),
        'imageSrcDark' => asset('images/develix.nl/software-code-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.features', [
        'title' => 'Ontdek mijn expertise',
        'description' => 'Bij Develix geloof ik in de kracht van maatwerk en kwaliteit om bedrijven online te laten groeien. Van het ontwikkelen van websites die niet alleen functioneel zijn maar ook visueel inspireren, tot het optimaliseren van je online zichtbaarheid met doordachte SEO-strategieën – ik zet mijn kennis in voor jouw succes. Mijn expertise omvat tevens social media, applicatieontwikkeling en design, elk met de focus op gebruiksvriendelijkheid en merkbeleving. Met Develix creëer je een solide digitale basis die niet alleen opvalt, maar ook vertrouwen wekt en duurzame groei stimuleert.',
        'features' => [
            [
                'image' => '/images/global/website.svg',
                'image-dark' => '/images/global/website-black.svg',
                'imageAlt' => 'Website icon',
                'title' => 'Website',
                'description' => 'Een professionele website die jouw merk en visie perfect vertaalt naar een gebruiksvriendelijke, responsieve ervaring.',
            ],
            [
                'image' => '/images/global/seo.svg',
                'image-dark' => '/images/global/seo-black.svg',
                'imageAlt' => 'SEO icon',
                'title' => 'SEO',
                'description' => 'Optimaliseer je online zichtbaarheid en bereik een hogere positie in zoekresultaten met effectieve SEO-strategieën.',
            ],
            [
                'image' => '/images/global/social.svg',
                'image-dark' => '/images/global/social-black.svg',
                'imageAlt' => 'Social icon',
                'title' => 'Social',
                'description' => 'Vergroot je bereik en versterk je merk op sociale media met doelgerichte strategieën en consistente content.',
            ],
            [
                'image' => '/images/global/design.svg',
                'image-dark' => '/images/global/design-black.svg',
                'imageAlt' => 'Design icon',
                'title' => 'Design',
                'description' => 'Een uniek en op maat gemaakt design dat jouw merk visueel onderscheidt, bezoekers direct aanspreekt en een blijvende indruk achterlaat.',
            ],
            [
                'image' => '/images/global/application.svg',
                'image-dark' => '/images/global/application-black.svg',
                'imageAlt' => 'Application icon',
                'title' => 'Applicatie',
                'description' => 'Slimme, op maat gemaakte applicaties die bedrijfsprocessen optimaliseren en jouw ideeën tot leven brengen.',
            ],
            [
                'image' => '/images/global/hosting.svg',
                'image-dark' => '/images/global/hosting-black.svg',
                'imageAlt' => 'Hosting icon',
                'title' => 'Hosting',
                'description' => 'Betrouwbare en veilige hosting om je website altijd online en up-to-date te houden, met focus op snelheid en veiligheid.',
            ],
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
        'second_button_url' => route('about-develix'),
    ])
    @endcomponent

    @component('components.faq', [
        'title' => 'Veelgestelde Vragen',
        'description' => 'Vind hier antwoorden op de meest voorkomende vragen over onze diensten.',
        'faqs' => \App\Models\Faq::active()->byCategory('general')->get(),
        'imageSrc' => asset('/images/develix.nl/angle-down.svg'),
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/faq.js'])
@endsection
