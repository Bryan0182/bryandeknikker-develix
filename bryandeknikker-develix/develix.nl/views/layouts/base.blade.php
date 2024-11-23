<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Develix') - Develix</title>
    <link rel="icon" href="{{ asset('images/develix.nl/develix.svg') }}" type="image/x-icon">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T95BJNHF');</script>
    <!-- End Google Tag Manager -->

    @vite(['resources/scss/global/app.scss', 'resources/scss/develix.nl/develix.scss', 'resources/scss/develix.nl/header.scss', 'resources/scss/develix.nl/footer.scss', 'resources/scss/develix.nl/cookie-element.scss', 'resources/scss/develix.nl/buttons.scss'])

    @yield('page-specific-scss')
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T95BJNHF"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('develix::partials.header')

<div class="content">
    @yield('content')
</div>

@include('develix::partials.footer')
@include('develix::partials.cookie-consent')

@vite(['resources/js/global/app.js', 'resources/js/develix.nl/cookie-element.js'])
@yield('page-specific-js')

</body>
</html>
