<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bryan de Knikker') - Bryan de Knikker</title>

    @vite(['resources/scss/global/app.scss', 'resources/scss/bryandeknikker.nl/bryandeknikker.scss', 'resources/js/app.js'])

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
