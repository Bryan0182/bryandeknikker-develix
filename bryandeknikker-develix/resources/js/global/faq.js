document.addEventListener("DOMContentLoaded", () => {
    const faqContainer = document.getElementById("faq-container");
    const faqQuestions = faqContainer.querySelectorAll(".faq-question");
    let activeIndex = null;

    faqQuestions.forEach((question) => {
        question.addEventListener("click", (e) => {
            const index = e.currentTarget.dataset.index;
            const currentAnswer = document.getElementById(`faq-answer-${index}`);
            const icon = e.currentTarget.querySelector("img"); // Selecteer het icoon in de knop

            // Reset het icoon van de vorige actieve vraag
            if (activeIndex !== null) {
                const activeAnswer = document.getElementById(`faq-answer-${activeIndex}`);
                const activeIcon = faqQuestions[activeIndex].querySelector("img");

                activeAnswer.classList.add("hidden");
                activeIcon.classList.remove("rotated"); // Verwijder de draaiing
            }

            if (activeIndex === index) {
                // Als dezelfde vraag wordt geklikt, sluit het
                activeIndex = null;
            } else {
                // Open het nieuwe antwoord
                currentAnswer.classList.remove("hidden");
                icon.classList.add("rotated"); // Voeg de draaiing toe
                activeIndex = index;
            }
        });
    });
});
