// Desktop Dropdown-menu
document.addEventListener('click', function(event) {
    const dropdownMenu = document.getElementById('dropdown-menu');
    const isClickInsideDropdown = dropdownMenu.contains(event.target);
    const isDropdownButton = event.target.matches('#dropdown-btn');

    if (!isClickInsideDropdown && !isDropdownButton) {
        dropdownMenu.classList.add('hidden');
    }
});

document.getElementById('menu-btn').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const iconBars = document.getElementById('icon-bars');
    const iconCross = document.getElementById('icon-cross');

    // Toggle the mobile menu visibility
    mobileMenu.classList.toggle('hidden');

    // Toggle icons
    if (mobileMenu.classList.contains('hidden')) {
        iconBars.classList.remove('hidden');
        iconCross.classList.add('hidden');
    } else {
        iconBars.classList.add('hidden');
        iconCross.classList.remove('hidden');
    }
});

// Toggle de mobiele dropdown binnen het menu
document.getElementById('mobile-dropdown-btn').addEventListener('click', function() {
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
    mobileDropdownMenu.classList.toggle('hidden');
});

// Initialize images for theme switching
function initializeImages() {
    document.querySelectorAll('.theme-image').forEach(function (img) {
        const currentSrc = img.getAttribute('src');
        if (!img.getAttribute('data-light-src')) img.setAttribute('data-light-src', currentSrc);
    });
}

// Thema Switcher variabelen
const themeSwitcher = document.getElementById('theme-switcher');
const themeSwitcherMobile = document.getElementById('theme-switcher-mobile');
const iconSun = document.getElementById('icon-sun');
const iconMoon = document.getElementById('icon-moon');
const iconSunMobile = document.getElementById('icon-sun-mobile');
const iconMoonMobile = document.getElementById('icon-moon-mobile');

// Thema toepassen op basis van geselecteerd thema
function applyTheme(theme) {
    document.body.classList.toggle('dark-theme', theme === 'dark');

    // Switch icons on desktop
    iconSun.style.display = theme === 'dark' ? 'block' : 'none';
    iconMoon.style.display = theme === 'light' ? 'block' : 'none';

    // Switch icons on mobile
    iconSunMobile.style.display = theme === 'dark' ? 'block' : 'none';
    iconMoonMobile.style.display = theme === 'light' ? 'block' : 'none';
}

// Initiële thema-instelling
function initTheme() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        applyTheme(savedTheme);
    } else {
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
        applyTheme(prefersDarkScheme ? 'dark' : 'light');
    }
}

// Thema wisselen bij klik
themeSwitcher.addEventListener('click', () => {
    const currentTheme = document.body.classList.contains('dark-theme') ? 'light' : 'dark';
    applyTheme(currentTheme);
    localStorage.setItem('theme', currentTheme);
});

themeSwitcherMobile.addEventListener('click', () => {
    const currentTheme = document.body.classList.contains('dark-theme') ? 'light' : 'dark';
    applyTheme(currentTheme);
    localStorage.setItem('theme', currentTheme);
});

// Thema automatisch aanpassen op systeemvoorkeur
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
    applyTheme(event.matches ? 'dark' : 'light');
});

// Initialiseer thema en afbeeldingen
initTheme();
initializeImages();
