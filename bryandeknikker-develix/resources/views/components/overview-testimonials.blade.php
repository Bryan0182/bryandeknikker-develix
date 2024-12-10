<div class="container mx-auto px-4 py-5 max-w-screen-xl text-center overview-testimonial-section">
    <div class="mx-auto max-w-screen-sm">
        <h2 class="mb-4 text-4xl tracking-tight font-bold">{{ $title }}</h2>
        <p class="mb-8 font-light lg:mb-16 sm:text-xl">{{ $description }}</p>
    </div>
    <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
        @foreach ($reviews as $index => $review)
            <figure
                class="flex flex-col justify-center items-center p-8 text-center md:p-12
                {{ $index % 2 === 0 ? 'lg:border-r' : '' }}
                {{ $index >= 2 ? 'border-t' : '' }}">
                <blockquote class="mx-auto mb-8 max-w-2xl">
                    <p class="my-4">"{{ $review->content }}"</p>
                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <div class="space-y-0.5 font-medium text-left">
                        <div>{{ $review->author }}</div>
                        <div class="text-sm font-light">
                            <span class="flex"> {{ $review->role }} van&nbsp;
                            <a class="menu-item" href="{{ $review->website_url }}"
                               target="_blank">{{ $review->company }}</a>
                        </span></div>
                    </div>
                </figcaption>
            </figure>
        @endforeach
    </div>
</div>
