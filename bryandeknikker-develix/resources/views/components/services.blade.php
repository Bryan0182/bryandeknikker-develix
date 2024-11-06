<div class="container mx-auto services-section py-5 px-4">
    <div class="text-center mb-6">
        <h2 class="section-title text-3xl font-bold">{{ $title }}</h2>
        <p class="section-subtitle">{{ $description }}</p>
    </div>
    <div class="flex flex-wrap">
        @foreach ($services as $service)
            <div class="w-full md:w-1/3 px-4 my-4">
                <a href="{{ $service['url'] }}" class="block h-full text-center services-card shadow-lg rounded-lg overflow-hidden">
                    <div class="card-image flex justify-center py-4">
                        <img src="{{ asset($service['image']) }}"
                             data-light="{{ asset($service['image']) }}"
                             data-dark="{{ asset($service['image-dark']) }}"
                             class="card-img-top theme-image"
                             alt="{{ $service['title'] }}" width="50" height="50">
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title text-2xl">{{ $service['title'] }}</h5>
                        <p class="card-text">{{ $service['description'] }}</p>
                    </div>
                    <div class="card-button py-4">
                        <span class="align-items-center flex justify-center read-more-services-button">Lees meer</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
