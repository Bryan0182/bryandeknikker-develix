<div class="container mx-auto px-4 py-5 testimonial-section">
    <div class="flex justify-center">
        <div class="lg:w-2/3 w-full text-center">
            <img src="{{ asset('images/develix.nl/quote.svg') }}" alt="Quotes" class="mx-auto" width="50px">
            <blockquote>
                <p class="text-paragraph text-lg font-medium">"{{ $randomReview->content }}"</p>
            </blockquote>
            <div class="flex justify-center items-center mt-6 space-x-3">
                <div class="flex items-center divide-x-2">
                    <div class="pr-3 font-medium">{{ $randomReview->author }}</div>
                    <div class="pl-3 font-light">
                        <span class="flex">
                            {{ $randomReview->role }} van&nbsp;
                            <a class="menu-item" href="{{ $randomReview->website_url }}"
                               target="_blank">{{ $randomReview->company }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
