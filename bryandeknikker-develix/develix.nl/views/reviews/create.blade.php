@extends('develix::layouts.base')

@section('title', 'Review Aanmaken')

@section('page-specific-scss')
    @vite(['resources/scss/global/review-create.scss'])
@endsection

@section('content')
    @component('components.review-create')
    @endcomponent
@endsection
