<header class="header px-4 py-4 sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">

        <a href="{{ route('home') }}">
            <img src="{{ asset('images/develix.nl/develix.svg') }}" alt="Logo" width="60" height="60">
        </a>

        <span id="menu-btn" class="ml-2 text-lg font-semibold lg:hidden cursor-pointer">
            <img id="icon-bars" src="{{ asset('images/develix.nl/bars.svg') }}" alt="Menu" width="30" height="30">
            <img id="icon-cross" src="{{ asset('images/develix.nl/xmark.svg') }}" alt="Close" width="30" height="30" class="hidden">
        </span>

        <!-- Navigatiebalk (desktop) -->
        <nav id="menu" class="space-x-4 hidden lg:flex">
            <div class="relative group">
                <a href="{{ route('services') }}" class="focus:outline-none menu-item dropdown-switch">Diensten</a>
                <div id="dropdown-menu"
                     class="absolute hidden group-hover:block py-2 px-2 w-80">
                    <a href="{{ route('website') }}" class="block px-4 py-2 nav-item">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/develix.nl/website.svg') }}" alt="Website Icon" width="24"
                                 height="24">
                            <div>
                                <p class="font-semibold menu-item">Website</p>
                                <p class="text-sm text-description">Laat je website maken</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('application') }}" class="block px-4 py-2 nav-item">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/develix.nl/application.svg') }}" alt="Applicatie Icon" width="24"
                                 height="24">
                            <div>
                                <p class="font-semibold menu-item">Applicatie</p>
                                <p class="text-sm text-description">Laat een maatwerk applicatie maken</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('seo') }}" class="block px-4 py-2 nav-item">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/develix.nl/seo.svg') }}" alt="SEO Icon" width="24" height="24">
                            <div>
                                <p class="font-semibold menu-item">SEO</p>
                                <p class="text-sm text-description">Verbeter je vindbaarheid in Google</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('social') }}" class="block px-4 py-2 nav-item">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/develix.nl/social.svg') }}" alt="Social Icon" width="24"
                                 height="24">
                            <div>
                                <p class="font-semibold menu-item">Social Media</p>
                                <p class="text-sm text-description">Geef je socials een boost</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('design') }}" class="block px-4 py-2 nav-item">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/develix.nl/design.svg') }}" alt="Design Icon" width="24"
                                 height="24">
                            <div>
                                <p class="font-semibold menu-item">Design</p>
                                <p class="text-sm text-description">Laat een professioneel design maken</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('hosting') }}" class="block px-4 py-2 nav-item">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/develix.nl/hosting.svg') }}" alt="Hosting Icon" width="24"
                                 height="24">
                            <div>
                                <p class="font-semibold menu-item">Hosting</p>
                                <p class="text-sm text-description">Host je website met vertrouwen</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <a href="{{ route('about-develix') }}" class="menu-item">Over Develix</a>
            <a href="{{ route('blog') }}" class="menu-item">Blog</a>
        </nav>

        <!-- Contact en Thema-switcher (desktop) -->
        <nav class="hidden lg:flex items-center space-x-4">
            <a href="{{ route('contact') }}" class="contact-button">Contact</a>
            <button id="theme-switcher" aria-label="Switch Theme" class="flex items-center">
                <span id="icon-sun" style="display: none;">
                    <img src="{{ asset('images/global/sun.svg') }}" alt="Light Theme" width="30" height="30">
                </span>
                <span id="icon-moon">
                    <img src="{{ asset('images/global/moon.svg') }}" alt="Dark Theme" width="25" height="25">
                </span>
            </button>
        </nav>
    </div>

    <!-- Mobile Menu (uitklapbaar) -->
    <div id="mobile-menu" class="lg:hidden hidden space-y-2 py-4">
        <div class="relative">
            <button id="mobile-dropdown-btn" class="block menu-item focus:outline-none dropdown-switch">Diensten</button>
            <div id="mobile-dropdown-menu" class="hidden space-y-2 pl-4">
                <a href="{{ route('services') }}" class="block menu-item ">Diensten</a>
                <a href="{{ route('website') }}" class="block menu-item">Website</a>
                <a href="{{ route('application') }}" class="block menu-item">Applicatie</a>
                <a href="{{ route('seo') }}" class="block menu-item">SEO</a>
                <a href="{{ route('social') }}" class="block menu-item">Social</a>
                <a href="{{ route('design') }}" class="block menu-item">Design</a>
                <a href="{{ route('hosting') }}" class="block menu-item">Hosting</a>
            </div>
        </div>
        <a href="{{ route('about-develix') }}" class="block menu-item">Over Develix</a>
        <a href="{{ route('contact') }}" class="block menu-item">Contact</a>

        <button id="theme-switcher-mobile" aria-label="Switch Theme" class="flex items-center">
            <span id="icon-sun-mobile" style="display: none;">
                <img src="{{ asset('images/global/sun.svg') }}" alt="Light Theme" width="30" height="30">
            </span>
            <span id="icon-moon-mobile">
                <img src="{{ asset('images/global/moon.svg') }}" alt="Dark Theme" width="25" height="25">
            </span>
        </button>
    </div>
</header>
