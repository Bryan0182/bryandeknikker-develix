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
                    <th class="border px-4 py-2 text-left">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td class="border px-4 py-2 location-name">{{ $location->location }}</td>
                        <td class="border px-4 py-2 location-slug">{{ $location->slug }}</td>
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
</div>
