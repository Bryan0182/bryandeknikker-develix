@php
    $titleHtml = $title;
    if (isset($highlight_word) && !empty($highlight_word)) {
        $titleHtml = str_replace($highlight_word, '<span class="cta-highlight">' . $highlight_word . '</span>', $title);
    }
@endphp

<div class="cta-section px-4 py-5 lg:py-12">
    <div class="cta-gradient"></div>

    <div class="cta-fade-top"></div>
    <div class="cta-fade-bottom"></div>

    <div class="cta-light-effects">
        <div class="light-effect-1"></div>
        <div class="light-effect-2"></div>
    </div>

    <div class="cta-content">
        <h1 class="cta-title">{!! $titleHtml !!}</h1>

        <p class="cta-description">{{ $description }}</p>

        <div class="cta-buttons">
            <a href="{{ $first_button_url }}" class="border border-primary text-primary px-4 py-2 rounded-lg primary-button">{{ $first_button }}</a>
            @if(!empty($second_button))
                <a href="{{ $second_button_url }}" class="bg-primary text-white px-4 py-2 rounded-lg align-center flex angle-right-button" style="--icon--angle-right-url: url('/images/develix.nl/develix-angle-right.svg'); --icon--angle-right-hover-url: url('/images/develix.nl/develix-angle-hover-right.svg');">{{ $second_button }}</a>
            @endif
        </div>
    </div>
</div>
