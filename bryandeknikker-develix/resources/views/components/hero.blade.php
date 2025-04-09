<div class="container mx-auto px-4 py-5 lg:py-12 pt-10 hero-container">
    <div class="flex flex-col lg:flex-row items-center hero-row">
        <div class="lg:w-1/2 w-full">
            <h1 class="font-bold leading-tight text-4xl">{{ $title }}</h1>
            <p class="text-lg description-paragraph">{{ $description }}</p>
            @if (!empty($usps))
                <div class="space-y-1 mb-6">
                    @foreach ($usps as $usp)
                        <div class="flex items-center gap-2">
                            <img
                                src="https://develix.nl/images/develix.nl/check.svg"
                                data-light="https://develix.nl/images/develix.nl/check.svg"
                                data-dark="https://develix.nl/images/develix.nl/check.svg"
                                alt="Check"
                                class="w-5 h-5 theme-image">
                            <span>{{ $usp }}</span>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="flex flex-row space-x-4 button-hero-row">
                @if (!empty($first_button) && !empty($first_button_url))
                    <a href="{{ $first_button_url }}" class="btn btn-outline-primary primary-button border py-2 text-center md:w-auto">{{ $first_button }}</a>
                @endif

                @if (!empty($second_button) && !empty($second_button_url))
                    <a href="{{ $second_button_url }}" class="btn btn-primary angle-right-button py-2 px-6 text-center md:w-auto" style="--icon--angle-right-url: url('/images/develix.nl/develix-angle-right.svg'); --icon--angle-right-hover-url: url('/images/develix.nl/develix-angle-hover-right.svg');">{{ $second_button }}</a>
                @endif
            </div>
        </div>
        <div class="lg:w-1/2 w-full mt-6 lg:mt-0 image-column">
            <img src="{{ $imageSrc }}"
                 data-light="{{ $imageSrc }}"
                 data-dark="{{ $imageSrcDark }}"
                 class="mx-auto img-fluid theme-image @if(isset($imageClass)){{ $imageClass }}@endif"
                 alt="{{ $altText }}" width="{{ $width }}" height="{{ $height }}" loading="eager">
        </div>
    </div>
</div>
