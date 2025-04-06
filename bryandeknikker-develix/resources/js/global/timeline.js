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
