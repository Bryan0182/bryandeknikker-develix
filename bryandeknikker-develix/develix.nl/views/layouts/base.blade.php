<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Develix') - Develix</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @yield('page-specific-css')
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
