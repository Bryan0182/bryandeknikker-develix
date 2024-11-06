@extends('develix::layouts.base')

@section('title', 'Registreren')

@section('page-specific-scss')
    @vite(['resources/scss/global/authentication.scss'])
@endsection

@section('content')
    @component('components.register')
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
