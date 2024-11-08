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

<div class="container mx-auto py-5 px-4 my-5 shadow-container">
    <form action="{{ route('blog-store') }}" method="POST" enctype="multipart/form-data" class="p-6 rounded">
        @csrf
        <div class="mb-4">
            <label for="title" class="block font-semibold mb-2">Titel</label>
            <input type="text" id="title" name="title" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="intro" class="block font-semibold mb-2">Intro</label>
            <textarea id="intro" name="intro" rows="3" required
                      class="w-full px-4 py-2 border rounded-lg focus:outline-none"></textarea>
        </div>

        <div class="mb-6">
            <label for="content" class="block font-semibold mb-2">Inhoud</label>
            <textarea id="content" name="content" rows="20" required
                      class="w-full px-4 py-2 border rounded-lg focus:outline-none"></textarea>
        </div>

        <div class="mb-4">
            <label for="author" class="block font-semibold mb-2">Auteur</label>
            <select id="author" name="author" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
                @foreach($users as $user)
                    <option value="{{ $user->name }}" {{ old('author', 'Bryan de Knikker') == $user->name ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="publication_date" class="block font-semibold mb-2">Publicatiedatum en Tijd</label>
            <input type="datetime-local" id="publication_date" name="publication_date" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="status" class="block font-semibold mb-2">Status</label>
            <select id="status" name="status" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
                <option value="concept">Concept</option>
                <option value="gepubliceerd">Gepubliceerd</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="featured_image" class="block font-semibold mb-2">Featured Image</label>
            <input type="file" id="featured_image" name="featured_image" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="meta_title" class="block font-semibold mb-2">Meta Titel</label>
            <input type="text" id="meta_title" name="meta_title" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="meta_description" class="block font-semibold mb-2">Meta Beschrijving</label>
            <textarea id="meta_description" name="meta_description" rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none"></textarea>
        </div>

        <button type="submit"
                class="w-full font-bold py-2 px-4 rounded-lg transition duration-200">
            Publiceer
        </button>
    </form>
</div>
