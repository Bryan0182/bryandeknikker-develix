<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Develix') - Develix</title>
    <link rel="icon" href="images/develix.nl/develix.svg" type="image/x-icon">

    @vite(['resources/scss/global/app.scss', 'resources/scss/develix.nl/develix.scss', 'resources/scss/develix.nl/header.scss', 'resources/scss/develix.nl/footer.scss', 'resources/js/app.js'])

    @yield('page-specific-scss')
</head>
<body>

@include('develix::partials.header')

<div class="content">
    @yield('content')
</div>

@include('develix::partials.footer')

@yield('page-specific-js')

</body>
</html>
