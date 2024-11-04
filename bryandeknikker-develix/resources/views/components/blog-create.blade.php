<div class="container mx-auto py-5 px-4 my-5 shadow-container">
    <form action="{{ route('blog-store') }}" method="POST" class="p-6 rounded-lg">
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

        <button type="submit"
                class="w-full font-bold py-2 px-4 rounded-lg transition duration-200">
            Publiceer
        </button>
    </form>
</div>
