<div class="w-full cta-container-fluid">
    <div class="container mx-auto cta-section">
        <div class="flex flex-col items-center text-center gap-5 py-5 px-4">
            <div class="w-full md:w-1/2">
                <h2 class="cta-title font-bold text-3xl">{{ $title }}</h2>
                <p class="cta-text">{{ $description }}</p>
                <div class="grid gap-2 md:flex justify-center button-cta-row">
                    <a href="{{ $first_button_url }}" class="border border-primary text-primary px-4 py-2 rounded-lg contact-cta-button">{{ $first_button }}</a>

                    @if(!empty($second_button))
                        <a href="{{ $second_button_url }}" class="bg-primary text-white px-4 py-2 rounded-lg align-center flex read-more-cta-button">{{ $second_button }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
