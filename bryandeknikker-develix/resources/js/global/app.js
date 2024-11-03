document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function(event) {
        const dropdownMenu = document.getElementById('dropdown-menu');
        if (dropdownMenu && !dropdownMenu.contains(event.target) && !event.target.matches('#dropdown-btn')) {
            dropdownMenu.classList.add('hidden');
        }
    });

    const menuBtn = document.getElementById('menu-btn');
    if (menuBtn) {
        menuBtn.addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const iconBars = document.getElementById('icon-bars');
            const iconCross = document.getElementById('icon-cross');

            if (mobileMenu) mobileMenu.classList.toggle('hidden');
            if (iconBars && iconCross) {
                iconBars.classList.toggle('hidden', !mobileMenu.classList.contains('hidden'));
                iconCross.classList.toggle('hidden', mobileMenu.classList.contains('hidden'));
            }
        });
    }

    const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
    if (mobileDropdownBtn) {
        mobileDropdownBtn.addEventListener('click', function() {
            const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
            if (mobileDropdownMenu) mobileDropdownMenu.classList.toggle('hidden');
        });
    }

    const themeSwitcher = document.getElementById('theme-switcher');
    const themeSwitcherMobile = document.getElementById('theme-switcher-mobile');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');
    const iconSunMobile = document.getElementById('icon-sun-mobile');
    const iconMoonMobile = document.getElementById('icon-moon-mobile');
    const heroImage = document.querySelector('.hero-container img');

    function applyTheme(theme) {
        document.body.classList.toggle('dark-theme', theme === 'dark');
        if (iconSun && iconMoon) {
            iconSun.style.display = theme === 'dark' ? 'block' : 'none';
            iconMoon.style.display = theme === 'light' ? 'block' : 'none';
        }
        if (iconSunMobile && iconMoonMobile) {
            iconSunMobile.style.display = theme === 'dark' ? 'block' : 'none';
            iconMoonMobile.style.display = theme === 'light' ? 'block' : 'none';
        }
        if (heroImage) {
            heroImage.src = theme === 'dark' ? heroImage.getAttribute('data-dark') : heroImage.getAttribute('data-light');
        }
        document.querySelectorAll('.theme-image').forEach((img) => {
            img.src = theme === 'dark' ? img.getAttribute('data-dark') : img.getAttribute('data-light');
        });
    }

    function initTheme() {
        const savedTheme = localStorage.getItem('theme');
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
        applyTheme(savedTheme || (prefersDarkScheme ? 'dark' : 'light'));
    }

    function toggleTheme() {
        const currentTheme = document.body.classList.contains('dark-theme') ? 'light' : 'dark';
        applyTheme(currentTheme);
        localStorage.setItem('theme', currentTheme);
    }

    if (themeSwitcher) themeSwitcher.addEventListener('click', toggleTheme);
    if (themeSwitcherMobile) themeSwitcherMobile.addEventListener('click', toggleTheme);
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
        applyTheme(event.matches ? 'dark' : 'light');
    });
    initTheme();

    window.addEventListener('scroll', function() {
        const header = document.querySelector('.header');
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('scrolled', 'py-2');
                header.classList.remove('py-4');
            } else {
                header.classList.remove('scrolled', 'py-2');
                header.classList.add('py-4');
            }
        }
    });

    document.querySelectorAll('.read-more-cta-button, .read-more-hero-button, .read-more-services-button').forEach(element => {
        const iconUrl = window.location.hostname.includes('develix.nl')
            ? "url('/images/develix.nl/develix-angle-right.svg')"
            : "url('/images/bryandeknikker.nl/bryandeknikker-angle-right.svg')";
        element.style.setProperty('--icon--angle-right-url', iconUrl);
    });
});
