@extends('develix::layouts.base')

@section('title', 'Cookiebeleid')
@section('subtitle', 'Informatie over ons cookiegebruik')
@section('meta_description', 'Lees het cookiebeleid van Develix en ontdek hoe wij cookies gebruiken om uw gebruikerservaring te verbeteren.')
@section('meta_keywords', 'cookiebeleid, cookies, Develix, privacy, gebruikerservaring')
@section('og_title', 'Cookiebeleid | Develix')
@section('og_description', 'Ontdek hoe Develix cookies gebruikt en hoe u uw voorkeuren kunt beheren. Lees ons cookiebeleid voor meer informatie.')
@section('og_image', asset('images/develix.nl/cookies.svg'))
@section('canonical', route('cookie-policy'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Cookiebeleid van Develix',
        'description' => 'Bij Develix gebruiken we cookies om uw ervaring op onze website te verbeteren. In dit cookiebeleid leest u welke cookies wij gebruiken, waarom we ze gebruiken en hoe u uw cookie-instellingen kunt beheren.',
        'imageSrc' => asset('images/develix.nl/cookies.svg'),
        'imageSrcDark' => asset('images/develix.nl/cookies-dark.svg'),
        'altText' => 'Illustratie van cookiegebruik',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat zijn cookies?',
        'description' => 'Cookies zijn kleine tekstbestanden die worden opgeslagen op uw apparaat wanneer u een website bezoekt. Ze helpen ons om uw voorkeuren te onthouden, statistieken te verzamelen en de functionaliteit van de website te verbeteren.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Welke cookies gebruiken wij?',
        'description' => '<ul>
            <li><strong>Noodzakelijke cookies:</strong> Deze cookies zijn essentieel voor de basisfunctionaliteiten van onze website, zoals navigatie en toegang tot beveiligde delen.</li>
            <li><strong>Analytische cookies:</strong> Deze cookies helpen ons om het gebruik van onze website te analyseren en te verbeteren door statistieken te verzamelen.</li>
            <li><strong>Marketingcookies:</strong> Deze cookies worden gebruikt om advertenties relevanter te maken voor u en om uw interesses beter te begrijpen.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom gebruiken wij cookies?',
        'description' => '<ul>
            <li>Om onze website optimaal te laten functioneren</li>
            <li>Om uw voorkeuren en instellingen te onthouden</li>
            <li>Om de prestaties van onze website te analyseren en te verbeteren</li>
            <li>Om advertenties te personaliseren (indien van toepassing)</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Hoe kunt u cookies beheren?',
        'description' => 'U kunt cookies beheren via de instellingen van uw browser. Hier kunt u bestaande cookies verwijderen en instellen of nieuwe cookies automatisch moeten worden geweigerd. Houd er rekening mee dat het uitschakelen van cookies de functionaliteit van onze website kan beïnvloeden.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Cookies van derden',
        'description' => 'Op onze website kunnen ook cookies van derden worden geplaatst, bijvoorbeeld door Google Analytics of social media platforms zoals Facebook. Deze cookies vallen onder het privacybeleid van deze derde partijen. Wij raden aan om hun beleid te lezen voor meer informatie.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wijzigingen in ons cookiebeleid',
        'description' => 'Wij behouden ons het recht voor om dit cookiebeleid te wijzigen. Wij raden u aan om deze pagina regelmatig te controleren voor de meest recente versie. Dit beleid is voor het laatst bijgewerkt op 10 december 2024.',
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Vragen over ons cookiebeleid?',
        'description' => 'Neem contact op als u meer wilt weten over hoe wij cookies gebruiken of hoe u uw instellingen kunt beheren.',
        'first_button' => 'Neem contact op',
        'first_button_url' => route('contact'),
        'second_button' => 'Lees ons privacybeleid',
        'second_button_url' => route('privacy-policy'),
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
