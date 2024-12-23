<div class="container mx-auto py-5 px-4">
    <h1 class="text-4xl font-bold mb-4">{{ $blog->title }}</h1>

    <div class="mb-6 text-sm text-gray-600">
        <span>Door: {{ $blog->author }}</span> |
        <span>Gepubliceerd op: {{ $blog->publication_date->format('d-m-Y') }}</span>
    </div>

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
                        <span class="mt-2">{!! $relatedBlog->intro !!}</span>
                        <a href="{{ route('blog-show', $relatedBlog->slug) }}" class="mt-4 inline-block blog-read-more angle-right-button" style="--icon--angle-right-url: url('/images/develix.nl/develix-angle-right.svg');">Lees meer</a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
