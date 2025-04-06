<!-- resources/views/components/featured-services.blade.php -->
<div class="container mx-auto services-section py-5 px-4">
    <div class="text-center mb-6">
        <h2 class="section-title text-3xl font-bold">{{ $title }}</h2>
        <p class="section-subtitle">{{ $description }}</p>
    </div>
    <div class="flex flex-wrap">
        @foreach ($plans as $plan)
            <div class="w-full md:w-1/3 px-4 my-4">
                <div class="relative plan-card rounded-3xl p-8 shadow-lg flex flex-col h-full {{ isset($plan['popular']) && $plan['popular'] ? 'plan-card-popular' : '' }}">
                    @if(isset($plan['popular']) && $plan['popular'])
                        <div class="absolute top-0 right-0 plan-badge px-4 py-1 rounded-bl-lg rounded-tr-3xl text-sm font-medium">
                            {{ $plan['popular_text'] }}
                        </div>
                    @endif

                    <div class="mb-6">
                        <h2 class="plan-title text-xl font-medium mb-2 {{ isset($plan['popular']) && $plan['popular'] ? 'plan-title-popular' : '' }}">{{ $plan['title'] }}</h2>
                        <p class="plan-description text-sm">{{ $plan['description'] }}</p>
                    </div>

                    <a href="{{ $plan['url'] ?? '#' }}" class="plan-button {{ isset($plan['popular']) && $plan['popular'] ? 'plan-button-popular' : '' }} py-3 px-4 rounded-lg mb-6 font-medium text-sm w-full text-center">
                        {{ $plan['button_text'] ?? 'Start a free trial' }}
                    </a>

                    <div>
                        <p class="features-title text-sm font-medium mb-4">{{ $plan['features_title'] ?? 'Start selling with:' }}</p>
                        <ul class="space-y-3">
                            @foreach($plan['features'] as $feature)
                                <li class="flex items-center text-sm feature-item">
                                    <span class="feature-icon mr-2">+</span>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
