<div class="flex flex-col items-center py-5">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full flex items-center text-column">
                <div class="w-full">
                    <div class="flex justify-center">
                        <h1 class="text-center text-4xl mb-3">{{ $title }}</h1>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <p>{!! $description !!}</p>
                        <p>{!! $error_text !!}</p>
                        <a href="{{ $error_button_url }}" class="btn error-button mt-3">{{ $error_button }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
