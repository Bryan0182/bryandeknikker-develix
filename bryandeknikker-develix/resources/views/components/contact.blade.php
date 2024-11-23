<div class="contact-page py-12">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <!-- Contact Form -->
            <div class="w-full lg:w-7/12 px-4 mb-12 lg:mb-0">
                <div>
                    @if(session('success'))
                        <div class="alert alert-success p-4 mb-4" role="alert">
                            <p class="font-bold">Bedankt!</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @else
                        <h2 class="text-3xl font-bold mb-4">{{ $title }}</h2>
                        <p class="mb-6">{{ $description }}</p>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="first_name" class="block font-semibold mb-2">Voornaam</label>
                                    <input type="text" id="first_name" name="first_name" required
                                           class="w-full px-4 py-2 border rounded-lg focus:outline-none">
                                </div>
                                <div>
                                    <label for="last_name" class="block font-semibold mb-2">Achternaam</label>
                                    <input type="text" id="last_name" name="last_name" required
                                           class="w-full px-4 py-2 border rounded-lg focus:outline-none">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block font-semibold mb-2">E-mailadres</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-2 border rounded-lg focus:outline-none">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block font-semibold mb-2">Telefoonnummer</label>
                                <input type="text" id="phone" name="phone"
                                       class="w-full px-4 py-2 border rounded-lg focus:outline-none">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block font-semibold mb-2">Bericht</label>
                                <textarea id="message" name="message" rows="5" required
                                          class="w-full px-4 py-2 border rounded-lg focus:outline-none"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full font-bold py-3 px-4 submit-contact-button">
                                    {{ $button_text }}
                                </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>

            <!-- Contact Details -->
            <div class="w-full lg:w-5/12 px-4">
                <div class="contact-info-block p-8">
                    <h2 class="text-3xl font-bold mb-4">{{ $contact_info }}</h2>
                    <p class="mb-6">{{ $contact_info_text }}</p>
                    <ul class="mb-6">
                        @if(!empty($phonenumber) && !empty($phonenumber_link))
                            <li class="mb-4 flex items-center">
                                <img src="{{ asset('images/global/phone-black.svg') }}"
                                     data-light="/images/global/phone-black.svg" data-dark="/images/global/phone.svg"
                                     class="img-fluid theme-image mr-4" alt="Telefoon icon" width="20" height="20"
                                     loading="eager">
                                <a href="tel:{{ $phonenumber_link }}"
                                   class="menu-item contact-info">{{ $phonenumber }}</a>
                            </li>
                        @endif

                        @if(!empty($email))
                            <li class="mb-4 flex items-center">
                                <img src="{{ asset('images/global/envelope-black.svg') }}"
                                     data-light="/images/global/envelope-black.svg"
                                     data-dark="/images/global/envelope.svg" class="img-fluid theme-image mr-4"
                                     alt="Envelop icon" width="20" height="20" loading="eager">
                                <a href="mailto:{{ $email }}" class="menu-item contact-info">{{ $email }}</a>
                            </li>
                        @endif

                        @if(!empty($address))
                            <li class="mb-4 flex items-center">
                                <img src="{{ asset('images/global/location-black.svg') }}"
                                     data-light="/images/global/location-black.svg"
                                     data-dark="/images/global/location.svg" class="img-fluid theme-image mr-4"
                                     alt="Locatie icon" width="20" height="20" loading="eager">
                                {{ $address }}
                            </li>
                        @endif
                    </ul>
                    <div class="flex space-x-4 items-center">
                        <a href="https://www.facebook.com/develixofficial/" target="_blank" class="social-icon facebook"
                           aria-label="Facebook">
                            <img src="{{ asset('images/global/facebook-black.svg') }}"
                                 data-light="/images/global/facebook-black.svg" data-dark="/images/global/facebook.svg"
                                 class="mx-auto img-fluid theme-image" alt="Facebook icon" width="15" height="15"
                                 loading="eager">
                        </a>
                        <a href="https://www.instagram.com/develix_official/" target="_blank"
                           class="social-icon instagram" aria-label="Instagram">
                            <img src="{{ asset('images/global/instagram-black.svg') }}"
                                 data-light="/images/global/instagram-black.svg"
                                 data-dark="/images/global/instagram.svg" class="mx-auto img-fluid theme-image"
                                 alt="Instagram icon" width="20" height="20" loading="eager">
                        </a>
                        <a href="https://www.linkedin.com/company/develix-official/" target="_blank"
                           class="social-icon linkedin" aria-label="LinkedIn">
                            <img src="{{ asset('images/global/linkedin-black.svg') }}"
                                 data-light="/images/global/linkedin-black.svg" data-dark="/images/global/linkedin.svg"
                                 class="mx-auto img-fluid theme-image" alt="LinkedIn icon" width="20" height="20"
                                 loading="eager">
                        </a>
                        <a href="https://nl.pinterest.com/develix_official" target="_blank"
                           class="social-icon pinterest" aria-label="LinkedIn">
                            <img src="{{ asset('images/global/pinterest-black.svg') }}"
                                 data-light="/images/global/pinterest-black.svg"
                                 data-dark="/images/global/pinterest.svg" class="mx-auto img-fluid theme-image"
                                 alt="LinkedIn icon" width="20" height="20" loading="eager">
                        </a>
                        <a href="https://x.com/DevelixOfficial" target="_blank" class="social-icon x-twitter"
                           aria-label="LinkedIn">
                            <img src="{{ asset('images/global/x-twitter-black.svg') }}"
                                 data-light="/images/global/x-twitter-black.svg"
                                 data-dark="/images/global/x-twitter.svg" class="mx-auto img-fluid theme-image"
                                 alt="LinkedIn icon" width="20" height="20" loading="eager">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
