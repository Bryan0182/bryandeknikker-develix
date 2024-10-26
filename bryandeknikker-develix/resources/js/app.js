// Desktop Dropdown-menu toggle
document.addEventListener('click', function(event) {
    const dropdownMenu = document.getElementById('dropdown-menu');
    const isDropdownButton = event.target.matches('#dropdown-btn');
    if (dropdownMenu && !dropdownMenu.contains(event.target) && !isDropdownButton) {
        dropdownMenu.classList.add('hidden');
    }
});

// Mobile menu toggle and icon switch
const menuBtn = document.getElementById('menu-btn');
if (menuBtn) {
    menuBtn.addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const iconBars = document.getElementById('icon-bars');
        const iconCross = document.getElementById('icon-cross');

        if (mobileMenu) {
            mobileMenu.classList.toggle('hidden');
        }
        if (iconBars && iconCross) {
            iconBars.classList.toggle('hidden', !mobileMenu.classList.contains('hidden'));
            iconCross.classList.toggle('hidden', mobileMenu.classList.contains('hidden'));
        }
    });
}

// Toggle mobile dropdown within menu
const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
if (mobileDropdownBtn) {
    mobileDropdownBtn.addEventListener('click', function() {
        const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
        if (mobileDropdownMenu) {
            mobileDropdownMenu.classList.toggle('hidden');
        }
    });
}

// Theme switch variables
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
        const lightSrc = heroImage.getAttribute('data-light');
        const darkSrc = heroImage.getAttribute('data-dark');
        heroImage.src = theme === 'dark' ? darkSrc : lightSrc;
    }

    // Update all theme images
    document.querySelectorAll('.theme-image').forEach((img) => {
        const lightSrc = img.getAttribute('data-light');
        const darkSrc = img.getAttribute('data-dark');
        img.src = theme === 'dark' ? darkSrc : lightSrc;
    });
}

function initTheme() {
    const savedTheme = localStorage.getItem('theme');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const initialTheme = savedTheme || (prefersDarkScheme ? 'dark' : 'light');
    applyTheme(initialTheme);
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
