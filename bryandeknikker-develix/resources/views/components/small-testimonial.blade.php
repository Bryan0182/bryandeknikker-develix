<div class="container mx-auto px-4 py-5 testimonial-section">
    <div class="flex justify-center">
        <div class="lg:w-2/3 w-full text-center">
            <img src="{{ asset('images/develix.nl/quote.svg') }}" alt="Quotes" class="mx-auto" width="50px">
            <blockquote>
                <p class="text-paragraph text-lg font-medium">"{{ $randomReview->review }}"</p>
            </blockquote>
            <div class="flex justify-center items-center mt-6 space-x-3">
                <div class="flex items-center divide-x-2">
                    <div class="pr-3 font-medium">{{ $randomReview->auteur }}</div>
                    <div class="pl-3 font-light">
                        <span class="flex">
                            {{ $randomReview->functie }} at&nbsp;
                            <a class="menu-item" href="{{ $randomReview->website }}" target="_blank">{{ $randomReview->bedrijf }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
