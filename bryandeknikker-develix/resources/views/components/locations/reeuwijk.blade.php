{{-- resources/views/components/locations/reeuwijk.blade.php --}}

@component('components.hero', [
    'title' => 'Website laten maken in Reeuwijk? Develix is je lokale partner',
    'description' => "Je bent ondernemer in Reeuwijk en je weet: zonder een sterke website loop je klanten mis. Ik help zzp'ers en kleine ondernemers in Reeuwijk met websites die er niet alleen goed uitzien, maar die ook écht klanten opleveren.",
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
    'altText' => 'Illustratie van website creatie in Reeuwijk',
    'width' => 400,
    'height' => 400,
    'imageClass' => ''
])
@endcomponent

@component('components.text', [
    'title' => 'Waarom kiezen ondernemers in Reeuwijk voor Develix?',
    'description' => 'Reeuwijk is een dorp met een sterke lokale ondernemersgeest. Van recreatiebedrijven rond de Reeuwijkse Plassen tot schilders, hoveniers en coaches — er is hier ontzettend veel ondernemerschap. Maar veel van die bedrijven zijn online nauwelijks zichtbaar. Dat is zonde, want je potentiële klanten zoeken wél online. Ik ben Bryan, oprichter van Develix, en ik werk vanuit het Groene Hart. Dat betekent: korte lijnen, persoonlijk contact en een webdesigner die snapt hoe het er lokaal aan toe gaat.',
    'usps' => [
        ['icon' => '🔍', 'text' => 'Een website die gevonden wordt — Ik optimaliseer je site voor zoekmachines zodat je zichtbaar bent in Reeuwijk en omgeving'],
        ['icon' => '⚙️', 'text' => 'Maatwerk, geen templates — Ik bouw op maat met Laravel, wat zorgt voor snelheid, veiligheid en schaalbaarheid'],
        ['icon' => '🤝', 'text' => 'Persoonlijke aanpak — Je hebt rechtstreeks contact met mij, de maker van je website'],
        ['icon' => '📈', 'text' => 'Focus op conversie — Ik zorg dat bezoekers ook daadwerkelijk contact opnemen of een aankoop doen'],
    ],
])
@endcomponent

@component('components.text', [
    'title' => 'Mijn diensten voor ondernemers in Reeuwijk',
    'description' => "Ik bied alles wat je nodig hebt om online te groeien. Van een professionele website op maat tot SEO, social media beheer, design, maatwerk applicaties en betrouwbare hosting op mijn eigen servers. Of je nu een horecabedrijf runt bij de Reeuwijkse Plassen, een ambachtelijke onderneming hebt in het dorp, of als zzp'er vanuit huis werkt — ik bouw een digitale oplossing die bij jou past.",
    'usps' => [
        ['icon' => '🌐', 'text' => "Website op maat — professioneel, snel en conversiegericht. <a href='/diensten/website'>Bekijk mijn websites</a>"],
        ['icon' => '🔍', 'text' => "SEO — gevonden worden in Google voor jouw dienst in Reeuwijk. <a href='/diensten/seo'>Meer over SEO</a>"],
        ['icon' => '📱', 'text' => "Social media beheer — strategie en content voor Instagram, Facebook, LinkedIn en Pinterest. <a href='/diensten/social'>Bekijk social media</a>"],
        ['icon' => '⚙️', 'text' => "Maatwerk applicaties — automatisering en koppelingen op maat. <a href='/diensten/applicatie'>Meer over applicaties</a>"],
        ['icon' => '🎨', 'text' => "Design — logo's, huisstijl en grafisch ontwerp. <a href='/diensten/design'>Bekijk design</a>"],
        ['icon' => '🖥️', 'text' => "Hosting — betrouwbaar, met automatische backups en 24/7 monitoring. <a href='/diensten/hosting'>Meer over hosting</a>"],
    ],
])
@endcomponent

@component('components.text', [
    'title' => 'Lokaal en persoonlijk — dát maakt het verschil',
    'description' => 'Een groot bureau in Amsterdam kent Reeuwijk niet. Ik wel. Ik weet dat de Reeuwijkse Plassen veel recreatieondernemers aantrekken, dat er een actieve lokale bedrijvencommunity is, en dat de meeste ondernemers hier prijs stellen op persoonlijk contact boven eindeloze mails. Daarom werk ik het liefst met een goed gesprek aan de keukentafel (of via een videocall als dat beter uitkomt). We bespreken wat je nodig hebt, wat je doelen zijn en hoe we dat samen gaan realiseren. Geen verkooppraatjes, gewoon een eerlijk plan.',
])
@endcomponent

@component('components.faq', [
    'title' => 'Veelgestelde vragen over een website laten maken in Reeuwijk',
    'description' => 'Bekijk de antwoorden op de meest gestelde vragen over het laten maken van een website in Reeuwijk.',
    'faqs' => \App\Models\Faq::active()->byCategory('locatie-reeuwijk')->get(),
    'imageSrc' => asset('/images/develix.nl/angle-down.svg'),
])
@endcomponent

@component('components.cta', [
    'title' => 'Klaar om online te groeien in Reeuwijk?',
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
            "description": "Develix helpt zzp'ers en kleine ondernemers in Reeuwijk met professionele websites, SEO, social media en maatwerk applicaties. Persoonlijk contact, korte lijnen.",
            "url": "https://develix.nl",
            "logo": "https://develix.nl/images/develix.nl/develix.svg",
            "image": "https://develix.nl/images/develix.nl/develix.svg",
            "founder": {
                "@type": "Person",
                "name": "Bryan de Knikker"
            },
            "foundingDate": "2024-12",
            "areaServed": [
                { "@type": "Place", "name": "Reeuwijk" },
                { "@type": "Place", "name": "Gouda" },
                { "@type": "Place", "name": "Waddinxveen" },
                { "@type": "Place", "name": "Bodegraven" },
                { "@type": "Place", "name": "Groene Hart" }
            ],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Reeuwijk",
                "addressRegion": "Zuid-Holland",
                "addressCountry": "NL"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "52.0467",
                "longitude": "4.7261"
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
                    "name": "Wat kost een website laten maken bij Develix?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "De kosten van een website hangen af van je wensen en de complexiteit. Een professionele website op maat begint bij enkele honderden euro's. Ik maak altijd eerst een vrijblijvende offerte, zodat je precies weet waar je aan toe bent."
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
                    "name": "Waarom zou ik kiezen voor een lokale webdesigner in Reeuwijk?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Een lokale partner begrijpt je markt en je doelgroep. Je kunt makkelijk persoonlijk afspreken, de communicatie is direct en je hebt geen last van lange wachttijden of een anoniem supportteam. Bovendien is lokale SEO mijn specialiteit."
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
                    "name": "Werk je alleen in Reeuwijk?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Nee, ik werk door heel het Groene Hart — in Gouda, Waddinxveen, Bodegraven en daarbuiten. Online help ik ondernemers door heel Nederland."
                    }
                }
            ]
        }
    </script>
@endpush
