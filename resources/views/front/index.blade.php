@extends('front.layouts.head')

{{-- @section('title', 'Product Details') --}}

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- ==== main start ==== -->
            <main>
                <!-- ==== hero start ==== -->
                <section class="rainbow-hero" id="home">

                    <span class="rainbow-hero__dot dot-1"></span>
                    <span class="rainbow-hero__dot dot-2"></span>
                    <span class="rainbow-hero__dot dot-3"></span>
                    <span class="rainbow-hero__dot dot-4"></span>
                    <span class="rainbow-hero__dot dot-5"></span>

                    <div class="container">

                        <div class="row align-items-center">

                            {{-- Left content --}}
                            <div class="col-12 col-lg-6">

                                <div class="rainbow-hero__content">

                                    <span class="rainbow-hero__badge">
                                        <i class="fa-solid fa-sparkles"></i>
                                        LET'S CREATE COLORFUL MEMORIES
                                    </span>

                                    <h1>
                                        WE&nbsp;CREATE &nbsp;
                                        <span class="text-outline">COLOURS&nbsp;</span>FOR
                                        EVERY
                                        <span class="text-fill">CELEBRATION</span>
                                    </h1>

                                    <p>
                                        Vibrant, premium-quality Rangoli colours crafted to
                                        bring creativity, tradition and happiness to every
                                        celebration &mdash; trusted across India and exported
                                        worldwide.
                                    </p>

                                    {{-- Single minimal CTA (text + underline + arrow, no box) --}}
                                    <a href="#products" class="rainbow-hero__link">
                                        Explore Products
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    {{-- Trust strip --}}
                                    <div class="rainbow-hero__trust">

                                        <div class="rainbow-hero__trust-item">
                                            <strong>2007</strong>
                                            <span>Established</span>
                                        </div>

                                        <div class="rainbow-hero__trust-divider"></div>

                                        <div class="rainbow-hero__trust-item">
                                            <strong>25+</strong>
                                            <span>Countries Exported</span>
                                        </div>

                                        <div class="rainbow-hero__trust-divider"></div>

                                        <div class="rainbow-hero__trust-item">
                                            <strong>100%</strong>
                                            <span>Premium Quality</span>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            {{-- Right product visual --}}
                            <div class="col-12 col-lg-6">

                                <div class="rainbow-hero__visual">

                                    <div class="rainbow-hero__ring">

                                        <div class="rainbow-hero__ring-inner"></div>

                                        <div class="rainbow-hero__pedestal"></div>

                                        <div class="rainbow-hero__slider" id="rainbowHeroSlider">
                                            <img src="{{ asset('assets/front/images/rainbow/container.png') }}"
                                                alt="Rainbow Heritage Royale Premium Rangoli Colour 2Kg" class="active">
                                            <img src="{{ asset('assets/front/images/rainbow/2kg-YELLOW.png') }}"
                                                alt="Rainbow Majesty Pink Rangoli Colour Pouch">
                                            <img src="{{ asset('assets/front/images/rainbow/pouch.png') }}"
                                                alt="Rainbow Premium Rangoli Colour Container">
                                        </div>

                                    </div>

                                    {{-- Floating info cards --}}
                                    <div class="rainbow-hero__float card-quality">
                                        <i class="fa-solid fa-layer-group"></i>
                                        <div>
                                            <strong>5+</strong>
                                            <span>Product Ranges</span>
                                        </div>
                                    </div>

                                    <div class="rainbow-hero__float card-shades">
                                        <i class="fa-solid fa-boxes-stacked"></i>
                                        <div>
                                            <strong>11+</strong>
                                            <span>Pack Sizes</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    {{-- Scroll indicator --}}
                    {{-- <a href="#about" class="rainbow-hero__scroll">
                        <span>SCROLL</span>
                        <i class="fa-solid fa-arrow-down"></i>
                    </a> --}}

                </section>
                <!-- ==== / hero end ==== -->
                <!-- ==== about rainbow start ==== -->
                <section class="rainbow-about" id="about">

                    <div class="container">

                        <div class="row align-items-start gaper">

                            {{-- LEFT: Image collage + stats bar --}}
                            <div class="col-12 col-lg-6">

                                <div class="rainbow-about__media">

                                    <div class="rainbow-about__collage">

                                        <div class="rainbow-about__photo photo-main">
                                            <img src="{{ asset('assets/front/images/rainbow/about-main.jpg') }}"
                                                alt="Rainbow Colors - Premium Rangoli Colour Manufacturing">
                                        </div>

                                        <div class="rainbow-about__photo photo-accent">
                                            <img src="{{ asset('assets/front/images/rainbow/about-accent.jpg') }}"
                                                alt="Rainbow Colors - Colour Craftsmanship">
                                        </div>

                                        {{-- <div class="rainbow-about__glow"></div> --}}

                                    </div>

                                    {{-- Signature quote strip (replaces numeric stats) --}}
                                    <div class="rainbow-about__quote">

                                        <i class="fa-solid fa-quote-left"></i>

                                        <p>
                                            Every shade we create carries a piece of tradition,
                                            made for the moments that matter most.
                                        </p>

                                        <span>&mdash; Rainbow Colors</span>

                                    </div>

                                </div>

                            </div>


                            {{-- RIGHT: Content --}}
                            <div class="col-12 col-lg-6">

                                <div class="rainbow-about__content">
                                    <span class="rainbow-about__glow"></span>

                                    <span class="rainbow-section-label">
                                        <i class="fa-solid fa-sparkles"></i>
                                        ABOUT RAINBOW COLORS
                                    </span>

                                    <h2>
                                        Every Shade Tells <br>
                                        <em>A Story</em>
                                    </h2>

                                    <p class="rainbow-about__lead">
                                        We don&rsquo;t just sell colour &mdash;
                                        <strong>we celebrate it.</strong>
                                    </p>

                                    <p>
                                        Rainbow Colors brings together the beauty of Indian
                                        tradition and the vibrance of modern celebrations
                                        through premium, export-grade Rangoli colours &mdash;
                                        trusted across India and exported worldwide.
                                    </p>

                                    {{-- Vertical feature list, not cards --}}
                                    <ul class="rainbow-about__list">

                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            <div>
                                                <h5>Safe &amp; Non-Toxic</h5>
                                                <p>Skin-friendly formulations for every celebration.</p>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            <div>
                                                <h5>Fragrant Colour Variants</h5>
                                                <p>Scented shades that add a fresh, sensory touch to celebrations.</p>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            <div>
                                                <h5>Made With Care</h5>
                                                <p>Created for joyful, worry-free celebrations.</p>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="rainbow__button">
                                        <a href="#products" class="rainbow-btn">
                                            Discover Our Colours
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>
                <!-- ==== / about rainbow end ==== -->
                <!-- ==== products start ==== -->
                <section class="rainbow-products" id="products">

                    <div class="container">

                        {{-- Heading --}}
                        <div class="rainbow-products__heading">

                            <div>
                                <span class="rainbow-products__eyebrow">
                                    <i class="fa-solid fa-sparkles"></i>
                                    OUR PRODUCTS
                                </span>

                                <h2>
                                    COLOUR FOR
                                    <span>EVERY FORMAT</span>
                                </h2>
                            </div>

                            <p>
                                From everyday pouches to premium export containers,
                                explore our full range crafted for every celebration
                                and every scale of business.
                            </p>

                        </div>


                        {{-- Category cards --}}
                        <div class="row gaper">

                            {{-- Pouch --}}
                            <div class="col-12 col-md-6 col-xl-4">

                                <a href="#" class="rainbow-category-card pouch-card">

                                    <div class="rainbow-category-card__visual">

                                        <span class="category-number">01</span>
                                        <span class="category-label">Pouch</span>

                                        <img src="{{ asset('assets/front/images/rainbow/container.png') }}"
                                            alt="Rainbow Colors Rangoli Colour Pouch - 100g 250g 500g">

                                    </div>

                                    <div class="rainbow-category-card__content">

                                        <div>
                                            <span class="category-type">3 Sizes</span>
                                            <h3>Pouch Range</h3>
                                            <p>Everyday-use pouches available in 100g, 250g and 500g.</p>
                                        </div>

                                        <span class="card-link">
                                            Explore
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>

                                    </div>

                                </a>

                            </div>


                            {{-- Container --}}
                            <div class="col-12 col-md-6 col-xl-4">

                                <a href="#" class="rainbow-category-card container-card">

                                    <div class="rainbow-category-card__visual">

                                        <span class="category-number">02</span>
                                        <span class="category-label">Container</span>

                                        <img src="{{ asset('assets/front/images/rainbow/container.png') }}"
                                            alt="Rainbow Colors Rangoli Colour Container - 250g to 2kg">

                                    </div>

                                    <div class="rainbow-category-card__content">

                                        <div>
                                            <span class="category-type">4 Sizes</span>
                                            <h3>Container Range</h3>
                                            <p>Premium containers from 250g up to our signature 2kg pack.</p>
                                        </div>

                                        <span class="card-link">
                                            Explore
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>

                                    </div>

                                </a>

                            </div>


                            {{-- Box --}}
                            <div class="col-12 col-md-6 col-xl-4">

                                <a href="#" class="rainbow-category-card box-card">

                                    <div class="rainbow-category-card__visual">

                                        <span class="category-number">03</span>
                                        <span class="category-label">Box</span>

                                        <img src="{{ asset('assets/front/images/rainbow/box.png') }}"
                                            alt="Rainbow Colors Sparsh and Signature Rangoli Colour Box">

                                    </div>

                                    <div class="rainbow-category-card__content">

                                        <div>
                                            <span class="category-type">3 Variants</span>
                                            <h3>Box Range</h3>
                                            <p>Sparsh 250g and Signature 500g &mdash; gift-ready presentation.</p>
                                        </div>

                                        <span class="card-link">
                                            Explore
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>

                                    </div>

                                </a>

                            </div>

                        </div>


                        {{-- Bottom bar --}}
                        <div class="rainbow-products__bottom">

                            <div class="rainbow-products__colours">
                                <span>50+ SHADES ACROSS ALL RANGES</span>
                                <div>
                                    <i class="colour-red"></i>
                                    <i class="colour-blue"></i>
                                    <i class="colour-purple"></i>
                                    <i class="colour-pink"></i>
                                    <i class="colour-green"></i>
                                    <i class="colour-orange"></i>
                                    <i class="colour-yellow"></i>
                                    <i class="colour-parrot"></i>
                                </div>
                            </div>

                            <a href="#" class="rainbow-products__button">
                                View Full Catalogue
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </section>
                <!-- ==== / products end ==== -->
                <!-- ==== why rainbow start ==== -->
                <section class="rainbow-why" id="why-rainbow">

                    <div class="container">

                        {{-- Header --}}
                        <div class="rainbow-why__header">

                            <span class="rainbow-section-label">
                                <i class="fa-solid fa-sparkles"></i>
                                WHY RAINBOW COLORS
                            </span>

                            <h2>
                                MORE THAN
                                <span>JUST COLOUR</span>
                            </h2>

                            <p>
                                We bring together vibrant colours, thoughtful formulations
                                and export-grade quality to make every celebration
                                &mdash; and every business partnership &mdash; special.
                            </p>

                        </div>


                        {{-- Feature cards --}}
                        <div class="row gaper">

                            {{-- 01 --}}
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="rainbow-why-card">
                                    <div class="rainbow-why-card__top">
                                        <span class="why-number">01</span>
                                        <div class="why-icon why-yellow">
                                            <i class="fa-solid fa-award"></i>
                                        </div>
                                    </div>
                                    <h3>17+ Years of Trust</h3>
                                    <p>Nearly two decades of proven quality, trusted by industry leaders since inception.
                                    </p>
                                    <span class="why-line yellow-line"></span>
                                </div>

                            </div>

                            {{-- 02 --}}
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="rainbow-why-card">
                                    <div class="rainbow-why-card__top">
                                        <span class="why-number">02</span>
                                        <div class="why-icon why-pink">
                                            <i class="fa-solid fa-wind"></i>
                                        </div>
                                    </div>
                                    <h3>Rich Fragrance</h3>
                                    <p>Scented colour variants that add a fresh, sensory touch to every celebration.</p>
                                    <span class="why-line pink-line"></span>
                                </div>
                            </div>

                            {{-- 03 --}}
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="rainbow-why-card">
                                    <div class="rainbow-why-card__top">
                                        <span class="why-number">03</span>
                                        <div class="why-icon why-blue">
                                            <i class="fa-solid fa-globe"></i>
                                        </div>
                                    </div>
                                    <h3>Export Quality</h3>
                                    <p>International quality standards, trusted by partners across borders.</p>
                                    <span class="why-line blue-line"></span>
                                </div>
                            </div>

                            {{-- 04 --}}
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="rainbow-why-card">
                                    <div class="rainbow-why-card__top">
                                        <span class="why-number">04</span>
                                        <div class="why-icon why-orange">
                                            <i class="fa-solid fa-gem"></i>
                                        </div>
                                    </div>
                                    <h3>Premium Colours</h3>
                                    <p>Vivid, long-lasting shades crafted with premium-grade ingredients.</p>
                                    <span class="why-line orange-line"></span>
                                </div>
                            </div>


                        </div>


                        {{-- Bottom Statement --}}
                        <div class="rainbow-why__statement">
                            <span>COLOUR IS OUR LANGUAGE.</span>
                            <strong>CELEBRATION IS OUR PURPOSE.</strong>
                        </div>

                    </div>

                </section>
                <!-- ==== / why rainbow end ==== -->
                <!-- ==== journey start ==== -->
                <section class="rainbow-story" id="journey">

                    <div class="container">

                        <div class="rainbow-story__header">

                            <div class="rainbow-story__header-left">
                                <span class="rainbow-story__eyebrow">
                                    <i class="fa-solid fa-sparkles"></i>
                                    OUR JOURNEY
                                </span>

                                <h2>
                                    17+ YEARS OF
                                    <span>COLOUR &amp; CRAFT</span>
                                </h2>
                            </div>

                            <p>
                                From a small dolomite unit in Chhota Udepur to a premium
                                colour brand trusted across India and beyond.
                            </p>

                        </div>


                        {{-- Year tabs --}}
                        <div class="story-tabs" id="storyTabs">

                            <button class="story-tab active" data-target="tab-2007">
                                <span class="tab-year">2007</span>
                                <span class="tab-label">The Foundation</span>
                            </button>

                            <button class="story-tab" data-target="tab-2019">
                                <span class="tab-year">2019</span>
                                <span class="tab-label">Birth of Rainbow</span>
                            </button>

                            <button class="story-tab" data-target="tab-2026">
                                <span class="tab-year">2026</span>
                                <span class="tab-label">What's Next</span>
                            </button>

                            <span class="story-tabs__slider" id="storyTabsSlider"></span>

                        </div>


                        {{-- Panels --}}
                        <div class="story-panels" id="storyPanels">

                            {{-- 2007 --}}
                            <div class="story-panel active" id="tab-2007">
                                <div class="story-panel__image">
                                    <img src="{{ asset('images/journey/journey-2007.jpg') }}"
                                        alt="Varun Minerals founded 2007">
                                </div>
                                <div class="story-panel__content">
                                    <span class="panel-tag">ROOTED IN TRUST</span>
                                    <h3>Where It All Began</h3>
                                    <p>
                                        Founded in Chhota Udepur, Gujarat &mdash; supplying premium
                                        materials to India's leading paint brands, and laying the
                                        foundation for what would become Rainbow.
                                    </p>
                                </div>
                            </div>

                            {{-- 2019 --}}
                            <div class="story-panel" id="tab-2019">

                                <div class="story-panel__image">
                                    <img src="{{ asset('images/journey/journey-2019.jpg') }}"
                                        alt="Rainbow brand launched 2019">
                                </div>

                                <div class="story-panel__content">
                                    <span class="panel-tag">BIRTH OF RAINBOW</span>
                                    <h3>A Journey from Tradition to Colour</h3>
                                    <p>
                                        In 2018, experiments with Colour Rangoli and Holi
                                        Gulal began, launching the vibrant Rainbow brand
                                        in 2019. What started in a 300 sq. ft. rented
                                        space grew rapidly &mdash; thanks to a relentless
                                        focus on premium quality, skin-safe ingredients,
                                        and eco-friendly production.
                                    </p>
                                </div>

                            </div>

                            {{-- 2021 --}}
                            <div class="story-panel" id="tab-2021">

                                <div class="story-panel__image">
                                    <img src="{{ asset('images/journey/journey-2021.jpg') }}"
                                        alt="Rainbow scaling production 2021">
                                </div>

                                <div class="story-panel__content">
                                    <span class="panel-tag">SCALING NEW HEIGHTS</span>
                                    <h3>Growth Across India &amp; Beyond</h3>
                                    <p>
                                        By 2020, Rainbow had crossed 3,000 tons in annual
                                        colour sales &mdash; growing to 5,000 tons by 2021.
                                        Today, operating from a fully owned, automated
                                        facility with in-house quality control labs,
                                        Rainbow delivers over 10,000 tons of Rangoli
                                        colours and 5,000 tons of Holi Gulal each year.
                                    </p>
                                </div>

                            </div>

                            {{-- 2026 --}}
                            <div class="story-panel" id="tab-2026">

                                <div class="story-panel__image">
                                    <img src="{{ asset('images/journey/journey-2026.jpg') }}"
                                        alt="Unit-2 premium packaging facility Vadodara 2026">
                                </div>

                                <div class="story-panel__content">
                                    <span class="panel-tag">WHAT'S NEXT</span>
                                    <h3>Introducing Unit&ndash;2</h3>
                                    <p>
                                        Launching in Vadodara as a dedicated premium
                                        packaging unit &mdash; founded by Manav Patel in
                                        collaboration with Harshit Upadhyay, focused on
                                        retail and smaller-size packaging with a more
                                        premium, professional customer experience.
                                    </p>
                                </div>

                            </div>

                        </div>


                        <div class="rainbow-story__cta">
                            <a href="{{ url('/about') }}#journey" class="story-cta-btn">
                                Read Our Full Story
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                </section>
                <!-- ==== / journey end ==== -->
            </main>
            <!-- ==== / main end ==== -->
            <!-- ==== footer start ==== -->
            @include('front.layouts.footer')
            <!-- ==== / footer end ==== -->
        </div>
    </div>
    </div>
@endsection
