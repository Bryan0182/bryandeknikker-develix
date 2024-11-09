<footer class="p-4">
    <div class="container mx-auto w-full py-4">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/develix.nl/develix.svg') }}" class="mr-3" alt="Develix Logo" width="60" height="60">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Develix</span>
                </a>
            </div>
            <div class="custom-flex">
                <div class="flex-item">
                    <h2 class="mb-6 text-lg font-semibold">Diensten</h2>
                    <ul>
                        <li class="mb-4">
                            <a href="" class="menu-item">Website laten maken</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="menu-item">Seo werkzaamheden</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="menu-item">Social werkzaamheden</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="menu-item">Design laten maken</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="menu-item">Applicatie laten maken</a>
                        </li>
                        <li>
                            <a href="" class="menu-item">Hosting</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-item">
                    <h2 class="mb-6 text-lg font-semibold">Develix</h2>
                    <ul>
                        <li class="mb-4">
                            <a href="{{ route('about-develix') }}" class="menu-item">Over Develix</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="menu-item">Contact</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="menu-item">Missie & Visie</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" class="menu-item">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-item">
                    <h2 class="mb-6 text-lg font-semibold">Bedrijfsinformatie</h2>
                    <ul>
                        <li class="mb-4">
                            <span>KvK nummer: xxxxxxxx</span>
                        </li>
                        <li class="mb-4">
                            <span>BTW nummer: xxxxxxxx</span>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="menu-item">Privacybeleid</a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">Algemene voorwaarden</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm sm:text-center">© {{ date('Y') }} Develix. Alle rechten voorbehouden.</span>
            <div class="flex space-x-5 mt-4 sm:mt-0">
                <a href="https://www.facebook.com/develixofficial/" target="_blank" class="social-icon facebook" aria-label="Facebook">
                    <img src="{{ asset('images/global/facebook-black.svg') }}" data-light="/images/global/facebook-black.svg" data-dark="/images/global/facebook.svg" class="mx-auto img-fluid theme-image" alt="Facebook icon" width="15" height="15" loading="lazy">
                </a>
                <a href="https://www.instagram.com/develix_official/" target="_blank" class="social-icon instagram" aria-label="Instagram">
                    <img src="{{ asset('images/global/instagram-black.svg') }}" data-light="/images/global/instagram-black.svg" data-dark="/images/global/instagram.svg" class="mx-auto img-fluid theme-image" alt="Instagram icon" width="20" height="20" loading="lazy">
                </a>
                <a href="https://www.linkedin.com/company/develix-official/" target="_blank" class="social-icon linkedin" aria-label="LinkedIn">
                    <img src="{{ asset('images/global/linkedin-black.svg') }}" data-light="/images/global/linkedin-black.svg" data-dark="/images/global/linkedin.svg" class="mx-auto img-fluid theme-image" alt="LinkedIn icon" width="20" height="20" loading="lazy">
                </a>
                <a href="https://nl.pinterest.com/develix_official" target="_blank" class="social-icon pinterest" aria-label="LinkedIn">
                    <img src="{{ asset('images/global/pinterest-black.svg') }}" data-light="/images/global/pinterest-black.svg" data-dark="/images/global/pinterest.svg" class="mx-auto img-fluid theme-image" alt="LinkedIn icon" width="20" height="20" loading="lazy">
                </a>
                <a href="https://x.com/DevelixOfficial" target="_blank" class="social-icon x-twitter" aria-label="LinkedIn">
                    <img src="{{ asset('images/global/x-twitter-black.svg') }}" data-light="/images/global/x-twitter-black.svg" data-dark="/images/global/x-twitter.svg" class="mx-auto img-fluid theme-image" alt="LinkedIn icon" width="20" height="20" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</footer>
