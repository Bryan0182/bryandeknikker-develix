<section class="cards-section container mx-auto py-5 px-4">
    <h2 class="text-3xl font-bold text-center mb-8">
        {{ $title }}
    </h2>
    <p class="text-center mb-12">
        {{ $subtitle }}
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($cards as $card)
            <div class="info-card p-6">
                <div class="flex items-center justify-center h-12 w-12 rounded-full mb-4">
                    <img src="{{ asset($card['image']) }}"
                         data-light="{{ asset($card['image']) }}"
                         data-dark="{{ asset($card['image-dark']) }}"
                         class="card-img-top theme-image"
                         alt="{{ $card['title'] }}" width="50" height="50">
                </div>
                <h3 class="text-xl font-semibold">{{ $card['title'] }}</h3>
                <p class="mt-2">
                    {{ $card['description'] }}
                </p>
            </div>
        @endforeach
    </div>
</section>
