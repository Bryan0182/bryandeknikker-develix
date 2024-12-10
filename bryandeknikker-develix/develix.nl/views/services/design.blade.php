@extends('develix::layouts.base')

@section('title', 'Design Diensten')
@section('subtitle', 'Professioneel en op maat gemaakt design')
@section('meta_description', 'Ontdek hoe Develix jouw merk kan versterken met op maat gemaakte designoplossingen. Van logo’s tot complete huisstijlen – wij brengen jouw visie tot leven.')
@section('meta_keywords', 'design diensten, professioneel design, huisstijl ontwerp, logo design, visuele identiteit')
@section('og_title', 'Design Diensten | Develix')
@section('og_description', 'Geef jouw merk een sterke visuele identiteit met de designoplossingen van Develix. Professioneel, creatief en altijd op maat.')
@section('og_image', asset('images/develix.nl/design-activities.svg'))
@section('canonical', route('design'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Design Diensten',
        'description' => 'Breng jouw merk tot leven met professionele designoplossingen van Develix. Van opvallende logo’s en complete huisstijlen tot aantrekkelijke visuals voor jouw website en marketing. Wij zorgen voor een design dat indruk maakt.',
        'first_button' => 'Start jouw design project',
        'first_button_url' => route('quote'),
        'second_button' => 'Bekijk wat klanten zeggen',
        'second_button_url' => route('testimonials'),
        'imageSrc' => asset('images/develix.nl/design-activities.svg'),
        'imageSrcDark' => asset('images/develix.nl/design-activities-dark.svg'),
        'altText' => 'Illustratie van designactiviteiten',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom investeren in design?',
        'description' => 'Een sterk en professioneel design is essentieel voor het succes van jouw merk. Het trekt niet alleen aandacht, maar creëert ook vertrouwen bij jouw doelgroep. Bij Develix zorgen wij ervoor dat jouw visuele identiteit perfect aansluit bij jouw merkwaarden en doelen.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat wij bieden',
        'description' => 'Van het ontwerpen van logo’s en huisstijlen tot op maat gemaakte visuals voor jouw website en social media – bij Develix krijg je design dat jouw merk versterkt. Onze creatieve oplossingen zijn altijd afgestemd op jouw wensen en doelgroep.',
    ])
    @endcomponent

    @component('components.cards', [
        'title' => 'Onze kernwaarden',
        'subtitle' => 'Bij Develix staan kwaliteit, klantgerichtheid en innovatie centraal. Deze kernwaarden vormen de basis van onze dienstverlening en helpen ons om klanten te voorzien van hoogwaardige designoplossingen die echt het verschil maken.',
        'cards' => [
            [
                'title' => 'Kwaliteit',
                'description' => 'Wij leveren hoogwaardige designs die voldoen aan de hoogste standaarden. Met oog voor detail zorgen wij ervoor dat jouw merk professioneel en uniek wordt gepresenteerd.',
                'image' => '/images/global/quality-black.svg',
                'image-dark' => '/images/global/quality.svg',
                'imageAlt' => 'Kwaliteitsgarantie icon',
            ],
            [
                'title' => 'Klantgerichtheid',
                'description' => 'Bij Develix staan jouw wensen centraal. Wij luisteren naar jouw ideeën en vertalen die naar een visuele identiteit die impact maakt.',
                'image' => '/images/global/customer-focus-black.svg',
                'image-dark' => '/images/global/customer-focus.svg',
                'imageAlt' => 'Klantgerichtheid icon',
            ],
            [
                'title' => 'Innovatie',
                'description' => 'Wij blijven continu leren en innoveren om de beste designoplossingen te kunnen bieden. Met een passie voor creativiteit helpen wij jouw merk groeien.',
                'image' => '/images/global/innovation-black.svg',
                'image-dark' => '/images/global/innovation.svg',
                'imageAlt' => 'Innovatie icon',
            ]
        ]
    ])
    @endcomponent

    @component('components.image-text', [
        'title' => 'Het verhaal van Develix',
        'description' => 'Develix is opgericht door Bryan de Knikker, een specialist in digitale oplossingen met een passie voor creatief design. Van concept tot uitvoering – wij helpen bedrijven om een sterke visuele identiteit op te bouwen die opvalt en resultaten oplevert.',
        'imageSrc' => asset('images/develix.nl/developer-story.svg'),
        'imageSrcDark' => asset('images/develix.nl/developer-story-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Klaar voor een nieuw design?',
        'description' => 'Wil je een sterk en professioneel design laten maken? Neem contact op voor een vrijblijvend gesprek en ontdek hoe wij jouw merk visueel sterker kunnen maken.',
        'first_button' => 'Start jouw design project',
        'first_button_url' => route('quote'),
        'second_button' => 'Meer weten over design?',
        'second_button_url' => route('contact')
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/global/timeline.js'])
        @endsection
