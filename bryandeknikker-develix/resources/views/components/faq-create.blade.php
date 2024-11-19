<div class="container mx-auto py-5 px-4">
    <h1 class="text-3xl font-bold mb-6">FAQ Aanmaken</h1>

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

    <form action="{{ route('faq-store') }}" method="POST" class="p-6 rounded border">
        @csrf

        <!-- Vraag -->
        <div class="mb-4">
            <label for="question" class="block font-semibold mb-2">Vraag</label>
            <input type="text" id="question" name="question" value="{{ old('question') }}" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <!-- Antwoord -->
        <div class="mb-4">
            <label for="answer" class="block font-semibold mb-2">Antwoord</label>
            <textarea id="answer" name="answer" required
                      class="w-full px-4 py-2 border rounded-lg focus:outline-none">{{ old('answer') }}</textarea>
        </div>

        <!-- Categorie -->
        <div class="mb-4">
            <label for="category" class="block font-semibold mb-2">Categorie</label>
            <input type="text" id="category" name="category" value="{{ old('category') }}" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <!-- Actief -->
        <div class="mb-4 flex items-center">
            <input type="checkbox" id="is_active" name="is_active" value="1" class="mr-2" {{ old('is_active', true) ? 'checked' : '' }}>
            <label for="is_active" class="font-semibold">Actief</label>
        </div>

        <button type="submit" class="font-bold py-2 px-4 rounded-lg transition duration-200">
            Opslaan
        </button>
    </form>
</div>
