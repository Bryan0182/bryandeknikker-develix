<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Develix') - Develix</title>
    <link rel="icon" href="{{ asset('images/develix.nl/develix.svg') }}" type="image/x-icon">

    @vite(['resources/scss/global/app.scss', 'resources/scss/develix.nl/develix.scss', 'resources/scss/develix.nl/header.scss', 'resources/scss/develix.nl/footer.scss', 'resources/scss/develix.nl/cookie-element.scss', 'resources/scss/develix.nl/buttons.scss'])

    @yield('page-specific-scss')
</head>
<body>

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
