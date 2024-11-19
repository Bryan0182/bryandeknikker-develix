@extends('develix::layouts.base')

@section('title', 'FAQ Aanmaken')

@section('page-specific-scss')
    @vite(['resources/scss/global/faq-create.scss'])
@endsection

@section('content')
    @component('components.faq-create')
    @endcomponent
@endsection
