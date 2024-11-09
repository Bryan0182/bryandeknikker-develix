@extends('develix::layouts.base')

@section('title', 'Locatie Bewerken')

@section('page-specific-scss')
    @vite(['resources/scss/global/location-create.scss'])
@endsection

@section('content')
    @component('components.location-edit', ['location' => $location])
    @endcomponent
@endsection
