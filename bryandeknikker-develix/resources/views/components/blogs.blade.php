<div class="container mx-auto py-5 px-4">
    <h1 class="text-4xl text-center font-bold mb-4">Blogs</h1>

    @if($blogs->isEmpty())
        <p class="text-center">Er zijn momenteel geen blogs beschikbaar.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($blogs as $blog)
                @if($blog->status === 'gepubliceerd')
                    <div class="p-6 rounded-lg shadow-lg">
                        @if($blog->featured_image)
                            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Featured Image"
                                 class="blog-image">
                        @endif
                        <h3 class="text-xl font-semibold">{{ $blog->title }}</h3>
                        <p class="mt-2">{!! $blog->intro !!}</p>
                        <p class="mt-2 text-sm">Auteur: {{ $blog->author }}</p>
                        <p class="mt-2 text-sm">Publicatiedatum: {{ $blog->publication_date->format('d-m-Y') }}</p>
                        <a href="{{ route('blog-show', $blog->id) }}" class="hover:underline mt-4 inline-block">Lees
                            meer</a>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</div>
