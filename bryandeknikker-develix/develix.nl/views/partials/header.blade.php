<header class="header px-4 py-4 sticky top-0 bg-white z-50 transition-all duration-300">
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
                <a href="{{ route('diensten') }}" class="focus:outline-none menu-item">Diensten</a>
                <div id="dropdown-menu" class="absolute hidden group-hover:block py-2 px-2 w-80">
                    <!-- Menu Items -->
                </div>
            </div>
            <a href="#" class="menu-item">Over Develix</a>
            <a href="#" class="menu-item">Blog</a>
        </nav>

        <!-- Contact en Thema-switcher (desktop) -->
        <nav class="hidden lg:flex items-center space-x-4">
            <a href="#" class="contact-button">Contact</a>
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
            <button id="mobile-dropdown-btn" class="block menu-item focus:outline-none">Diensten</button>
            <div id="mobile-dropdown-menu" class="hidden space-y-2 pl-4">
                <a href="{{ route('diensten') }}" class="block menu-item">Diensten</a>
                <a href="#" class="block menu-item">Website</a>
                <a href="#" class="block menu-item">SEO</a>
                <a href="#" class="block menu-item">Social</a>
                <a href="#" class="block menu-item">Design</a>
                <a href="#" class="block menu-item">Applicatie</a>
                <a href="#" class="block menu-item">Hosting</a>
            </div>
        </div>
        <a href="#" class="block menu-item">Over Develix</a>
        <a href="#" class="block menu-item">Contact</a>

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
