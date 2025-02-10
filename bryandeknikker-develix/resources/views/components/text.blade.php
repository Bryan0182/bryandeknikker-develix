<div class="container mx-auto px-4 py-5 text-section">
    <div class="flex justify-center">
        <div class="lg:w-2/3 w-full">
            @if (!empty($title))
                <h2 class="text-3xl text-center font-semibold">{{ $title }}</h2>
            @endif

            @if (!empty($description))
                <p class="text-paragraph text-center text-lg">{!! $description !!}</p>
            @endif

            @if (!empty($usps))
                <div class="mt-6 flex flex-col items-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-3 w-full">
                        @foreach ($usps as $index => $usp)
                            <div class="flex items-center gap-3">
                                <img src="https://develix.nl/images/develix.nl/check.svg"
                                     alt="Check"
                                     class="w-5 h-5">
                                <span>{{ $usp }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
