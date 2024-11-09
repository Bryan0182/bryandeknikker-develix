@extends('develix::layouts.base')

@section('title', 'Dashboard')

@section('page-specific-scss')
    @vite(['resources/scss/global/dashboard.scss'])
@endsection

@section('content')
    @component('components.dashboard', ['blogs' => $blogs, 'users' => $users, 'locations' => $locations])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite([])
@endsection
