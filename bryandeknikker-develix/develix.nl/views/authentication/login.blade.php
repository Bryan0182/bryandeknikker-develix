@extends('develix::layouts.base')

@section('title', 'Inloggen')

@section('page-specific-scss')
    @vite(['resources/scss/global/authentication.scss'])
@endsection

@section('content')
    @component('components.login')
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
