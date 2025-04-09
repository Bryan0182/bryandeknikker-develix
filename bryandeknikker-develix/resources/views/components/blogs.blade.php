<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Blogs</h2>
            <p class="mt-2 text-lg/8 text-gray-600">Ontdek onze nieuwste blogs en artikelen.</p>
        </div>

        @if($blogs->isEmpty())
            <p class="text-center mt-8">Er zijn momenteel geen blogs beschikbaar.</p>
        @else
            <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach($blogs as $blog)
                    @if($blog->status === 'gepubliceerd')
                        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80">
                            @if($blog->featured_image)
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="absolute inset-0 -z-10 size-full object-cover">
                            @endif
                            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm/6 text-gray-300">
                                <time datetime="{{ $blog->publication_date->format('Y-m-d') }}" class="mr-8">{{ $blog->publication_date->format('d-m-Y') }}</time>
                                <div class="-ml-4 flex items-center gap-x-4">
                                    <svg viewBox="0 0 2 2" class="-ml-0.5 size-0.5 flex-none fill-white/50">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    <div class="flex gap-x-2.5">
                                        {{ $blog->author }}
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-3 text-lg/6 font-semibold text-white">
                                <a href="{{ route('blog-show', $blog->slug) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <p class="mt-2 line-clamp-2 text-sm/5 text-gray-300">
                                {!! $blog->intro !!}
                            </p>
                        </article>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
</div>
