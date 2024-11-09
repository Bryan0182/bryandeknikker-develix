<div class="container mx-auto py-5 px-4">
    <h1 class="text-2xl font-bold mb-6">Locatie Bewerken</h1>

    @if ($errors->any())
        <div class="p-4 rounded mb-4 error-container">
            <strong>Er zijn fouten opgetreden:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('location-update', $location->id) }}" method="POST" class="p-6 rounded-lg shadow-md form-container">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="location" class="block font-semibold mb-2">Locatie</label>
            <input type="text" id="location" name="location" value="{{ old('location', $location->location) }}" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="slug" class="block font-semibold mb-2">Slug</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug', $location->slug) }}" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <button type="submit" class="w-full font-bold py-2 px-4 rounded-lg transition duration-200">
            Locatie Bijwerken
        </button>
    </form>
</div>
