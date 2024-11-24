<div class="container mx-auto px-4 py-5 quote-section">
    <div class="flex justify-center">
        @if(session('success'))
            <div class="alert alert-success p-4 mb-4" role="alert">
                <p class="font-bold">Bedankt!</p>
                <p>{{ session('success') }}</p>
            </div>
        @else
            <div class="quote-form p-6">
                <h2 class="text-3xl font-bold mb-6">Vraag een vrijblijvende offerte aan</h2>

                <!-- Error Veld -->
                @if($errors->any())
                    <div class="alert alert-danger p-4 mb-4" role="alert">
                        <p class="font-bold">Oeps! Er zijn fouten in het formulier:</p>
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('quote.generate') }}" method="POST" class="space-y-4" id="quote-form">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block font-semibold mb-2">Naam</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   class="w-full px-4 py-2 @error('name') border-red-500 @enderror">
                            @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block font-semibold mb-2">E-mailadres</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-2 @error('name') border-red-500 @enderror">
                            @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="service" class="block font-semibold mb-2">Kies een dienst</label>
                        <select id="service" name="service" required
                                class="w-full px-4 py-2 @error('name') border-red-500 @enderror">
                            <option value="" disabled selected>Selecteer een dienst</option>
                            <option value="website" {{ old('service') == 'website' ? 'selected' : '' }}>Website Ontwikkeling</option>
                            <option value="applicatie" {{ old('service') == 'applicatie' ? 'selected' : '' }}>Applicatie  Ontwikkeling</option>
                            <option value="seo" {{ old('service') == 'seo' ? 'selected' : '' }}>SEO Optimalisatie</option>
                            <option value="social" {{ old('service') == 'seo' ? 'selected' : '' }}>Social Media</option>
                            <option value="design" {{ old('service') == 'seo' ? 'selected' : '' }}>Design</option>
                            <option value="hosting" {{ old('service') == 'hosting' ? 'selected' : '' }}>Hosting</option>
                        </select>
                        @error('service')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div id="pages-container" style="display: none;">
                        <label for="pages" class="block font-semibold mb-2">Aantal pagina's</label>
                        <input type="number" id="pages" name="pages" value="{{ old('pages') }}"
                               class="w-full px-4 py-2 @error('name') border-red-500 @enderror">
                        @error('pages')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div id="page-types-container" style="display: none;">
                        <label class="block font-semibold mb-2">Selecteer de pagina's</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="items-center flex">
                                <input type="checkbox" id="home_page" name="page_types[]" value="Home" class="mr-2 checkbox">
                                <label for="home_page">Home</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="about_page" name="page_types[]" value="Over Ons" class="mr-2 checkbox">
                                <label for="about_page">Over Ons</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="services_page" name="page_types[]" value="Diensten" class="mr-2 checkbox">
                                <label for="services_page">Diensten</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="contact_page" name="page_types[]" value="Contact" class="mr-2 checkbox">
                                <label for="contact_page">Contact</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="webshop_page" name="page_types[]" value="Webshop" class="mr-2 checkbox">
                                <label for="webshop_page">Webshop</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="blog_page" name="page_types[]" value="Blog" class="mr-2 checkbox">
                                <label for="blog_page">Blog</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="portfolio_page" name="page_types[]" value="Portfolio" class="mr-2 checkbox">
                                <label for="portfolio_page">Portfolio</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="faq_page" name="page_types[]" value="FAQ" class="mr-2 checkbox">
                                <label for="faq_page">FAQ</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="testimonials_page" name="page_types[]" value="Testimonials" class="mr-2 checkbox">
                                <label for="testimonials_page">Testimonials</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="team_page" name="page_types[]" value="Ons Team" class="mr-2 checkbox">
                                <label for="team_page">Ons Team</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="pricing_page" name="page_types[]" value="Prijzen" class="mr-2 checkbox">
                                <label for="pricing_page">Prijzen</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="gallery_page" name="page_types[]" value="Galerij" class="mr-2 checkbox">
                                <label for="gallery_page">Galerij</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="events_page" name="page_types[]" value="Evenementen" class="mr-2 checkbox">
                                <label for="events_page">Evenementen</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="careers_page" name="page_types[]" value="Vacatures" class="mr-2 checkbox">
                                <label for="careers_page">Vacatures</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="contact_form_page" name="page_types[]" value="Contactformulier" class="mr-2 checkbox">
                                <label for="contact_form_page">Contactformulier</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="landing_page" name="page_types[]" value="Landingspagina" class="mr-2">
                                <label for="landing_page">Landingspagina</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="terms_page" name="page_types[]" value="Algemene Voorwaarden" class="mr-2">
                                <label for="terms_page">Algemene Voorwaarden</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="privacy_page" name="page_types[]" value="Privacyverklaring" class="mr-2">
                                <label for="privacy_page">Privacyverklaring</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="support_page" name="page_types[]" value="Support" class="mr-2">
                                <label for="support_page">Support</label>
                            </div>
                            <div class="items-center flex">
                                <input type="checkbox" id="custom_page" name="page_types[]" value="Maatwerk Pagina" class="mr-2">
                                <label for="custom_page">Maatwerk Pagina</label>
                            </div>
                        </div>
                    </div>
                    <div id="website-url-container" style="display: none;">
                        <label for="website_url" class="block font-semibold mb-2">Website URL</label>
                        <input type="url" id="website_url" name="website_url" value="{{ old('website_url') }}"
                               class="w-full px-4 py-2 @error('name') border-red-500 @enderror">
                        @error('website_url')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="extra_features" class="block font-semibold mb-2">Extra's (optioneel)</label>
                        <textarea id="extra_features" name="extra_features" rows="3"
                                  class="w-full px-4 py-2 @error('name') border-red-500 @enderror">{{ old('extra_features') }}</textarea>
                        @error('extra_features')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="w-full py-3 px-4 font-bold submit-quote">
                        Offerte aanvragen
                    </button>
                </form>
            </div>
        @endif
    </div>
</div>
