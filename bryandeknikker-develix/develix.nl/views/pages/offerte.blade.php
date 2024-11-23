@extends('develix::layouts.base')

@section('title', 'Offerte aanvragen')

@section('page-specific-scss')
    @vite(['resources/scss/global/quote.scss'])
@endsection

@section('content')
    @component('components.quote')
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
