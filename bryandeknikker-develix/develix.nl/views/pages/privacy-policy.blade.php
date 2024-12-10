@extends('develix::layouts.base')

@section('title', 'Privacybeleid')
@section('subtitle', 'Uw privacy, onze prioriteit')
@section('meta_description', 'Lees het privacybeleid van Develix. Ontdek hoe wij omgaan met uw gegevens en deze beschermen volgens de geldende wetgeving.')
@section('meta_keywords', 'privacybeleid, Develix, gegevensbescherming, AVG, privacy')
@section('og_title', 'Privacybeleid | Develix')
@section('og_description', 'Ontdek hoe Develix uw gegevens beschermt volgens de AVG. Lees ons privacybeleid voor meer informatie.')
@section('og_image', asset('images/develix.nl/privacy.svg'))
@section('canonical', route('privacy-policy'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Privacybeleid van Develix',
        'description' => 'Bij Develix hechten wij veel waarde aan de privacy van onze klanten en websitebezoekers. In dit privacybeleid leggen wij uit hoe wij uw persoonsgegevens verwerken en beschermen volgens de Algemene Verordening Gegevensbescherming (AVG).',
        'imageSrc' => asset('images/develix.nl/privacy.svg'),
        'imageSrcDark' => asset('images/develix.nl/privacy-dark.svg'),
        'altText' => 'Illustratie van privacybeleid',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wie zijn wij?',
        'description' => 'Develix is een eenmanszaak gevestigd in Nederland. Wij bieden digitale oplossingen zoals webontwikkeling, SEO, en applicatieontwikkeling. In het kader van onze dienstverlening verwerken wij persoonsgegevens volgens de geldende wetgeving.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Welke gegevens verzamelen wij?',
        'description' => '<ul>
            <li>Naam en contactgegevens, zoals e-mailadres en telefoonnummer</li>
            <li>Informatie over uw bedrijf, zoals bedrijfsnaam en KvK-nummer</li>
            <li>Gegevens die u invult via onze contactformulieren</li>
            <li>Technische gegevens zoals IP-adressen en browserinformatie</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom verzamelen wij uw gegevens?',
        'description' => '<ul>
            <li>Om onze diensten te leveren en met u te communiceren</li>
            <li>Voor het verbeteren van onze website en diensten</li>
            <li>Om aan wettelijke verplichtingen te voldoen</li>
            <li>Voor marketingdoeleinden, mits u hier toestemming voor heeft gegeven</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Hoe beschermen wij uw gegevens?',
        'description' => 'Wij nemen de beveiliging van uw gegevens serieus. Daarom maken wij gebruik van beveiligingsmaatregelen zoals encryptie, beveiligde servers en toegangscontroles om uw gegevens te beschermen tegen ongeautoriseerde toegang, verlies of diefstal.',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Uw rechten',
        'description' => '<ul>
            <li><strong>Recht op inzage:</strong> U kunt opvragen welke gegevens wij van u bewaren.</li>
            <li><strong>Recht op correctie:</strong> U kunt verzoeken om incorrecte gegevens te corrigeren.</li>
            <li><strong>Recht op verwijdering:</strong> U kunt ons vragen om uw gegevens te verwijderen.</li>
            <li><strong>Recht op bezwaar:</strong> U kunt bezwaar maken tegen het gebruik van uw gegevens voor marketingdoeleinden.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Contact opnemen',
        'description' => 'Voor vragen over ons privacybeleid of om gebruik te maken van uw rechten, kunt u contact opnemen via:
        <ul>
            <li class="flex"><strong>E-mail: &nbsp;</strong> <a href="mailto:privacy@develix.nl" class="menu-item">privacy@develix.nl</a></li>
            <li class="flex"><strong>Telefoon: &nbsp;</strong> <a href="tel:+31682490183" class="menu-item">06-12345678</a></li>
        </ul>',
    ])
    @endcomponent

    @php
        $lastUpdatedDate = now()->format('d F Y');
    @endphp

    @component('components.text', [
        'title' => 'Wijzigingen in ons privacybeleid',
        'description' => "Dit privacybeleid kan van tijd tot tijd worden aangepast. Wij raden u aan om deze pagina regelmatig te controleren voor eventuele updates. Deze versie is bijgewerkt op {$lastUpdatedDate}.",
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Meer weten over onze aanpak?',
        'description' => 'Neem contact op voor meer informatie over ons privacybeleid of onze diensten.',
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
