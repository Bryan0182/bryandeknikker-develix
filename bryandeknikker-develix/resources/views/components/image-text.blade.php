<div class="container mx-auto py-5 px-4">
    <div class="flex flex-col md:flex-row items-center md:space-x-8">
        <div class="image-section md:w-1/2 w-full flex justify-center md:justify-end">
            <img src="{{ $imageSrc }}"
                 data-light="{{ $imageSrc }}"
                 data-dark="{{ $imageSrcDark }}"
                 class=" mx-auto img-fluid theme-image @if(isset($imageClass)){{ $imageClass }}@endif"
                 alt="{{ $altText }}" width="{{ $width }}" height="{{ $height }}" loading="eager">
        </div>

        <div class="text-section md:w-1/2 w-full mb-6 md:mb-0">
            <h2 class="text-3xl font-bold mb-4">{{ $title }}</h2>
            <p class="text-lg mb-4">{{ $description }}</p>
        </div>
    </div>
</div>
