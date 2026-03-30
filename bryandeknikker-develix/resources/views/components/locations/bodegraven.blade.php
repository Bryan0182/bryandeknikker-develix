{{-- resources/views/components/locations/bodegraven.blade.php --}}

@component('components.hero', [
    'title' => 'Website laten maken in Bodegraven? Develix is je lokale partner',
    'description' => "Bodegraven is een ondernemend dorp aan de Oude Rijn, midden in het Groene Hart. Van lokale winkels aan de Brugstraat tot ambachtelijke bedrijven en zzp'ers — ik help ondernemers in Bodegraven met websites die klanten aantrekken én overtuigen.",
    'usps' => [
        "Lokale webdesigner uit het Groene Hart",
        "Mobielvriendelijk & razendsnel",
        "SEO-geoptimaliseerd voor lokale vindbaarheid",
        "Persoonlijk contact, geen callcenter"
    ],
    'first_button' => 'Vraag een vrijblijvende offerte aan',
    'first_button_url' => route('quote'),
    'second_button' => 'Plan een gratis kennismaking',
    'second_button_url' => route('contact'),
    'imageSrc' => asset('images/develix.nl/create-website.svg'),
    'imageSrcDark' => asset('images/develix.nl/create-website-dark.svg'),
    'altText' => 'Illustratie van website creatie in Bodegraven',
    'width' => 400,
    'height' => 400,
    'imageClass' => ''
])
@endcomponent

@component('components.text', [
    'title' => 'Waarom kiezen ondernemers in Bodegraven voor Develix?',
    'description' => "Bodegraven-Reeuwijk is een gemeente met een sterke lokale economie. Van de kaashandel waar Bodegraven van oudsher om bekend staat, tot de groeiende groep zzp'ers en mkb'ers in het dorp — er is hier volop ondernemerschap. Maar online vallen veel van die bedrijven tussen wal en schip. Ik ben Bryan, oprichter van Develix, en ik werk vanuit het Groene Hart. Ik ken de regio, ik snap de markt, en ik weet hoe je als lokale ondernemer online het verschil maakt.",
    'usps' => [
        ['icon' => '🔍', 'text' => 'Een website die gevonden wordt — Ik optimaliseer je site zodat je zichtbaar bent wanneer iemand in Bodegraven zoekt op jouw dienst'],
        ['icon' => '⚙️', 'text' => 'Maatwerk, geen templates — Ik bouw op maat met Laravel, wat zorgt voor snelheid, veiligheid en schaalbaarheid'],
        ['icon' => '🤝', 'text' => 'Persoonlijke aanpak — Je hebt rechtstreeks contact met mij, de maker van je website'],
        ['icon' => '📈', 'text' => 'Focus op conversie — Ik zorg dat bezoekers ook daadwerkelijk contact opnemen of een aankoop doen'],
    ],
])
@endcomponent

@component('components.text', [
    'title' => 'Mijn diensten voor ondernemers in Bodegraven',
    'description' => "Ik bied alles wat je nodig hebt om online te groeien. Of je nu een winkel hebt aan de Brugstraat, een bedrijf runt op industrieterrein Rijnhoek, of als zzp'er vanuit huis werkt in Bodegraven — ik bouw een digitale oplossing die bij jou en je klanten past.",
    'usps' => [
        ['icon' => '🌐', 'text' => "Website op maat — professioneel, snel en conversiegericht. <a href='/diensten/website'>Bekijk mijn websites</a>"],
        ['icon' => '🔍', 'text' => "SEO — gevonden worden in Google voor jouw dienst in Bodegraven. <a href='/diensten/seo'>Meer over SEO</a>"],
        ['icon' => '📱', 'text' => "Social media beheer — strategie en content voor Instagram, Facebook, LinkedIn en Pinterest. <a href='/diensten/social'>Bekijk social media</a>"],
        ['icon' => '⚙️', 'text' => "Maatwerk applicaties — automatisering en koppelingen op maat. <a href='/diensten/applicatie'>Meer over applicaties</a>"],
        ['icon' => '🎨', 'text' => "Design — logo's, huisstijl en grafisch ontwerp. <a href='/diensten/design'>Bekijk design</a>"],
        ['icon' => '🖥️', 'text' => "Hosting — betrouwbaar, met automatische backups en 24/7 monitoring. <a href='/diensten/hosting'>Meer over hosting</a>"],
    ],
])
@endcomponent

@component('components.text', [
    'title' => 'Lokaal en persoonlijk — dát maakt het verschil',
    'description' => "Een groot bureau in Amsterdam kent Bodegraven niet. Ik wel. Ik weet dat Bodegraven een hechte dorpsgemeenschap heeft met een actief verenigingsleven en ondernemersnetwerk. Ik snap dat een winkelier aan de Brugstraat andere behoeften heeft dan een adviseur die vanuit huis werkt. Daarom begin ik altijd met een goed gesprek — bij jou aan tafel, op kantoor, of via een videocall. We bespreken wat je nodig hebt, wat je doelen zijn en hoe we dat samen gaan realiseren. Geen verkooppraatjes, gewoon een eerlijk plan.",
])
@endcomponent

