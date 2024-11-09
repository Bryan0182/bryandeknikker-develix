@extends('develix::layouts.base')

@section('title', 'Locatie Aanmaken')

@section('page-specific-scss')
    @vite(['resources/scss/global/location-create.scss'])
@endsection

@section('content')
    @component('components.location-create')
    @endcomponent
@endsection
