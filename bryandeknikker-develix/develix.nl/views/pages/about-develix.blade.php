@extends('develix::layouts.base')

@section('title', 'Over Develix')

@section('page-specific-scss')
    @vite(['resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.timeline', [
        'title' => 'Our Process',
        'description' => 'Our process is designed to provide you with the best possible results in the most efficient way.',
        'timelineItems' => [
            ['number' => 1, 'title' => 'Research', 'description' => 'Researching the initial requirements and setting goals.Researching the initial requirements and setting goals.Researching the initial requirements and setting goals.Researching the initial requirements and setting goals.Researching the initial requirements and setting goals.Researching the initial requirements and setting goals.Researching the initial requirements and setting goals.Researching the initial requirements and setting goals.'],
            ['number' => 2, 'title' => 'Planning', 'description' => 'Outlining the project timeline and resource allocation.'],
            ['number' => 3, 'title' => 'Design', 'description' => 'Creating a design prototype and finalizing the visuals.'],
            ['number' => 4, 'title' => 'Development', 'description' => 'Building the core functionalities and integrating components.'],
            ['number' => 5, 'title' => 'Testing & Deployment', 'description' => 'Ensuring quality and deploying the final product.'],
        ]
    ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/timeline.js'])
@endsection
