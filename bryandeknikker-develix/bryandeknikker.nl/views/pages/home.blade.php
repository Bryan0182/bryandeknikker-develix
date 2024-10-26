@extends('bryandeknikker::layouts.base')

@section('title', 'Home')

@section('page-specific-css')
    @vite([])
@endsection

@section('content')
    @component('components.hero', [
        'title' => 'Ontdek mijn wereld van code',
        'description' => 'Ik ben Bryan de Knikker ehct waar, een gepassioneerde software developer in opleiding. Op mijn portfolio ervaar je hoe ik creativiteit en techniek combineer om digitale oplossingen tot leven te brengen. Welkom, en laat je inspireren door mijn werk!',
        'first_button' => 'Contact',
        'first_button_url' => '',
        'second_button' => 'Lees meer',
        'second_button_url' => '',
        'imageSrc' => asset('images/develix.nl/operating-system-vector.svg'),
        'imageSrcDark' => asset('images/develix.nl/operating-system-vector-dark.svg'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    {{--    @vite(['resources/js/home.js'])--}}
@endsection
