<div class="container mx-auto py-5 px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Dashboard</h1>
        <a href="{{ route('logout.get') }}" class="text-sm font-semibold link-shortcuts">Uitloggen</a>
    </div>

    <!-- Blogs Section -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Overzicht van blogs</h2>
            <a href="{{ route('blog-create') }}" class="text-sm font-semibold link-shortcuts">Blog toevoegen</a>
        </div>

        @if($blogs->isEmpty())
            <p>Er zijn nog geen blogs beschikbaar.</p>
        @else
            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="border px-4 py-2 text-left">Titel</th>
                    <th class="border px-4 py-2 text-left">Status</th>
                    <th class="border px-4 py-2 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td class="border px-4 py-2 blog-title">{{ $blog->title }}</td>
                        <td class="border px-4 py-2 blog-status">{{ $blog->status }}</td>
                        <td class="border px-4 py-2 blog-actions">
                            <a href="{{ route('blog-edit', $blog->id) }}" class="blog-edit">Wijzig</a>
                            <span>|</span>
                            <form action="{{ route('blog-delete', $blog->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="blog-delete">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Users Section -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Overzicht van gebruikers</h2>
            <a href="{{ route('user-create') }}" class="text-sm font-semibold link-shortcuts">Gebruiker toevoegen</a>
        </div>

        @if($users->isEmpty())
            <p>Er zijn nog geen gebruikers geregistreerd.</p>
        @else
            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="border px-4 py-2 text-left">Naam</th>
                    <th class="border px-4 py-2 text-left">E-mail</th>
                    <th class="border px-4 py-2 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2 user-name">{{ $user->name }}</td>
                        <td class="border px-4 py-2 user-email">{{ $user->email }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('user-edit', $user->id) }}" class="user-edit">Wijzig</a>
                            <span>|</span>
                            <form action="{{ route('user-delete', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="user-delete">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Locations Section -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Overzicht van locaties</h2>
            <a href="{{ route('location-create') }}" class="text-sm font-semibold link-shortcuts">Locatie toevoegen</a>
        </div>

        @if($locations->isEmpty())
            <p>Er zijn nog geen locaties beschikbaar.</p>
        @else
            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="border px-4 py-2 text-left">Locatie</th>
                    <th class="border px-4 py-2 text-left">Slug</th>
                    <th class="border px-4 py-2 text-left">Toon in footer</th>
                    <th class="border px-4 py-2 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td class="border px-4 py-2 location-name">{{ $location->location }}</td>
                        <td class="border px-4 py-2 location-slug">{{ $location->slug }}</td>
                        <td class="border px-4 py-2 location-footer">{{ $location->show_in_footer }}</td>
                        <td class="border px-4 py-2 location-actions">
                            <a href="{{ route('location-edit', $location->id) }}" class="location-edit">Wijzig</a>
                            <span>|</span>
                            <form action="{{ route('location-delete', $location->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="location-delete">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Overzicht van veelgestelde vragen</h2>
            <a href="{{ route('faq-create') }}" class="text-sm font-semibold link-shortcuts">Vraag toevoegen</a>
        </div>
        @if($faqs->isEmpty())
            <p>Er zijn nog geen veelgestelde vragen beschikbaar.</p>
        @else
            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="border px-4 py-2 text-left">Vraag</th>
                    <th class="border px-4 py-2 text-left">Antwoord</th>
                    <th class="border px-4 py-2 text-left">Categorie</th>
                    <th class="border px-4 py-2 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($faqs as $faq)
                    <tr>
                        <td class="border px-4 py-2 location-name">{{ $faq->question }}</td>
                        <td class="border px-4 py-2 location-slug">{{ $faq->answer }}</td>
                        <td class="border px-4 py-2 location-slug">{{ $faq->category }}</td>
                        <td class="border px-4 py-2 location-actions">
                            <a href="{{ route('faq-edit', $faq->id) }}" class="location-edit">Wijzig</a>
                            <span>|</span>
                            <form action="{{ route('faq-delete', $faq->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="location-delete">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Reviews Section -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Overzicht van reviews</h2>
            <a href="{{ route('review-create') }}" class="text-sm font-semibold link-shortcuts">Review toevoegen</a>
        </div>

        @if($reviews->isEmpty())
            <p>Er zijn nog geen reviews beschikbaar.</p>
        @else
            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="border px-4 py-2 text-left">Auteur</th>
                    <th class="border px-4 py-2 text-left">Functie</th>
                    <th class="border px-4 py-2 text-left">Bedrijf</th>
                    <th class="border px-4 py-2 text-left">Website</th>
                    <th class="border px-4 py-2 text-left">Review</th>
                    <th class="border px-4 py-2 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td class="border px-4 py-2 review-author">{{ $review->author }}</td>
                        <td class="border px-4 py-2 review-role">{{ $review->role ?? '-' }}</td>
                        <td class="border px-4 py-2 review-company">{{ $review->company ?? '-' }}</td>
                        <td class="border px-4 py-2 review-website">
                            @if($review->website_url)
                                <a href="{{ $review->website_url }}" target="_blank" class="review-website">
                                    {{ $review->website_url }}
                                </a>
                            @else
                                -
                            @endif
                        </td>
                        <td class="border px-4 py-2 review-content">{{ Str::limit($review->content, 50) }}</td>
                        <td class="border px-4 py-2 review-actions">
                            <a href="{{ route('review-edit', $review->id) }}" class="review-edit">Wijzig</a>
                            <span>|</span>
                            <form action="{{ route('review-delete', $review->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="review-delete">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
