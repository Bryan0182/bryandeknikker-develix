<div class="container mx-auto py-5 px-4">
    <form action="{{ route('blog-store') }}" method="POST" class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Titel</label>
            <input type="text" id="title" name="title" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div class="mb-6">
            <label for="content" class="block text-gray-700 font-semibold mb-2">Inhoud</label>
            <textarea id="content" name="content" rows="20" required
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
        </div>

        <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
            Publiceer
        </button>
    </form>
</div>
