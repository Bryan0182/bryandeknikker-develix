const serviceSelect = document.getElementById('service');
const pagesContainer = document.getElementById('pages-container');
const pageTypesContainer = document.getElementById('page-types-container');
const websiteUrlContainer = document.getElementById('website-url-container');

serviceSelect.addEventListener('change', function () {
    const selectedService = this.value;

    // Toon het aantal pagina's en selecteren van pagina's als "Website Ontwikkeling" is geselecteerd
    if (selectedService === 'website') {
        pagesContainer.style.display = 'block';
        pageTypesContainer.style.display = 'block';
    } else {
        pagesContainer.style.display = 'none';
        pageTypesContainer.style.display = 'none';
    }

    // Toon het veld voor website-URL als "SEO Optimalisatie" is geselecteerd
    if (selectedService === 'seo') {
        websiteUrlContainer.style.display = 'block';
    } else {
        websiteUrlContainer.style.display = 'none';
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const pagesInput = document.getElementById('pages');
    const checkboxes = document.querySelectorAll('.checkbox');

    const updatePagesInput = () => {
        const selectedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
        const currentInputValue = parseInt(pagesInput.value, 10) || 1;

        // Update alleen als geselecteerde checkboxes groter zijn dan het huidige invoergetal
        if (selectedCount > currentInputValue) {
            pagesInput.value = selectedCount;
        }
    };

    // Luister naar veranderingen in de checkboxes
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updatePagesInput);
    });

    // Zorg ervoor dat het inputveld minimaal 1 is
    pagesInput.addEventListener('input', () => {
        if (parseInt(pagesInput.value, 10) < 1) {
            pagesInput.value = 1;
        }
    });
});
