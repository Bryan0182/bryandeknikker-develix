<div class="container mx-auto py-5 px-4">
    <h1 class="text-3xl font-bold mb-6">Locatie Aanmaken</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <strong>Er zijn fouten opgetreden:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('location-store') }}" method="POST" class="p-6 rounded border">
        @csrf

        <div class="mb-4">
            <label for="location" class="block font-semibold mb-2">Locatie</label>
            <input type="text" id="location" name="location" value="{{ old('location') }}" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="slug" class="block font-semibold mb-2">Slug</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <button type="submit" class="font-bold py-2 px-4 rounded-lg transition duration-200">
            Locatie Opslaan
        </button>
    </form>
</div>
