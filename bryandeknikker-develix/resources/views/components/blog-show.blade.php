<div class="container mx-auto py-5 px-4">
    <h1 class="text-4xl font-bold mb-4">{{ $blog->title }}</h1>

    <div class="mb-6 text-sm text-gray-600">
        <span>Door: {{ $blog->author }}</span> |
        <span>Gepubliceerd op: {{ $blog->publication_date->format('d-m-Y') }}</span>
    </div>

    @if($blog->featured_image)
        <div class="mb-6 featured-image">
            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Featured Image" height="300" width="auto">
        </div>
    @endif

    <div class="prose max-w-none mb-8">
        {!! $blog->content !!}
    </div>

    @if($relatedBlogs->isNotEmpty())
        <div class="border-t pt-6 mt-8">
            <h2 class="text-2xl font-semibold mb-4">Gerelateerde Blogs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($relatedBlogs as $relatedBlog)
                    <div class="p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold">{{ $relatedBlog->title }}</h3>
                        <p class="mt-2">{{ Str::limit($relatedBlog->intro, 100) }}</p>
                        <a href="{{ route('blog-show', $relatedBlog->slug) }}" class="text-sm underline mt-2 inline-block">Lees meer</a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
