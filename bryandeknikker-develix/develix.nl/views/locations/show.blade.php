@extends('develix::layouts.base')

@section('title', "Website laten maken in " . $location->location)

@section('content')
    @component('components.location-show', ['location' => $location])
    @endcomponent
@endsection
