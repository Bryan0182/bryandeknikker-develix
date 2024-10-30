<div class="container mx-auto timeline-section py-5 px-4 flex flex-col items-center">
    <div class="text-center mb-6">
        <h2 class="text-2xl font-semibold">{{ $title }}</h2>
        <p class="mt-2">{{ $description }}</p>
    </div>

    <div class="timeline-scroll-container overflow-x-auto w-full">
        <div class="timeline-container flex relative w-[max-content]">
            <div class="timeline-line"></div>

            @foreach ($timelineItems as $timelineItem)
                <div class="timeline-item flex flex-col items-center max-w-xs">
                    <div class="timeline-icon-wrapper">
                        <div class="timeline-icon w-10 h-10 rounded-full flex items-center justify-center">
                            {{ $timelineItem['number'] }}
                        </div>
                    </div>
                    <div class="timeline-content text-center">
                        <h3 class="timeline-title text-lg font-semibold">{{ $timelineItem['title'] }}</h3>
                        @if (!empty($timelineItem['date']))
                            <span class="timeline-date text-md font-semibold px-3 py-1 rounded-md">{{ $timelineItem['date'] }}</span>
                        @endif
                        <p class="timeline-description">{{ $timelineItem['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
