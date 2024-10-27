<div class="container mx-auto px-4 py-5 text-section">
    <div class="flex justify-center">
        <div class="lg:w-2/3 w-full">
            @if(!empty($title))
                <h2 class="text-3xl font-semibold mb-4">{{ $title }}</h2>
            @endif

            @if(!empty($description))
                <p class="text-paragraph text-lg">{!! $description !!}</p>
            @endif
        </div>
    </div>
</div>
