document.addEventListener('DOMContentLoaded', function () {
    const timelineContainer = document.querySelector('.timeline-container');
    const timelineLine = document.querySelector('.timeline-line');

    if (timelineContainer && timelineLine) {
        timelineContainer.style.overflowX = 'auto';
        timelineContainer.style.scrollbarWidth = 'none';
        timelineContainer.style.msOverflowStyle = 'none';

        function updateLineWidth() {
            const totalWidth = timelineContainer.scrollWidth;
            timelineLine.style.width = `${totalWidth}px`;
        }

        updateLineWidth();

        const resizeObserver = new ResizeObserver(updateLineWidth);
        resizeObserver.observe(timelineContainer);
    }
});

// Sla dit op als een apart JS-bestand, bijvoorbeeld: public/js/timeline-drag-scroll.js
document.addEventListener('DOMContentLoaded', function() {
    const timelineContainer = document.querySelector('.timeline-scroll-container');

    if (!timelineContainer) return;

    let isDown = false;
    let startX;
    let scrollLeft;

    // Wanneer de muis ingedrukt wordt
    timelineContainer.addEventListener('mousedown', (e) => {
        isDown = true;
        timelineContainer.style.cursor = 'grabbing';
        startX = e.pageX - timelineContainer.offsetLeft;
        scrollLeft = timelineContainer.scrollLeft;

        // Voorkomt dat tekst geselecteerd wordt tijdens het slepen
        e.preventDefault();
    });

    // Wanneer de muis losgelaten wordt of buiten het element gaat
    timelineContainer.addEventListener('mouseup', () => {
        isDown = false;
        timelineContainer.style.cursor = 'grab';
    });

    timelineContainer.addEventListener('mouseleave', () => {
        isDown = false;
        timelineContainer.style.cursor = '';
    });

    // Wanneer de muis beweegt terwijl deze ingedrukt is
    timelineContainer.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - timelineContainer.offsetLeft;
        const walk = (x - startX) * 2; // Vermenigvuldig met 2 voor snellere beweging
        timelineContainer.scrollLeft = scrollLeft - walk;
    });

    // Voeg een visuele indicator toe dat het element sleepbaar is
    timelineContainer.style.cursor = 'grab';

    // Voeg ook een class toe voor aanvullende styling
    timelineContainer.classList.add('mouse-draggable');
});
