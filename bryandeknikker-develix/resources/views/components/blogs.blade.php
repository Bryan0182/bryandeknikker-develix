<div class="container mx-auto py-5 px-4">
    <h1 class="text-4xl text-center font-bold mb-4">Blogs</h1>

    @if($blogs->isEmpty())
        <p class="text-center">Er zijn momenteel geen blogs beschikbaar.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($blogs as $blog)
                @if($blog->status === 'gepubliceerd')
                    <div class="blog-item p-6">
                        @if($blog->featured_image)
                            <div class="featured-image mb-6">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Featured Image" width="auto" height="300" class="blog-image">
                            </div>
                        @endif
                        <span class="mb-4 blog-info">{{ $blog->author }} | {{ $blog->publication_date->format('d-m-Y') }}</span>
                        <h3 class="text-xl font-semibold">{{ $blog->title }}</h3>
                        <p class="mt-2">{!! $blog->intro !!}</p>
                        <a href="{{ route('blog-show', $blog->slug) }}" class="mt-4 inline-block blog-read-more" style="--icon--angle-right-url: url('/images/develix.nl/develix-angle-right.svg');">Lees meer</a>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</div>
