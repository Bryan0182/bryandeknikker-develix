@extends('develix::layouts.base')

@section('title', 'Veelgestelde Vraag Bewerken')

@section('page-specific-scss')
    @vite(['resources/scss/global/faq-create.scss'])
@endsection

@section('content')
    @component('components.faq-edit', ['faq' => $faq])
    @endcomponent
@endsection
