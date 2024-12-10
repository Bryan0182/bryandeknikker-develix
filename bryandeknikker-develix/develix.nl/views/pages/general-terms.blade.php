@extends('develix::layouts.base')

@section('title', 'Algemene Voorwaarden')
@section('subtitle', 'Lees onze algemene voorwaarden')
@section('meta_description', 'Bekijk de algemene voorwaarden van Develix. Wij bieden duidelijke afspraken over onze diensten en samenwerking.')
@section('meta_keywords', 'algemene voorwaarden, Develix, dienstverlening, overeenkomsten')
@section('og_title', 'Algemene Voorwaarden | Develix')
@section('og_description', 'Bekijk de algemene voorwaarden van Develix. Transparante afspraken over diensten en samenwerking.')
@section('og_image', asset('images/develix.nl/terms-conditions.svg'))
@section('canonical', route('general-terms'))

@section('page-specific-scss')
    @vite(['resources/scss/global/hero.scss', 'resources/scss/global/text.scss', 'resources/scss/global/cta.scss'])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Algemene Voorwaarden van Develix',
        'description' => 'De algemene voorwaarden van Develix bieden duidelijkheid over de rechten en verplichtingen van beide partijen. Door gebruik te maken van onze diensten, gaat u akkoord met deze voorwaarden.',
        'imageSrc' => asset('images/develix.nl/terms-conditions.svg'),
        'imageSrcDark' => asset('images/develix.nl/terms-conditions-dark.svg'),
        'altText' => 'Illustratie algemene voorwaarden',
        'width' => 400,
        'height' => 400,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 1: Definities',
        'description' => '<ul>
            <li><strong>Develix:</strong> De eenmanszaak gevestigd te Reeuwijk, Nederland.</li>
            <li><strong>Opdrachtgever:</strong> De natuurlijke persoon of rechtspersoon die een overeenkomst sluit met Develix.</li>
            <li><strong>Diensten:</strong> Alle werkzaamheden die door Develix worden uitgevoerd, waaronder webontwikkeling, SEO, hosting, en applicatieontwikkeling.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 2: Toepasselijkheid',
        'description' => '<ul>
            <li>Deze algemene voorwaarden zijn van toepassing op alle offertes, overeenkomsten en diensten geleverd door Develix.</li>
            <li>Afwijkingen van deze voorwaarden zijn alleen bindend indien schriftelijk overeengekomen.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 3: Offertes en Overeenkomsten',
        'description' => '<ul>
            <li>Offertes van Develix zijn vrijblijvend en 30 dagen geldig, tenzij anders aangegeven.</li>
            <li>Een overeenkomst komt tot stand na schriftelijke of digitale bevestiging van de opdrachtgever.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 4: Prijzen en Betaling',
        'description' => '<ul>
            <li>Alle prijzen zijn exclusief btw, tenzij anders vermeld.</li>
            <li>Betaling dient te geschieden binnen 14 dagen na factuurdatum, tenzij anders overeengekomen.</li>
            <li>Bij niet-tijdige betaling heeft Develix het recht de uitvoering van de opdracht op te schorten.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 5: Uitvoering van de Diensten',
        'description' => '<ul>
            <li>Develix zal de diensten naar beste inzicht en vermogen uitvoeren.</li>
            <li>De opdrachtgever dient alle benodigde informatie tijdig aan te leveren voor een correcte uitvoering van de diensten.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 6: Aansprakelijkheid',
        'description' => '<ul>
            <li>Develix is niet aansprakelijk voor indirecte schade, zoals winstderving of verlies van gegevens.</li>
            <li>De aansprakelijkheid van Develix is beperkt tot het bedrag dat door de opdrachtgever is betaald voor de betreffende dienst.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 7: Intellectueel Eigendom',
        'description' => '<ul>
            <li>Alle intellectuele eigendomsrechten op door Develix gecreëerde ontwerpen, teksten en software blijven eigendom van Develix, tenzij anders overeengekomen.</li>
            <li>De opdrachtgever verkrijgt een gebruiksrecht voor de overeengekomen doeleinden.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 8: Overmacht',
        'description' => '<ul>
            <li>In geval van overmacht heeft Develix het recht de uitvoering van de overeenkomst op te schorten of te beëindigen zonder verplichting tot schadevergoeding.</li>
            <li>Onder overmacht wordt verstaan: elke van de wil van Develix onafhankelijke omstandigheid die de nakoming van de overeenkomst blijvend of tijdelijk verhindert.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 9: Wijzigingen en Beëindiging',
        'description' => '<ul>
            <li>Wijzigingen in de overeenkomst dienen schriftelijk te worden overeengekomen.</li>
            <li>Beëindiging van de overeenkomst kan schriftelijk geschieden met een opzegtermijn van 30 dagen, tenzij anders overeengekomen.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Artikel 10: Toepasselijk Recht',
        'description' => '<ul>
            <li>Op deze algemene voorwaarden is Nederlands recht van toepassing.</li>
            <li>Eventuele geschillen zullen worden voorgelegd aan de bevoegde rechter in het arrondissement waarin Develix is gevestigd.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Vragen over onze voorwaarden?',
        'description' => 'Neem contact op voor meer informatie over onze algemene voorwaarden of onze diensten.',
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
