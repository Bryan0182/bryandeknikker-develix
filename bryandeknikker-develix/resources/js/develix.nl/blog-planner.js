document.getElementById('publication_date').addEventListener('change', function() {
    const publicationDate = new Date(this.value);
    const now = new Date();

    const statusDropdown = document.getElementById('status');

    if (publicationDate > now) {
        // Stel de status in op 'concept' als de publicatiedatum in de toekomst ligt
        statusDropdown.value = 'concept';
    } else {
        // Stel de status in op 'gepubliceerd' als de publicatiedatum in het verleden of heden ligt
        statusDropdown.value = 'gepubliceerd';
    }
});
