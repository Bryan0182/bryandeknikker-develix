<div class="container mx-auto px-4 py-5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
        <div class="flex flex-col gap-2">
            <h2 class="text-center md:text-left text-3xl font-bold">{{ $title }}</h2>
            <p class="text-center md:text-left">{{ $description }}</p>
            @if (!empty($button) && !empty($button_url))
                <a href="{{ $button_url }}" class="border border-primary text-primary py-2 px-4 rounded-lg">{{ $button }}</a>
            @endif
        </div>

        <div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach($features as $feature)
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center justify-center feature-icon ">
                            <img src="{{ asset($feature['image']) }}"
                                 data-light="{{ asset($feature['image']) }}"
                                 data-dark="{{ asset($feature['image-dark']) }}"
                                 alt="{{ $feature['imageAlt'] }}" width="35" height="40" class="theme-image">
                        </div>
                        <h5 class="font-semibold mb-0 text-center">{{ $feature['title'] }}</h5>
                        <p class="text-center">{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
