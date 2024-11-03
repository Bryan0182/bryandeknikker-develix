document.addEventListener('DOMContentLoaded', function () {
    const timelineContainer = document.querySelector('.timeline-container');
    const timelineLine = document.querySelector('.timeline-line');

    if (timelineContainer && timelineLine) {
        function updateLineWidth() {
            const totalWidth = timelineContainer.scrollWidth;
            timelineLine.style.width = `${totalWidth}px`;
        }

        updateLineWidth();

        // Use ResizeObserver to handle width changes
        const resizeObserver = new ResizeObserver(updateLineWidth);
        resizeObserver.observe(timelineContainer);
    }
});
