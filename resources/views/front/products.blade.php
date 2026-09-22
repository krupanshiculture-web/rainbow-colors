@extends('front.layouts.head')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!--  PAGE HERO START -->
            <section class="rainbow-page-hero">

                {{-- Creative Colour Elements --}}
                <div class="rainbow-page-hero__colour colour-one"></div>
                <div class="rainbow-page-hero__colour colour-two"></div>
                <div class="rainbow-page-hero__colour colour-three"></div>

                <div class="rainbow-page-hero__rings">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="rainbow-page-hero__dots">
                    <i></i>
                    <i></i>
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

                <div class="container">

                    <div class="rainbow-page-hero__inner">

                        <div class="rainbow-page-hero__breadcrumb">
                            <a href="{{ url('/') }}">Home</a>
                            <i class="fa-solid fa-chevron-right"></i>
                            <span>Products</span>
                        </div>

                        <div class="rainbow-page-hero__heading-wrap">

                            <h1>
                                COLOUR FOR
                                <span>EVERY FORMAT.</span>
                            </h1>

                        </div>

                    </div>

                </div>

            </section>
            <!-- PAGE HERO END -->


            <!-- ==== product ranges start ==== -->
            <section class="rainbow-ranges" id="product-ranges">

                <div class="rainbow-ranges__shape shape-one"></div>
                <div class="rainbow-ranges__shape shape-two"></div>

                <div class="container">

                    <div class="rainbow-products__heading">

                        <div>
                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                EXPLORE OUR RANGES
                            </span>

                            <h2>
                                THREE FORMATS.
                                <span>ONE RAINBOW.</span>
                            </h2>
                        </div>

                        <p>
                            From convenient pouches to premium containers and
                            presentation-ready boxes, choose the format that
                            fits your colour range and customer experience.
                        </p>

                    </div>


                    <div class="range-panels" id="rangePanels">

                        <!--POUCH -->

                        <a href="{{ url('/products/pouch') }}" class="range-panel panel-pouch active"
                            aria-label="Explore Pouch Range">

                            <div class="range-panel__bg"></div>

                            <div class="range-panel__shine"></div>

                            <span class="range-panel__number">01</span>

                            <div class="range-panel__image">

                                <img src="{{ asset('assets/front/images/rainbow/pouch.png') }}" alt="Rainbow Pouch Range">

                            </div>


                            <div class="range-panel__content">

                                <div class="range-panel__text">

                                    <span class="range-panel__meta">
                                        3 Sizes
                                        <b></b>
                                        12 Shades
                                    </span>

                                    <h3>Pouch</h3>

                                    <p>
                                        Everyday-use pouches designed for easy
                                        handling and vibrant celebrations.
                                        Available in 100g, 250g and 500g.
                                    </p>

                                    <span class="range-panel__cta">
                                        Explore Range
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>

                                </div>

                            </div>

                        </a>


                        <!-- CONTAINER -->

                        <a href="{{ url('/products/container') }}" class="range-panel panel-container"
                            aria-label="Explore Container Range">

                            <div class="range-panel__bg"></div>

                            <div class="range-panel__shine"></div>

                            <span class="range-panel__number">02</span>

                            <div class="range-panel__image">

                                <img src="{{ asset('assets/front/images/rainbow/container.png') }}"
                                    alt="Rainbow Container Range">

                            </div>


                            <div class="range-panel__content">

                                <div class="range-panel__text">

                                    <span class="range-panel__meta">
                                        4 Sizes
                                        <b></b>
                                        Up to 12 Shades
                                    </span>

                                    <h3>Container</h3>

                                    <p>
                                        Premium containers built for durability,
                                        presentation and larger celebrations,
                                        from 250g up to our signature 2kg.
                                    </p>

                                    <span class="range-panel__cta">
                                        Explore Range
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>

                                </div>

                            </div>

                        </a>


                        <!-- BOX -->

                        <a href="{{ url('/products/box') }}" class="range-panel panel-box" aria-label="Explore Box Range">

                            <div class="range-panel__bg"></div>

                            <div class="range-panel__shine"></div>

                            <span class="range-panel__number">03</span>

                            <div class="range-panel__image">

                                <img src="{{ asset('assets/front/images/rainbow/box.png') }}" alt="Rainbow Box Range">

                            </div>


                            <div class="range-panel__content">

                                <div class="range-panel__text">

                                    <span class="range-panel__meta">
                                        Sparsh
                                        <b></b>
                                        Signature
                                        <b></b>
                                        Neo Pop
                                    </span>

                                    <h3>Box</h3>

                                    <p>
                                        Gift-ready presentation with fragrant
                                        shades and premium packaging designed
                                        to make every celebration memorable.
                                    </p>

                                    <span class="range-panel__cta">
                                        Explore Range
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>

                                </div>

                            </div>

                        </a>

                    </div>

                </div>

            </section>
            <!-- ==== / product ranges end ==== -->

            <!-- ==== scented colours start ==== -->
            <section class="rainbow-scent-intro" id="fragrance">

                <div class="scent-bg-glow scent-bg-glow--pink"></div>
                <div class="scent-bg-glow scent-bg-glow--blue"></div>

                <span class="scent-bg-flower scent-bg-flower--one"></span>
                <span class="scent-bg-flower scent-bg-flower--two"></span>

                <div class="container">

                    <div class="scent-hero">

                        <!-- LEFT CONTENT -->
                        <div class="scent-hero__content">

                            <span class="rainbow-section-label">
                                <i class="fa-solid fa-sparkles"></i>
                                WHAT MAKES US DIFFERENT
                            </span>

                            <h2>
                                VIBRANT
                                <strong>COLOURS.</strong>
                                BEAUTIFUL
                                <em>FRAGRANCE.</em>
                            </h2>

                            {{-- <p class="scent-hero__lead">
                                It&rsquo;s not just colour &mdash; it&rsquo;s a refreshing
                                experience. Our specially crafted scented colours bring
                                vivid shades and beautiful fragrance to every celebration.
                            </p> --}}

                            <!-- FEATURES -->
                            <div class="scent-features">

                                <div class="scent-feature">

                                    <div class="scent-feature__icon scent-feature__icon--yellow">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>

                                    <div class="scent-feature__content">
                                        <h3>Colour You Can See</h3>

                                        <p>
                                            Vibrant and long-lasting shades crafted for
                                            every celebration.
                                        </p>
                                    </div>

                                </div>


                                <div class="scent-feature">

                                    <div class="scent-feature__icon scent-feature__icon--pink">
                                        <i class="fa-solid fa-wind"></i>
                                    </div>

                                    <div class="scent-feature__content">
                                        <h3>Fragrance You Can Feel</h3>

                                        <p>
                                            Scented colours designed to add another
                                            sensory touch to every celebration.
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- RIGHT VISUAL -->
                        <div class="scent-hero__visual">

                            <div class="scent-visual__glow"></div>

                            <div class="scent-visual__blob">

                                <!-- Colour Glow -->
                                <div class="scent-powder scent-powder--pink"></div>
                                <div class="scent-powder scent-powder--yellow"></div>
                                <div class="scent-powder scent-powder--blue"></div>


                                <!-- Product -->
                                <div class="scent-product">

                                    <img src="{{ asset('assets/front/images/rainbow/Fragrance_hero.png') }}"
                                        alt="Rainbow scented colours">

                                </div>

                            </div>


                            <!-- Random Text 01 -->
                            <div class="scent-word scent-word--see">

                                <span>See it.</span>

                                <i></i>

                            </div>


                            <!-- Random Text 02 -->
                            <div class="scent-word scent-word--smell">

                                <span>Smell it.</span>

                                <i></i>

                            </div>


                            <!-- Random Text 03 -->
                            <div class="scent-word scent-word--feel">

                                <span>Feel the</span>

                                <strong>Celebration.</strong>

                                <i></i>

                            </div>

                        </div>

                    </div>


                    <!-- Bottom Tagline -->
                    <div class="scent-tagline">

                        <span></span>

                        <div>

                            <small>
                                MORE THAN JUST COLOUR
                            </small>

                            <strong>
                                A SCENTED CELEBRATION
                            </strong>

                        </div>

                        <span></span>

                    </div>

                </div>

            </section>
            <!-- ==== / scented colours end ==== -->

            <!-- ==== fragrance grid start ==== -->
            <section class="rainbow-scent-grid">

                <div class="container">

                    <div class="rainbow-products__heading">

                        <div>
                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                THE FRAGRANCE COLLECTION
                            </span>

                            <h2>
                                TEN Secret
                                <span>Scents</span>
                            </h2>
                        </div>

                        <p>
                            Ten signature fragrances designed to add a fresh sensory experience to
                            every colourful celebration, available across our Pouch, Container and Box ranges.
                        </p>

                    </div>


                    <div class="scent-garden">

                        <div class="scent-bloom bloom-1">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-royal-orchid.png') }}"
                                    alt="Royal Orchid Fragrance">
                            </div>
                            <h3>Royal Orchid</h3>
                        </div>

                        <div class="scent-bloom bloom-2">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-green-lily.png') }}"
                                    alt="Green Lily Fragrance">
                            </div>
                            <h3>Green Lily</h3>
                        </div>

                        <div class="scent-bloom bloom-3">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-fleur-orange.png') }}"
                                    alt="Fleur D'Orange Fragrance">
                            </div>
                            <h3>Fleur D&rsquo;Orange</h3>
                        </div>

                        <div class="scent-bloom bloom-4">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-lemon-grass.png') }}"
                                    alt="Lemon Grass Fragrance">
                            </div>
                            <h3>Lemon Grass</h3>
                        </div>

                        <div class="scent-bloom bloom-5">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-lotus-mystique.png') }}"
                                    alt="Lotus Mystique Fragrance">
                            </div>
                            <h3>Lotus Mystique</h3>
                        </div>

                        <div class="scent-bloom bloom-6">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-lavender-luxe.png') }}"
                                    alt="Lavender Luxe Fragrance">
                            </div>
                            <h3>Lavender Luxe</h3>
                        </div>

                        <div class="scent-bloom bloom-7">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-bougainvillea.png') }}"
                                    alt="Bougainvillea Charm Fragrance">
                            </div>
                            <h3>Bougainvillea Charm</h3>
                        </div>

                        <div class="scent-bloom bloom-8">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-royal-hibiscus.png') }}"
                                    alt="Royal Hibiscus Fragrance">
                            </div>
                            <h3>Royal Hibiscus</h3>
                        </div>

                        <div class="scent-bloom bloom-9">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-aqua-breeze.png') }}"
                                    alt="Aqua Breeze Fragrance">
                            </div>
                            <h3>Aqua Breeze</h3>
                        </div>

                        <div class="scent-bloom bloom-10">
                            <div class="scent-bloom__img">
                                <img src="{{ asset('assets/front/images/rainbow/fragrance/scent-sun-blossom.png') }}"
                                    alt="Sun Blossom Fragrance">
                            </div>
                            <h3>Sun Blossom</h3>
                        </div>

                    </div>
                </div>

            </section>
            <!-- ==== / fragrance grid end ==== -->

            <!-- ==== catalogue showcase start ==== -->
            <section class="rainbow-catalogue">

                <div class="catalogue__glow catalogue__glow--pink"></div>
                <div class="catalogue__glow catalogue__glow--yellow"></div>

                <div class="container">

                    <div class="catalogue__wrap">

                        <!-- LEFT CONTENT -->
                        <div class="catalogue__content">

                            <span class="rainbow-section-label catalogue__label">
                                <i class="fa-solid fa-book-open"></i>
                                OUR CATALOGUE
                            </span>

                            <h2>
                                EXPLORE THE
                                <span>WORLD OF RAINBOW.</span>
                            </h2>

                            <p>
                                Discover our complete collection of vibrant colours,
                                premium packaging and signature fragrances. Explore
                                every range, size and format in one place.
                            </p>

                            <div class="catalogue__features">

                                <span>
                                    <i class="fa-solid fa-check"></i>
                                    Pouch Range
                                </span>

                                <span>
                                    <i class="fa-solid fa-check"></i>
                                    Container Range
                                </span>

                                <span>
                                    <i class="fa-solid fa-check"></i>
                                    Box Collection
                                </span>

                                <span>
                                    <i class="fa-solid fa-check"></i>
                                    Fragrance Collection
                                </span>

                            </div>

                            <div class="catalogue__actions">

                                <a href="#" class="catalogue__btn catalogue__btn--primary" target="_blank">
                                    <i class="fa-solid fa-book-open"></i>
                                    View Catalogue
                                </a>

                                <a href="#" class="catalogue__btn catalogue__btn--outline" download>
                                    <i class="fa-solid fa-download"></i>
                                    Download PDF
                                </a>

                            </div>

                        </div>


                        <!-- RIGHT CATALOGUE VISUAL -->
                        <div class="catalogue__visual">

                            <div class="catalogue__circle catalogue__circle--one"></div>
                            <div class="catalogue__circle catalogue__circle--two"></div>

                            <span class="catalogue__float catalogue__float--yellow">
                                <i class="fa-solid fa-sparkles"></i>
                            </span>

                            <span class="catalogue__float catalogue__float--pink">
                                <i class="fa-solid fa-star"></i>
                            </span>

                            <div class="catalogue-book">

                                <div class="catalogue-book__top">
                                    <span>RAINBOW</span>
                                    <i class="fa-solid fa-sparkles"></i>
                                </div>

                                <div class="catalogue-book__title">
                                    <small>THE COMPLETE</small>

                                    <strong>
                                        COLOUR
                                        <span>COLLECTION</span>
                                    </strong>

                                    <p>
                                        POUCH &nbsp;•&nbsp;
                                        CONTAINER &nbsp;•&nbsp;
                                        BOX
                                    </p>
                                </div>

                                <div class="catalogue-book__colours">

                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>

                                </div>

                                <div class="catalogue-book__bottom">
                                    <span>COLOUR FOR EVERY CELEBRATION</span>
                                    <strong>2026</strong>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <!-- ==== / catalogue showcase end ==== -->


            @include('front.layouts.footer')

        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const panels = document.querySelectorAll(".range-panel");

            if (!panels.length) return;

            const desktopQuery = window.matchMedia("(min-width: 992px)");

            function setActive(panel) {
                panels.forEach(item => {
                    item.classList.remove("active");
                });

                panel.classList.add("active");
            }


            function enableDesktop() {

                panels.forEach(panel => {

                    panel.addEventListener("mouseenter", panel._hoverHandler);

                });

            }


            function disableDesktop() {

                panels.forEach(panel => {

                    panel.removeEventListener("mouseenter", panel._hoverHandler);

                });

            }


            panels.forEach(panel => {

                panel._hoverHandler = function() {

                    if (desktopQuery.matches) {
                        setActive(panel);
                    }

                };


                panel.addEventListener("click", function(event) {

                    if (desktopQuery.matches) {
                        return;
                    }

                    if (!panel.classList.contains("active")) {

                        event.preventDefault();

                        setActive(panel);

                        return;
                    }

                });

            });


            function handleResponsiveMode() {

                if (desktopQuery.matches) {
                    enableDesktop();
                } else {
                    disableDesktop();
                }

            }


            handleResponsiveMode();


            if (desktopQuery.addEventListener) {

                desktopQuery.addEventListener(
                    "change",
                    handleResponsiveMode
                );

            } else {

                desktopQuery.addListener(
                    handleResponsiveMode
                );

            }

        });
    </script>
@endsection
