<div class="container mx-auto px-4 py-5 quote-section">
    <div class="flex justify-center">
        @if(session('success'))
            <div class="alert alert-success p-4 mb-4"
                 role="alert">
                <p class="font-bold">Bedankt!</p>
                <p>{{ session('success') }}</p>
            </div>
        @else
            <div class="quote-form p-6">
                <h2 class="text-3xl font-bold mb-6">Vraag een vrijblijvende offerte aan</h2>

                <!-- Error Veld -->
                @if($errors->any())
                    <div class="alert alert-danger bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded"
                         role="alert">
                        <p class="font-bold">Oeps! Er zijn fouten in het formulier:</p>
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('quote.generate') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block font-semibold mb-2 text-gray-700">Naam</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
                            @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block font-semibold mb-2 text-gray-700">E-mailadres</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                            @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="service" class="block font-semibold mb-2 text-gray-700">Kies een dienst</label>
                        <select id="service" name="service" required
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('service') border-red-500 @enderror">
                            <option value="">Selecteer een dienst</option>
                            <option value="website" {{ old('service') == 'website' ? 'selected' : '' }}>Website
                                Ontwikkeling
                            </option>
                            <option value="seo" {{ old('service') == 'seo' ? 'selected' : '' }}>SEO Optimalisatie
                            </option>
                            <option value="hosting" {{ old('service') == 'hosting' ? 'selected' : '' }}>Hosting</option>
                        </select>
                        @error('service')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="pages" class="block font-semibold mb-2 text-gray-700">Aantal pagina's (indien van
                            toepassing)</label>
                        <input type="number" id="pages" name="pages" value="{{ old('pages') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('pages') border-red-500 @enderror">
                        @error('pages')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="extra_features" class="block font-semibold mb-2 text-gray-700">Extra's
                            (optioneel)</label>
                        <textarea id="extra_features" name="extra_features" rows="3"
                                  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('extra_features') border-red-500 @enderror">{{ old('extra_features') }}</textarea>
                        @error('extra_features')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                            class="w-full py-3 px-4 font-bold text-white bg-blue-500 hover:bg-blue-600 rounded-lg transition">
                        Offerte aanvragen
                    </button>
                </form>
            </div>
        @endif
    </div>
</div>
