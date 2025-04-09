<section class="blog-section px-4 py-5 lg:py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="blog-title text-4xl font-semibold tracking-tight text-balance sm:text-5xl">
                Blogs
            </h2>
            <p class="blog-subtitle mt-2 text-lg/8">
                Ontdek onze nieuwste blogs en artikelen.
            </p>
        </div>

        @if($blogs->isEmpty())
            <p class="text-center mt-12 no-blogs">Er zijn momenteel geen blogs beschikbaar.</p>
        @else
            <div class="mx-auto mt-8 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach($blogs as $blog)
                    @if($blog->status === 'gepubliceerd')
                        <article class="blog-card relative isolate flex flex-col justify-end overflow-hidden px-8 pt-80 pb-8 sm:pt-48 lg:pt-80">
                            @if($blog->featured_image)
{{--                                <img src="{{ asset('storage/' . $blog->featured_image) }}"--}}
{{--                                     alt="{{ $blog->title }}"--}}
{{--                                     class="blog-image absolute inset-0 -z-10 h-full w-full object-cover">--}}
                                <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                     alt="{{ $blog->title }}"
                                     class="blog-image absolute inset-0 -z-10 h-full w-full object-cover">
                            @endif

                            <div class="blog-overlay absolute inset-0 -z-10"></div>
                            <div class="blog-ring absolute inset-0 -z-10 ring-inset"></div>

                            <div class="blog-meta flex flex-wrap items-center gap-y-1 overflow-hidden text-sm/6">
                                <time datetime="{{ $blog->publication_date->format('Y-m-d') }}" class="mr-4">
                                    {{ $blog->publication_date->format('d-m-Y') }}
                                </time>
                                <div class="flex items-center gap-x-2.5">
                                    <img src="{{ asset('images/develix.nl/profielfoto-develix-circle.png') }}" alt="Auteur"
                                         class="size-6 flex-none rounded-full bg-white/10">
                                    {{ $blog->author ?? 'Develix' }}
                                </div>
                            </div>

                            <h3 class="blog-heading mt-3 text-lg/6 font-semibold">
                                <a href="{{ route('blog-show', $blog->slug) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $blog->title }}
                                </a>
                            </h3>
                        </article>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
</section>
