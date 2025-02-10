<div class="w-full faq-container-fluid">
    <div class="container mx-auto faq-section">
        <div class="flex flex-col items-center text-center gap-5 py-5 px-4">
            <div class="w-full md:w-3/4">
                <h2 class="faq-title font-bold text-3xl">{{ $title }}</h2>
                <p class="faq-text">{{ $description }}</p>
                <div class="faq-list grid mt-5" id="faq-container">
                    @foreach ($faqs as $index => $faq)
                        <div class="faq-item pt-4">
                            <button
                                class="faq-question w-full text-left font-semibold text-lg flex justify-between items-center"
                                data-index="{{ $index }}">
                                {{ $faq->question }}
                                <span>
                                    <img src="{{ $imageSrc }}" alt="" width="20" height="20">
                                </span>
                            </button>
                            <div
                                class="faq-answer hidden mt-3 text-left"
                                id="faq-answer-{{ $index }}">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
