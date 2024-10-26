// Desktop Dropdown-menu toggle
document.addEventListener('click', function(event) {
    const dropdownMenu = document.getElementById('dropdown-menu');
    const isClickInsideDropdown = dropdownMenu && dropdownMenu.contains(event.target);
    const isDropdownButton = event.target.matches('#dropdown-btn');

    if (!isClickInsideDropdown && !isDropdownButton) {
        dropdownMenu?.classList.add('hidden');
    }
});

// Mobile menu toggle and icon switch
document.getElementById('menu-btn').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const iconBars = document.getElementById('icon-bars');
    const iconCross = document.getElementById('icon-cross');

    mobileMenu.classList.toggle('hidden');
    iconBars.classList.toggle('hidden', !mobileMenu.classList.contains('hidden'));
    iconCross.classList.toggle('hidden', mobileMenu.classList.contains('hidden'));
});

// Toggle mobile dropdown within menu
document.getElementById('mobile-dropdown-btn').addEventListener('click', function() {
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
    mobileDropdownMenu.classList.toggle('hidden');
});

// Theme switch variables
const themeSwitcher = document.getElementById('theme-switcher');
const themeSwitcherMobile = document.getElementById('theme-switcher-mobile');
const iconSun = document.getElementById('icon-sun');
const iconMoon = document.getElementById('icon-moon');
const iconSunMobile = document.getElementById('icon-sun-mobile');
const iconMoonMobile = document.getElementById('icon-moon-mobile');
const heroImage = document.querySelector('.hero-container img');

// Apply theme and toggle icons, and change hero image
function applyTheme(theme) {
    document.body.classList.toggle('dark-theme', theme === 'dark');

    // Switch icons on desktop
    iconSun.style.display = theme === 'dark' ? 'block' : 'none';
    iconMoon.style.display = theme === 'light' ? 'block' : 'none';

    // Switch icons on mobile
    iconSunMobile.style.display = theme === 'dark' ? 'block' : 'none';
    iconMoonMobile.style.display = theme === 'light' ? 'block' : 'none';

    // Switch hero image based on theme
    if (heroImage) {
        const lightSrc = heroImage.getAttribute('data-light');
        const darkSrc = heroImage.getAttribute('data-dark');
        heroImage.src = theme === 'dark' ? darkSrc : lightSrc;
    }
}

// Initialize theme based on saved or preferred theme
function initTheme() {
    const savedTheme = localStorage.getItem('theme');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const initialTheme = savedTheme || (prefersDarkScheme ? 'dark' : 'light');
    applyTheme(initialTheme);
}

// Theme toggle handler for desktop and mobile
function toggleTheme() {
    const currentTheme = document.body.classList.contains('dark-theme') ? 'light' : 'dark';
    applyTheme(currentTheme);
    localStorage.setItem('theme', currentTheme);
}

// Event listeners for theme switching
themeSwitcher.addEventListener('click', toggleTheme);
themeSwitcherMobile.addEventListener('click', toggleTheme);

// Automatically adjust theme based on system preference
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
    applyTheme(event.matches ? 'dark' : 'light');
});

// Initialize theme and images on page load
initTheme();
