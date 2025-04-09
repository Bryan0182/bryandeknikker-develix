<div class="container mx-auto px-4 py-5 lg:py-12 text-section">
    <div class="flex justify-center">
        <div class="lg:w-2/3 w-full">
            @if (!empty($title))
                <h2 class="title text-3xl md:text-4xl text-center font-bold mb-4">
                    {{ $title }}
                </h2>
            @endif

            @if (!empty($description))
                <p class="description-paragraph text-lg text-center leading-relaxed">
                    {!! $description !!}
                </p>
            @endif

            @if (!empty($usps))
                    <div class="flex flex-wrap justify-center gap-4">
                        @foreach ($usps as $usp)
                            <div
                                data-aos="fade-up"
                                data-aos-anchor-placement="bottom-bottom"
                                class="usp-box px-5 py-4 w-auto flex items-center gap-3 transition-all duration-300 ease-in-out"
                            >
                                <div class="text-xl">{{ $usp['icon'] }}</div>
                                <span class="text-base">{!! $usp['text'] !!}</span>
                            </div>
                        @endforeach
                    </div>
            @endif
        </div>
    </div>
</div>
