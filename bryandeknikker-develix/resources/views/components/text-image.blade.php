<section class="text-image-section px-4 py-5 lg:py-12">
    <div class="container mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 gap-24 items-center">

        <div data-aos="fade-up" class="text-box order-1 md:order-1">
            <h2 class="title">{{ $title }}</h2>
            <p class="description">{{ $description }}</p>
        </div>

        <div data-aos="zoom-in" class="image-wrapper order-2 md:order-2 justify-center flex">
            <img
                src="{{ $imageSrc }}"
                data-light="{{ $imageSrc }}"
                data-dark="{{ $imageSrcDark }}"
                alt="{{ $altText }}"
                width="{{ $width }}"
                height="{{ $height }}"
                loading="eager"
                class="theme-image @if(isset($imageClass)){{ $imageClass }}@endif"
            >
        </div>

    </div>
</section>
