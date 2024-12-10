<div class="container mx-auto py-5 px-4">
    <h1 class="text-2xl font-bold mb-6">Review Bewerken</h1>

    @if ($errors->any())
        <div class="p-4 rounded mb-4 bg-red-100 text-red-700">
            <strong>Er zijn fouten opgetreden:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('review-update', $review->id) }}" method="POST" class="p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="author" class="block font-semibold mb-2">Auteur</label>
            <input type="text" id="author" name="author" value="{{ old('author', $review->author) }}" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="role" class="block font-semibold mb-2">Functie</label>
            <input type="text" id="role" name="role" value="{{ old('role', $review->role) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="company" class="block font-semibold mb-2">Bedrijf</label>
            <input type="text" id="company" name="company" value="{{ old('company', $review->company) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="website_url" class="block font-semibold mb-2">Website</label>
            <input type="url" id="website_url" name="website_url" value="{{ old('website_url', $review->website_url) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="content" class="block font-semibold mb-2">Review</label>
            <textarea id="content" name="content" rows="5" required
                      class="w-full px-4 py-2 border rounded-lg focus:outline-none">{{ old('content', $review->content) }}</textarea>
        </div>

        <button type="submit" class="w-full font-bold py-2 px-4 rounded-lg transition duration-200 bg-blue-500 text-white hover:bg-blue-600">
            Review Bijwerken
        </button>
    </form>
</div>
