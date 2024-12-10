@extends('develix::layouts.base')

@section('title', 'Review Bewerken')

@section('page-specific-scss')
    @vite(['resources/scss/global/review-create.scss'])
@endsection

@section('content')
    @component('components.review-edit', ['review' => $review])
    @endcomponent
@endsection