@component('components.faq', [
    'title' => 'Veelgestelde vragen over een website laten maken in Bodegraven',
    'description' => 'Bekijk de antwoorden op de meest gestelde vragen over het laten maken van een website in Bodegraven.',
    'faqs' => \App\Models\Faq::active()->byCategory('locatie-bodegraven')->get(),
    'imageSrc' => asset('/images/develix.nl/angle-down.svg'),
])
@endcomponent

@component('components.cta', [
    'title' => 'Klaar om online te groeien in Bodegraven?',
    'description' => 'Wil je een professionele website die écht klanten oplevert? Neem contact op voor een vrijblijvend kennismakingsgesprek en ontdek hoe ik je kan helpen.',
    'first_button' => 'Vraag een vrijblijvende offerte aan',
    'first_button_url' => route('quote'),
    'second_button' => 'Neem contact op',
    'second_button_url' => route('contact')
])
@endcomponent

{{-- JSON-LD Schema Markup --}}
@push('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Develix",
            "description": "Develix helpt zzp'ers en kleine ondernemers in Bodegraven met professionele websites, SEO, social media en maatwerk applicaties. Persoonlijk contact, korte lijnen.",
            "url": "https://develix.nl",
            "logo": "https://develix.nl/images/develix.nl/develix.svg",
            "image": "https://develix.nl/images/develix.nl/develix.svg",
            "founder": {
                "@type": "Person",
                "name": "Bryan de Knikker"
            },
            "foundingDate": "2024-12",
            "areaServed": [
                { "@type": "Place", "name": "Bodegraven" },
                { "@type": "Place", "name": "Reeuwijk" },
                { "@type": "Place", "name": "Gouda" },
                { "@type": "Place", "name": "Waddinxveen" },
                { "@type": "Place", "name": "Groene Hart" }
            ],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Bodegraven",
                "addressRegion": "Zuid-Holland",
                "addressCountry": "NL"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "52.0833",
                "longitude": "4.7500"
            },
            "sameAs": [
                "https://www.facebook.com/develixofficial/",
                "https://www.instagram.com/develix_official/",
                "https://www.linkedin.com/company/develix-official/",
                "https://nl.pinterest.com/develix_official/",
                "https://x.com/DevelixOfficial/"
            ],
            "priceRange": "$$",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Digitale diensten",
                "itemListElement": [
                    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Website op maat", "url": "https://develix.nl/diensten/website" } },
                    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "SEO optimalisatie", "url": "https://develix.nl/diensten/seo" } },
                    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Social media beheer", "url": "https://develix.nl/diensten/social" } },
                    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Design op maat", "url": "https://develix.nl/diensten/design" } },
                    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Maatwerk applicaties", "url": "https://develix.nl/diensten/applicatie" } },
                    { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Hosting", "url": "https://develix.nl/diensten/hosting" } }
                ]
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "reviewCount": "1"
            },
            "review": {
                "@type": "Review",
                "author": { "@type": "Person", "name": "Ruurt van Elk" },
                "reviewRating": { "@type": "Rating", "ratingValue": "5" },
                "reviewBody": "Wij zijn erg blij met onze website die Bryan voor ons heeft gemaakt. Hij heeft goed begrepen in welke richting we de site wilden hebben en heeft deze op een mooie manier aangevuld met zijn eigen inzichten."
            }
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Wat kost een website laten maken in Bodegraven?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "De kosten hangen af van je wensen en de complexiteit. Een professionele website op maat begint bij enkele honderden euro's. Ik maak altijd eerst een vrijblijvende offerte, zodat je precies weet waar je aan toe bent."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Hoe lang duurt het om een website te laten maken?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Een standaard website is meestal binnen 2 tot 4 weken klaar. Bij grotere projecten of maatwerkapplicaties kan het iets langer duren. Ik houd je altijd op de hoogte van de planning."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Waarom zou ik kiezen voor een lokale webdesigner in Bodegraven?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Een lokale partner kent de regio en je doelgroep. Je kunt makkelijk persoonlijk afspreken, de communicatie is direct en je hebt geen last van lange wachttijden of een anoniem supportteam. Bovendien is lokale SEO mijn specialiteit."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Kan Develix ook mijn bestaande website verbeteren?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Zeker. Ik kan je huidige website analyseren, de SEO verbeteren, het design opfrissen of technische problemen oplossen. Je hoeft niet per se een compleet nieuwe website te laten bouwen."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Biedt Develix ook SEO en hosting aan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ja, ik bied naast webdesign ook SEO-optimalisatie, social media beheer, design en betrouwbare hosting aan. Zo heb je alles onder één dak en hoef je niet met meerdere partijen te schakelen."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Werk je alleen in Bodegraven?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Nee, ik werk door heel het Groene Hart — in Reeuwijk, Gouda, Waddinxveen en daarbuiten. Online help ik ondernemers door heel Nederland."
                    }
                }
            ]
        }
    </script>
@endpush
