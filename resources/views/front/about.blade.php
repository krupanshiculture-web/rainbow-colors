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
                            <span>About Us</span>
                        </div>

                        <div class="rainbow-page-hero__heading-wrap">

                            <h1>
                                The People &amp; Purpose
                                <span>Behind Rainbow</span>
                            </h1>

                        </div>

                    </div>

                </div>

            </section>
            <!-- PAGE HERO END -->


            <!-- COMPANY INTRO START -->
            <section class="rainbow-intro">

                {{-- Background --}}
                <div class="rainbow-intro__bg-circle"></div>

                <div class="container">

                    <div class="row align-items-center gaper">

                        {{-- LEFT VISUAL --}}
                        <div class="col-12 col-lg-5">

                            <div class="rainbow-intro__visual">

                                <div class="rainbow-intro__visual-ring"></div>

                                <div class="rainbow-intro__photo">

                                    <img src="{{ asset('assets/front/images/rainbow/intro-1.jpg') }}"
                                        alt="Rainbow Colors manufacturing process">

                                    <div class="rainbow-intro__photo-overlay">
                                        <span>RAINBOW</span>
                                        <small>COLOURS</small>
                                    </div>

                                </div>

                                <span class="rainbow-intro__dot dot-pink"></span>
                                <span class="rainbow-intro__dot dot-blue"></span>

                            </div>

                        </div>


                        {{-- RIGHT CONTENT --}}
                        <div class="col-12 col-lg-7">

                            <div class="rainbow-intro__content">

                                <span class="rainbow-section-label">
                                    <i class="fa-solid fa-sparkles"></i>
                                    WHO WE ARE
                                </span>

                                <h2>
                                    We Don&rsquo;t Just Sell
                                    <span>Colour</span>
                                </h2>

                                <div class="rainbow-intro__quote">
                                    <p>
                                        We celebrate it &mdash; in every shade,
                                        every pack, and every festival it touches.
                                    </p>
                                </div>

                                <p class="rainbow-intro__dropcap">
                                    Rainbow Colors began as a small idea rooted in
                                    Indian tradition, and has grown into a name
                                    trusted across India and exported worldwide.
                                    What started as a modest venture in Chhota
                                    Udepur, Gujarat, has spent nearly two decades
                                    perfecting the art of colour &mdash; blending
                                    heritage craftsmanship with premium,
                                    export-grade quality standards.
                                </p>

                                <p>
                                    Today, every pouch, container and box that
                                    carries our name reflects a simple belief:
                                    colour should be safe, vibrant, and made with
                                    care &mdash; because every celebration deserves
                                    nothing less.
                                </p>


                                {{-- Mini Stats --}}
                                <div class="rainbow-intro__chips">

                                    <span>
                                        <strong>2007</strong>
                                        Established
                                    </span>

                                    <span>
                                        <strong>15+</strong>
                                        Countries
                                    </span>

                                    <span>
                                        <strong>25K+</strong>
                                        Annual Sale
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                {{-- Bottom colour line --}}
                {{-- <div class="rainbow-intro__colour-line">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div> --}}

            </section>
            <!-- COMPANY INTRO END -->

            <!--  MISSION / VISION / VALUES -->
            <section class="rainbow-purpose">

                <div class="container">

                    <!-- HEADING -->
                    <div class="rainbow-purpose__heading">

                        <div>
                            <span class="rainbow-purpose__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                OUR PURPOSE
                            </span>

                            <h2>
                                DRIVEN BY PURPOSE.
                                <span>DEFINED BY COLOUR.</span>
                            </h2>
                        </div>

                        <p>
                            The beliefs behind what we create, the way we work,
                            and the colourful future we continue to build.
                        </p>

                    </div>


                    <!-- CARDS-->
                    <div class="rainbow-purpose__cards">


                        <!-- MISSION -->
                        <article class="rainbow-purpose-card purpose-mission">

                            <div class="rainbow-purpose-card__top-line"></div>

                            <div class="rainbow-purpose-card__header">

                                <span class="rainbow-purpose-card__number">
                                    01
                                </span>

                                <div class="rainbow-purpose-card__icon">
                                    <i class="fa-solid fa-bullseye"></i>
                                </div>

                            </div>


                            <div class="rainbow-purpose-card__content">

                                <span class="rainbow-purpose-card__label">
                                    WHAT DRIVES US
                                </span>

                                <h3>
                                    Our <strong>Mission</strong>
                                </h3>

                                <p>
                                    To create vibrant, consistent and premium
                                    colours that bring joy to celebrations while
                                    respecting the traditions and emotions behind
                                    every colourful moment.
                                </p>

                            </div>

                        </article>


                        <!-- VISION -->
                        <article class="rainbow-purpose-card purpose-vision">

                            <div class="rainbow-purpose-card__top-line"></div>

                            <div class="rainbow-purpose-card__header">

                                <span class="rainbow-purpose-card__number">
                                    02
                                </span>

                                <div class="rainbow-purpose-card__icon">
                                    <i class="fa-solid fa-eye"></i>
                                </div>

                            </div>


                            <div class="rainbow-purpose-card__content">

                                <span class="rainbow-purpose-card__label">
                                    WHERE WE ARE GOING
                                </span>

                                <h3>
                                    Our <strong>Vision</strong>
                                </h3>

                                <p>
                                    To grow Rainbow Colors into a trusted global
                                    name for colourful celebrations, carrying the
                                    spirit of Indian colour and tradition to more
                                    people around the world.
                                </p>

                            </div>

                        </article>


                        <!-- VALUES -->
                        <article class="rainbow-purpose-card purpose-values">

                            <div class="rainbow-purpose-card__top-line"></div>

                            <div class="rainbow-purpose-card__header">

                                <span class="rainbow-purpose-card__number">
                                    03
                                </span>

                                <div class="rainbow-purpose-card__icon">
                                    <i class="fa-solid fa-gem"></i>
                                </div>

                            </div>


                            <div class="rainbow-purpose-card__content">

                                <span class="rainbow-purpose-card__label">
                                    WHAT WE STAND FOR
                                </span>

                                <h3>
                                    Our <strong>Values</strong>
                                </h3>

                                <p>
                                    We believe in quality, consistency, integrity
                                    and respect for tradition — creating products
                                    and relationships that are built to last.
                                </p>

                            </div>

                        </article>

                    </div>

                </div>

            </section>

            <section class="rainbow-scale">

                <div class="container">

                    <!-- CONTENT -->
                    <div class="rainbow-scale__intro">

                        <div class="rainbow-scale__heading">

                            <span class="rainbow-scale__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                BY THE NUMBERS
                            </span>

                            <h2>
                                OUR NUMBERS
                                <span>MOVE COLOUR.</span>
                            </h2>

                        </div>

                        <div class="rainbow-scale__copy">

                            <p class="rainbow-scale__lead">
                                Every number represents people, partnerships,
                                possibilities and countless colourful moments
                                created along the way.
                            </p>

                            <p>
                                From our growing team and dealer network to the
                                countries we reach and the volume we deliver,
                                our scale reflects the trust built around
                                Rainbow Colors.
                            </p>

                            <div class="rainbow-scale__established">

                                <strong>2007</strong>

                                <div>
                                    <span>ESTABLISHED</span>
                                    <small>Growing with colour, year after year.</small>
                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- NUMBERS -->
                    <div class="rainbow-scale__numbers">

                        <div class="rainbow-scale__number-card">

                            <span class="rainbow-scale__index">01</span>

                            <div class="rainbow-scale__number">
                                <strong class="counter" data-target="200">0</strong>
                                <b>+</b>
                            </div>

                            <span class="rainbow-scale__label">
                                Employees
                            </span>

                            <i class="fa-solid fa-users"></i>

                        </div>


                        <div class="rainbow-scale__number-card">

                            <span class="rainbow-scale__index">02</span>

                            <div class="rainbow-scale__number">
                                <strong class="counter" data-target="15">0</strong>
                                <b>+</b>
                            </div>

                            <span class="rainbow-scale__label">
                                Countries
                            </span>

                            <i class="fa-solid fa-globe"></i>

                        </div>


                        <div class="rainbow-scale__number-card">

                            <span class="rainbow-scale__index">03</span>

                            <div class="rainbow-scale__number">
                                <strong class="counter" data-target="125">0</strong>
                                <b>+</b>
                            </div>

                            <span class="rainbow-scale__label">
                                Dealers
                            </span>

                            <i class="fa-solid fa-handshake"></i>

                        </div>


                        <div class="rainbow-scale__number-card">

                            <span class="rainbow-scale__index">04</span>

                            <div class="rainbow-scale__number">
                                <strong class="counter" data-target="7">0</strong>
                                <b>M+</b>
                            </div>

                            <span class="rainbow-scale__label">
                                Happy Faces
                            </span>

                            <i class="fa-solid fa-face-smile"></i>

                        </div>


                        <div class="rainbow-scale__number-card">

                            <span class="rainbow-scale__index">05</span>

                            <div class="rainbow-scale__number">
                                <strong class="counter" data-target="30">0</strong>
                                <b>+</b>
                            </div>

                            <span class="rainbow-scale__label">
                                Distributors
                            </span>

                            <i class="fa-solid fa-network-wired"></i>

                        </div>


                        <div class="rainbow-scale__number-card">

                            <span class="rainbow-scale__index">06</span>

                            <div class="rainbow-scale__number">
                                <strong class="counter" data-target="25000">0</strong>
                                <b>+</b>
                            </div>

                            <span class="rainbow-scale__label">
                                Annual Sale (Ton)
                            </span>

                            <i class="fa-solid fa-chart-line"></i>

                        </div>

                    </div>

                </div>

            </section>
            <!--  END MISSION / VISION / VALUES -->

            <!-- ==== founders start ==== -->
            <section class="rainbow-founders">

                <div class="container">

                    {{-- Header --}}
                    <div class="rainbow-founders__header">
                        <span class="rainbow-section-label">
                            <i class="fa-solid fa-sparkles"></i>
                            LEADERSHIP
                        </span>

                        <h2>
                            Built By People Who
                            <span>Believe In Colour</span>
                        </h2>

                        <p>
                            Vision, craftsmanship and ambition &mdash; brought
                            together to build something that lasts.
                        </p>
                    </div>


                    {{-- Founders grid --}}
                    <div class="founders-grid founders-grid--three">

                        {{-- Pareshbhai Patel --}}
                        <div class="founder-card">

                            <div class="founder-card__photo">
                                <img src="{{ asset('assets/front/images/rainbow/founder-paresh.jpg') }}"
                                    alt="Pareshbhai Patel - Director, Varun Minerals">
                            </div>

                            <div class="founder-card__body">

                                <span class="founder-card__quote-mark">&ldquo;</span>

                                <p class="founder-card__quote">
                                    Every business we&rsquo;ve built stands on one
                                    principle &mdash; quality and trust, earned batch
                                    after batch.
                                </p>

                                <div class="founder-card__meta">
                                    <div>
                                        <h3>Pareshbhai Patel</h3>
                                        <span>Director, COO &amp; CFO &mdash; Varun Minerals</span>
                                    </div>
                                    <span class="founder-card__badge">Since 2007</span>
                                </div>

                            </div>

                        </div>


                        {{-- Manav Patel (combined roles) --}}
                        <div class="founder-card founder-card--featured">

                            <div class="founder-card__photo">
                                <img src="{{ asset('assets/front/images/rainbow/founder-manav.jpg') }}"
                                    alt="Manav Patel - Director, Rainbow and Varun Minerals">
                            </div>

                            <div class="founder-card__body">

                                <span class="founder-card__quote-mark">&ldquo;</span>

                                <p class="founder-card__quote">
                                    We didn&rsquo;t just want to sell colour &mdash;
                                    we wanted to build a brand rooted in tradition
                                    and made for the future.
                                </p>

                                <div class="founder-card__meta">
                                    <div>
                                        <h3>Manav Patel</h3>
                                        <span>Director &amp; CMO &mdash; Rainbow &amp; Varun Minerals</span>
                                    </div>
                                    <span class="founder-card__badge">Since 2015</span>
                                </div>

                            </div>

                        </div>


                        {{-- Harshit Upadhyay --}}
                        <div class="founder-card founder-card--alt">

                            <div class="founder-card__photo">
                                <img src="{{ asset('assets/front/images/rainbow/founder-harshit.jpg') }}"
                                    alt="Harshit Upadhyay - Director, Rainbow">
                            </div>

                            <div class="founder-card__body">

                                <span class="founder-card__quote-mark">&ldquo;</span>

                                <p class="founder-card__quote">
                                    Unit&ndash;2 is about elevating every detail &mdash;
                                    to give customers an experience worth remembering.
                                </p>

                                <div class="founder-card__meta">
                                    <div>
                                        <h3>Harshit Upadhyay</h3>
                                        <span>Director &amp; COO &mdash; Rainbow</span>
                                    </div>
                                    <span class="founder-card__badge">Since 2026</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <!-- ==== / founders end ==== -->

            <!-- FULL JOURNEY -->
            <section class="rainbow-journey" id="journey">
                <div class="container">

                    <div class="rainbow-journey__heading">
                        <div>
                            <span class="rainbow-journey__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                OUR JOURNEY
                            </span>

                            <h2>
                                FROM ROOTS
                                <span>TO RAINBOW.</span>
                            </h2>
                        </div>

                        <p>
                            From a trusted mineral business to a growing colour brand,
                            every chapter has shaped the Rainbow Colors journey.
                        </p>
                    </div>

                    <div class="rainbow-journey__story">

                        <!-- 2007 -->
                        <article class="rainbow-journey-card journey-yellow">
                            <div class="rainbow-journey-card__year">
                                <span>CHAPTER 01</span>
                                <strong>2007</strong>
                                <small>THE BEGINNING</small>
                            </div>

                            <div class="rainbow-journey-card__line">
                                <span></span>
                            </div>

                            <div class="rainbow-journey-card__body">
                                <span class="rainbow-journey-card__tag">
                                    ROOTED IN TRUST
                                </span>

                                <h3>
                                    The Foundation of
                                    <span>Varun Minerals</span>
                                </h3>

                                <p>
                                    Founded in 2007 by Pareshbhai Patel in the small village
                                    of Chhota Udepur, Gujarat, Varun Minerals began its journey
                                    as a dedicated manufacturer of dolomite powder, supplying
                                    to major names in the paint and putty industry, including
                                    Asian Paints, Berger Paints, Valplast, and Birla Paints.
                                </p>

                                <p>
                                    With a deep commitment to quality and service, the company
                                    quickly earned the trust of industry leaders.
                                </p>

                                <div class="rainbow-journey-card__facts">
                                    <span>Chhota Udepur</span>
                                    <span>Dolomite Powder</span>
                                    <span>Paint &amp; Putty Industry</span>
                                </div>
                            </div>
                        </article>

                        <!-- 2015 -->
                        <article class="rainbow-journey-card journey-pink">
                            <div class="rainbow-journey-card__year">
                                <span>CHAPTER 02</span>
                                <strong>2015</strong>
                                <small>NEW DIRECTION</small>
                            </div>

                            <div class="rainbow-journey-card__line">
                                <span></span>
                            </div>

                            <div class="rainbow-journey-card__body">
                                <span class="rainbow-journey-card__tag">
                                    A NEW VISION
                                </span>

                                <h3>
                                    Manav Patel Brings
                                    <span>Innovation and Purpose</span>
                                </h3>

                                <p>
                                    In 2015, a new vision took shape when Manav Patel joined
                                    the business. Driven by innovation and a belief in thinking
                                    beyond boundaries, Manav saw potential beyond industrial minerals.
                                </p>

                                <div class="rainbow-journey-card__mission">
                                    <span>HIS MISSION WAS CLEAR</span>

                                    <p>
                                        To build a new path that celebrated tradition, colour,
                                        and culture while staying rooted in quality,
                                        sustainability, and community impact.
                                    </p>
                                </div>
                            </div>
                        </article>

                        <!-- 2018-19 -->
                        <article class="rainbow-journey-card journey-orange">
                            <div class="rainbow-journey-card__year">
                                <span>CHAPTER 03</span>
                                <strong>2018<small>–19</small></strong>
                                <small>BIRTH OF RAINBOW</small>
                            </div>

                            <div class="rainbow-journey-card__line">
                                <span></span>
                            </div>

                            <div class="rainbow-journey-card__body">
                                <span class="rainbow-journey-card__tag">
                                    BIRTH OF RAINBOW
                                </span>

                                <h3>
                                    A Journey from
                                    <span>Tradition to Colour</span>
                                </h3>

                                <p>
                                    In 2018, the company began experimenting with Colour Rangoli
                                    and Holi Gulal, launching the vibrant Rainbow brand in 2019.
                                </p>

                                <p>
                                    What started in a small 300 sq. ft. rented space grew rapidly
                                    — thanks to a relentless focus on premium quality, skin-safe
                                    ingredients, and eco-friendly production.
                                </p>

                                <div class="rainbow-journey-card__launch">
                                    <strong>300</strong>
                                    <div>
                                        <span>SQ. FT.</span>
                                        <small>Starting space</small>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- 2020 -->
                        <article class="rainbow-journey-card journey-blue">
                            <div class="rainbow-journey-card__year">
                                <span>CHAPTER 04</span>
                                <strong>2020<small>–21</small></strong>
                                <small>SCALING UP</small>
                            </div>

                            <div class="rainbow-journey-card__line">
                                <span></span>
                            </div>

                            <div class="rainbow-journey-card__body">
                                <span class="rainbow-journey-card__tag">
                                    SCALING NEW HEIGHTS
                                </span>

                                <h3>
                                    Rainbow's Growth
                                    <span>Across India and Beyond</span>
                                </h3>

                                <p>
                                    By 2020, Rainbow had crossed 3,000 tons in annual colour
                                    sales. In 2021, this grew to 5,000 tons.
                                </p>

                                <p>
                                    Today, operating from a fully owned, automated production
                                    facility with in-house quality control labs, Rainbow delivers
                                    over 10,000 tons of Rangoli colors and 5,000 tons of Holi
                                    Gulal each year — across every Indian state and to
                                    international markets.
                                </p>

                                <div class="rainbow-journey-card__numbers">
                                    <div>
                                        <strong>10,000+</strong>
                                        <span>Rangoli Colors / Year</span>
                                    </div>

                                    <div>
                                        <strong>5,000+</strong>
                                        <span>Holi Gulal / Year</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- 2026 -->
                        <article class="rainbow-journey-card journey-green journey-current">
                            <div class="rainbow-journey-card__year">
                                <span>CHAPTER 05</span>
                                <strong>2026</strong>
                                <small>NEXT CHAPTER</small>
                            </div>

                            <div class="rainbow-journey-card__line">
                                <span></span>
                            </div>

                            <div class="rainbow-journey-card__body">
                                <div class="rainbow-journey-card__current">
                                    <i class="fa-solid fa-location-dot"></i>
                                    VADODARA · UNIT – 2
                                </div>

                                {{-- <span class="rainbow-journey-card__tag">
                                    INTRODUCING UNIT – 2
                                </span> --}}

                                <h3>
                                    A Dedicated
                                    <span>Premium Packaging Unit</span>
                                </h3>

                                <p>
                                    In 2026, Unit – 2 is being launched in Vadodara as a dedicated
                                    Premium Packaging Unit, created to deliver superior quality,
                                    premium presentation, and an enhanced customer experience.
                                </p>

                                <p>
                                    Founded by Manav Patel in collaboration with his friend
                                    Harshit Upadhyay, the new unit is specially focused on retail
                                    packaging and smaller-size packaging requirements.
                                </p>

                                <p>
                                    With modern packaging solutions and a strong commitment to
                                    quality, Unit – 2 aims to bring a more premium and professional
                                    packaging experience to retailers and customers.
                                </p>
                            </div>
                        </article>

                    </div>
                </div>

            </section>

            <!-- ==== units start ==== -->
            <section class="rainbow-units">

                <div class="container">

                    {{-- Header --}}
                    {{-- <div class="rainbow-units__header">
                        <span class="rainbow-section-label">
                            <i class="fa-solid fa-sparkles"></i>
                            OUR FACILITIES
                        </span>

                        <h2>
                            Two Units,
                            <span>One Vision</span>
                        </h2>
                        <p>
                            From raw material craftsmanship to premium packaging
                            &mdash; our two facilities work together to deliver
                            colour, done right.
                        </p>
                    </div> --}}
                    <div class="rainbow-products__heading">

                        <div>
                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                OUR FACILITIES
                            </span>

                            <h2>
                                Two Units,
                                <span>One Vision</span>
                            </h2>
                        </div>

                        <p>
                            From raw material craftsmanship to premium packaging
                            &mdash; our two facilities work together to deliver
                            colour, done right.
                        </p>

                    </div>


                    {{-- Units grid --}}
                    <div class="units-grid">

                        {{-- Unit 1 --}}
                        <div class="unit-card">

                            <div class="unit-card__media">
                                <img src="{{ asset('assets/front/images/rainbow/unit-1.jpg') }}"
                                    alt="Varun Minerals - Chhota Udepur Facility">
                                <span class="unit-card__tag">Unit 01</span>
                            </div>

                            <div class="unit-card__body">

                                <h3>Varun Minerals</h3>
                                <span class="unit-card__since">Established 2007</span>

                                <ul class="unit-card__details">
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>201/p, Vanar Jamla Road, Vasedi, Chhota Udepur &ndash; 391165</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <a href="mailto:info.rainbowcolorss@gmail.com">info.rainbowcolorss@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="tel:+917778884447">+91&ndash;777&ndash;888&ndash;4447</a>
                                    </li>
                                </ul>

                                <p>
                                    Where it all began &mdash; our founding facility,
                                    rooted in Gujarat, dedicated to raw material
                                    craftsmanship and quality manufacturing.
                                </p>

                            </div>

                        </div>


                        {{-- Unit 2 --}}
                        <div class="unit-card unit-card--accent">

                            <div class="unit-card__media">
                                <img src="{{ asset('assets/front/images/rainbow/unit-2.jpg') }}"
                                    alt="Varun Colours Pvt Ltd - Vadodara Facility">
                                <span class="unit-card__tag">Unit 02</span>
                            </div>

                            <div class="unit-card__body">

                                <h3>Varun Colours Pvt Ltd</h3>
                                <span class="unit-card__since">Launching 2026</span>

                                <ul class="unit-card__details">
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>Savita Hari Estate, Palaswada, Dabhoi Road, Vadodara &ndash; 391107</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <a href="mailto:varuncolourspvtltd@gmail.com">varuncolourspvtltd@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="tel:+917778884447">+91&ndash;777&ndash;888&ndash;4447</a>
                                    </li>
                                </ul>

                                <p>
                                    Our dedicated premium packaging unit &mdash;
                                    built for retail-ready presentation and an
                                    elevated customer experience.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <!-- ==== / units end ==== -->

            <!--  FOOTER START -->
            @include('front.layouts.footer')
            <!--FOOTER END -->

        </div>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const counters = document.querySelectorAll(".counter");

            const observer = new IntersectionObserver((entries, observer) => {

                entries.forEach(entry => {

                    if (!entry.isIntersecting) return;

                    const counter = entry.target;
                    const target = parseInt(counter.dataset.target);

                    let start = 0;
                    const duration = 1800;
                    const startTime = performance.now();

                    function updateCounter(currentTime) {

                        const progress = Math.min(
                            (currentTime - startTime) / duration,
                            1
                        );

                        const eased = 1 - Math.pow(1 - progress, 3);

                        const value = Math.floor(eased * target);

                        counter.textContent =
                            value.toLocaleString("en-IN");

                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent =
                                target.toLocaleString("en-IN");
                        }
                    }

                    requestAnimationFrame(updateCounter);

                    observer.unobserve(counter);
                });

            }, {
                threshold: 0.35
            });


            counters.forEach(counter => {
                observer.observe(counter);
            });

        });

        document.addEventListener("DOMContentLoaded", function() {

            const journeyCards = document.querySelectorAll(".rainbow-journey-card");

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;

                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                });
            }, {
                threshold: 0.12
            });

            journeyCards.forEach(card => {
                observer.observe(card);
            });

        });
    </script>
@endsection
