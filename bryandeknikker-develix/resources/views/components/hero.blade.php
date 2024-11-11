<div class="container mx-auto px-4 pb-5 pt-10 hero-container">
    <div class="flex flex-col lg:flex-row items-center hero-row">
        <div class="lg:w-1/2 w-full">
            <h1 class="font-bold leading-tight text-4xl">{{ $title }}</h1>
            <p class="text-lg description-paragraph">{{ $description }}</p>
            <div class="flex flex-row space-x-4 button-hero-row">
                @if (!empty($first_button) && !empty($first_button_url))
                    <a href="{{ $first_button_url }}" class="btn btn-outline-primary primary-button border py-2 text-center md:w-auto">{{ $first_button }}</a>
                @endif

                @if (!empty($second_button) && !empty($second_button_url))
                    <a href="{{ $second_button_url }}" class="btn btn-primary angle-right-button py-2 px-6 text-center md:w-auto" style="--icon--angle-right-url: url('/images/develix.nl/develix-angle-right.svg');">{{ $second_button }}</a>
                @endif
            </div>
        </div>
        <div class="lg:w-1/2 w-full mt-6 lg:mt-0 image-column">
            <img src="{{ $imageSrc }}"
                 data-light="{{ $imageSrc }}"
                 data-dark="{{ $imageSrcDark }}"
                 class=" mx-auto img-fluid @if(isset($imageClass)){{ $imageClass }}@endif"
                 alt="{{ $altText }}" width="{{ $width }}" height="{{ $height }}" loading="eager">
        </div>
    </div>
</div>
