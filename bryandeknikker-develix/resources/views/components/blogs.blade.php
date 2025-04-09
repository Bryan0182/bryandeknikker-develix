<section class="cards-section container mx-auto px-4 py-5 lg:py-12">
    <h2 class="text-3xl font-bold text-center mb-8">
        Blogs
    </h2>
    <p class="text-center mb-6 lg:w-2/3 w-full mx-auto">
        Ontdek onze nieuwste blogs en artikelen.
    </p>

    @if($blogs->isEmpty())
        <p class="text-center">Er zijn momenteel geen blogs beschikbaar.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($blogs as $blog)
                @if($blog->status === 'gepubliceerd')
                    <div class="info-card px-4 py-2">
                        @if($blog->featured_image)
                            <div class="featured-image mb-4">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}"
                                     class="card-img-top w-full h-64 object-cover rounded"
                                     alt="{{ $blog->title }}">
                            </div>
                        @endif
                        <div class="blog-meta mb-2 text-sm">
                            <span>{{ $blog->author }} | {{ $blog->publication_date->format('d-m-Y') }}</span>
                        </div>
                        <h3 class="text-xl font-semibold">{{ $blog->title }}</h3>
                        <p class="mt-2">
                            {!! $blog->intro !!}
                        </p>
                        <a href="{{ route('blog-show', $blog->slug) }}" class="mt-4 inline-block blog-read-more angle-right-button" style="--icon--angle-right-url: url('/images/develix.nl/develix-angle-right.svg'); --icon--angle-right-hover-url: url('/images/develix.nl/develix-angle-hover-right.svg');">Lees meer</a>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</section>
