
    <div class="block-2 space-between-blocks overflow-hidden">
        <div class="container-xl px-lg-4 px-xl-0 position-relative">
            <div class="row align-items-center mx-auto" id="block__container">
                <div class="col-lg-5 col-xl-6 position-relative" style="z-index: 2">
                    <h1 class="block__title block__title--big mb-4">
                    title
                    </h1>
                    <p class="block__paragraph mb-3">
                        description
                    </p>
                    <div class="mb-5 mt-4 mb-lg-0 mt-lg-5">
                        <a href="/" class="btn btn-primary">
                            button
                        </a>
                    </div>
                </div>
                    <div id="unique-id-2" class="splide block-2__splide col-lg-7 col-xl-6">
                        <div class="block-2__custom-arrows splide__arrows">
                            <button class="block-2__splide-btn splide__arrow splide__arrow--prev d-none"></button>
                            <button class="block-2__splide-btn splide__arrow splide__arrow--next">
                                <svg width="1.5rem" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="splide__track">
                            <div class="splide__list">
                                @foreach([1,1,1,1] as $content)
                                        <div class="splide__slide block-2-card d-flex">
                                            <div>
                                                <span class="fr-icon fr-icon--large mx-auto">
                                                    <i class="fa fa-lg"></i>
                                                </span>
                                            </div>
                                            <div class="pe-3 pe-lg-4"></div>
                                            <div>
                                                <h3 class="block-2-card__title mb-2">
                                                    title
                                                </h3>
                                                <p class="block-2-card__paragraph">
                                                    description
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            <div class="block-2__svg-shapes">
                <svg class="block-2__dots-svg--left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <pattern id="pattern" width="19" height="19" viewBox="0 0 40 40" patternUnits="userSpaceOnUse" patternTransform="rotate(90)">
                            <rect id="pattern-background" x="0" y="0" width="400%" height="400%" fill="transparent"></rect>
                            <circle cx="20" cy="20" r="5" fill="currentColor" stroke="currentColor" stroke-width="0"></circle>
                            <circle cx="20" cy="20" r="0" fill="currentColor" stroke="currentColor" stroke-width="0"></circle>
                        </pattern>
                    </defs>
                    <rect fill="url(#pattern)" height="100%" width="100%" y="0" x="0"></rect>
                </svg>
                <svg class="block-2__dots-svg--right" xmlns="http://www.worg/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <pattern id="pattern" width="19" height="19" viewBox="0 0 40 40" patternUnits="userSpaceOnUse" patternTransform="rotate(90)">
                            <rect id="pattern-background" x="0" y="0" width="400%" height="400%" fill="transparent"></rect>
                            <circle cx="20" cy="20" r="5" fill="currentColor" stroke="currentColor" stroke-width="0"></circle>
                            <circle cx="20" cy="20" r="0" fill="currentColor" stroke="currentColor" stroke-width="0"></circle>
                        </pattern>
                    </defs>
                    <rect fill="url(#pattern)" height="100%" width="100%" y="0" x="0"></rect>
                </svg>
            </div>
        </div>
    </div>