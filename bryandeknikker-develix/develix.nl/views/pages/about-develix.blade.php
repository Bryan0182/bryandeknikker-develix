@extends('develix::layouts.base')

@section('title', 'Over Develix')

@section('page-specific-scss')
    @vite(['resources/scss/global/timeline.scss'])
@endsection

@section('content')
    @component('components.timeline', [
       'title' => 'De mijlpalen van Develix',
       'description' => 'Develix heeft in zijn ontwikkeling diverse belangrijke mijlpalen bereikt, elk een stap in de richting van betere ondersteuning voor onze klanten en een sterker online profiel. Onze reis is er een van groei, kwaliteit en klantgerichtheid, met als doel digitale groei mogelijk te maken voor elke ondernemer.',
       'timelineItems' => [
           [
               'number' => 1,
               'title' => 'Oprichting van Develix',
               'date' => 'Januari 2025',
               'description' => 'Het begin van Develix, opgericht met een visie op klantgerichte digitale oplossingen. Vanaf het eerste moment richten we ons op het creëren van sterke, op maat gemaakte websites en applicaties om ondernemers te helpen groeien.'
           ],
           [
               'number' => 2,
               'title' => 'Lancering van de website',
               'date' => 'Januari 2025',
               'description' => 'De ontwikkeling en lancering van de eerste Develix-website markeert een belangrijke stap. Hiermee presenteren we onszelf online en bouwen we aan een sterke merkidentiteit die vertrouwen en professionaliteit uitstraalt naar onze klanten.'
           ],
       ]
   ])
    @endcomponent
@endsection

@section('page-specific-js')
    @vite(['resources/js/timeline.js'])
@endsection
