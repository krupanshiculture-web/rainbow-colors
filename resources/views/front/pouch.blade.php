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
                            <span>Product</span>
                            <i class="fa-solid fa-chevron-right"></i>
                            <span>Pouch</span>
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

            <section class="rainbow-pouch-page">

                <div class="pouch-hero-glow pouch-hero-glow--yellow"></div>
                <div class="pouch-hero-glow pouch-hero-glow--pink"></div>

                <div class="container">

                    <div class="pouch-page-heading">

                        <div class="pouch-page-heading__left">

                            <span class="rainbow-section-label">
                                <i class="fa-solid fa-sparkles"></i>
                                RAINBOW POUCH RANGE
                            </span>

                            <h1>
                                COLOUR FOR
                                <span>EVERY CELEBRATION.</span>
                            </h1>

                        </div>

                        <p>
                            Explore our vibrant pouch collection by size and colour.
                            Choose a pack, discover your shade and experience the
                            Rainbow difference.
                        </p>

                    </div>


                    <!-- Size Switcher -->

                    <div class="pouch-size-tabs" id="pouchSizeTabs">

                        <button class="pouch-size-tab active" data-size="100gm">
                            100 GM
                        </button>

                        <button class="pouch-size-tab" data-size="250gm">
                            250 GM
                        </button>

                        <button class="pouch-size-tab" data-size="500gm">
                            500 GM
                        </button>

                    </div>


                    <!-- Main Product Showcase -->

                    <div class="pouch-showcase">

                        <div class="pouch-showcase__visual">

                            <div class="pouch-showcase__circle pouch-showcase__circle--one"></div>
                            <div class="pouch-showcase__circle pouch-showcase__circle--two"></div>

                            <span class="pouch-floating-dot pouch-floating-dot--one"></span>
                            <span class="pouch-floating-dot pouch-floating-dot--two"></span>
                            <span class="pouch-floating-dot pouch-floating-dot--three"></span>

                            <div class="pouch-product-stage">
                                <img id="mainPouchImage"
                                    src="{{ asset('assets/front/images/rainbow/pouch/100gm/red.png') }}"
                                    alt="Rainbow Red Pouch">
                            </div>

                            <div class="pouch-product-size-badge">
                                <small>PACK SIZE</small>
                                <strong id="mainSizeLabel">100 GM</strong>
                            </div>

                        </div>


                        <div class="pouch-showcase__content">

                            <span class="pouch-selected-label">
                                SELECTED COLOUR
                            </span>

                            <h2 id="mainColourName">
                                Red
                            </h2>

                            <div class="pouch-colour-line">

                                <span id="mainColourDot"></span>

                                <strong id="mainColourTitle">
                                    VIBRANT RED
                                </strong>

                            </div>

                            <p id="mainColourDescription">
                                A vibrant red shade designed to bring energy and
                                excitement to every colourful celebration.
                            </p>


                            <!-- Product Information -->

                            <div class="pouch-product-meta">

                                <div>
                                    <span>PRODUCT</span>
                                    <strong>Rainbow Pouch</strong>
                                </div>

                                <div>
                                    <span>AVAILABLE</span>
                                    <strong>11 Shades</strong>
                                </div>

                                <div>
                                    <span>PACK SIZE</span>
                                    <strong id="metaSize">100 GM</strong>
                                </div>

                            </div>


                            <!-- Colour Selector -->

                            <div class="pouch-colour-selector">

                                <div class="pouch-colour-selector__heading">
                                    <span>AVAILABLE SHADES</span>
                                    <small id="shadeCount">12 COLOURS</small>
                                </div>

                                <div class="pouch-colour-grid" id="pouchColourGrid"></div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Moving Product Collection -->

                <div class="pouch-marquee-section">

                    <div class="pouch-marquee-title">

                        <span>
                            EXPLORE OUR RANGE
                        </span>

                        <strong>
                            RAINBOW POUCH
                            <span>COLLECTION.</span>
                        </strong>

                    </div>

                    <div class="pouch-marquee">

                        <div class="pouch-marquee-track" id="pouchMarqueeTrack"></div>

                    </div>

                </div>




                <!-- Pouch Details -->

                <section class="rainbow-pouch-details">

                    <div class="container">

                        <div class="pouch-details-glow pouch-details-glow--yellow"></div>
                        <div class="pouch-details-glow pouch-details-glow--pink"></div>

                        <div class="container">

                            <!-- Section Heading -->

                            <div class="pouch-details-heading">

                                <div class="pouch-details-heading__left">

                                    <span class="rainbow-section-label">
                                        <i class="fa-solid fa-sparkles"></i>
                                        POUCH PACKAGING
                                    </span>

                                    <h2>
                                        PACKED FOR
                                        <span>EVERY COLOUR.</span>
                                    </h2>

                                </div>

                                <p>
                                    Available in multiple pouch sizes with practical bunch
                                    and carton configurations, designed for easy handling,
                                    distribution and colourful celebrations.
                                </p>

                            </div>


                            <!-- Packaging Cards -->

                            <div class="pouch-packaging-showcase">

                                <!-- 100 GM -->

                                <div class="pouch-detail-card">

                                    <div class="pouch-detail-card__top">

                                        <span class="pouch-detail-card__number">
                                            01
                                        </span>

                                        <span class="pouch-detail-card__size">
                                            100 GM
                                        </span>

                                    </div>

                                    <div class="pouch-detail-card__image">

                                        <div class="pouch-detail-card__image-glow"></div>

                                        <img src="{{ asset('assets/front/images/rainbow/pouch/100gm/parrot.png') }}"
                                            alt="Rainbow 100 GM Pouch">

                                    </div>

                                    <div class="pouch-detail-card__info">

                                        <div class="pouch-detail-info-row">

                                            <div>
                                                <small>BUNCH</small>
                                                <strong>1 KG</strong>
                                            </div>

                                            <div>
                                                <small>POUCHES</small>
                                                <strong>10</strong>
                                            </div>

                                        </div>

                                        <div class="pouch-detail-info-row">

                                            <div>
                                                <small>CARTON</small>
                                                <strong>25 KG</strong>
                                            </div>

                                            <div>
                                                <small>BUNCHES</small>
                                                <strong>25</strong>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="pouch-detail-card__badge">
                                        AVAILABLE IN 10 SHADES
                                    </div>

                                </div>


                                <!-- 250 GM -->

                                <div class="pouch-detail-card pouch-detail-card--pink">

                                    <div class="pouch-detail-card__top">

                                        <span class="pouch-detail-card__number">
                                            02
                                        </span>

                                        <span class="pouch-detail-card__size">
                                            250 GM
                                        </span>

                                    </div>

                                    <div class="pouch-detail-card__image">

                                        <div class="pouch-detail-card__image-glow"></div>

                                        <img src="{{ asset('assets/front/images/rainbow/pouch/250gm/pink.png') }}"
                                            alt="Rainbow 250 GM Pouch">

                                    </div>

                                    <div class="pouch-detail-card__info">

                                        <div class="pouch-detail-info-row">

                                            <div>
                                                <small>BUNCH</small>
                                                <strong>2.5 KG</strong>
                                            </div>

                                            <div>
                                                <small>POUCHES</small>
                                                <strong>10</strong>
                                            </div>

                                        </div>

                                        <div class="pouch-detail-info-row">

                                            <div>
                                                <small>CARTON</small>
                                                <strong>25 KG</strong>
                                            </div>

                                            <div>
                                                <small>BUNCHES</small>
                                                <strong>10</strong>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="pouch-detail-card__badge">
                                        AVAILABLE IN 10 SHADES
                                    </div>

                                </div>


                                <!-- 500 GM -->

                                <div class="pouch-detail-card pouch-detail-card--blue">

                                    <div class="pouch-detail-card__top">

                                        <span class="pouch-detail-card__number">
                                            03
                                        </span>

                                        <span class="pouch-detail-card__size">
                                            500 GM
                                        </span>

                                    </div>

                                    <div class="pouch-detail-card__image">

                                        <div class="pouch-detail-card__image-glow"></div>

                                        <img src="{{ asset('assets/front/images/rainbow/pouch/500gm/purple.png') }}"
                                            alt="Rainbow 500 GM Pouch">

                                    </div>

                                    <div class="pouch-detail-card__info">

                                        <div class="pouch-detail-info-row">

                                            <div>
                                                <small>BUNCH</small>
                                                <strong>2.5 KG</strong>
                                            </div>

                                            <div>
                                                <small>POUCHES</small>
                                                <strong>5</strong>
                                            </div>

                                        </div>

                                        <div class="pouch-detail-info-row">

                                            <div>
                                                <small>CARTON</small>
                                                <strong>25 KG</strong>
                                            </div>

                                            <div>
                                                <small>BUNCHES</small>
                                                <strong>10</strong>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="pouch-detail-card__badge">
                                        AVAILABLE IN 10 SHADES
                                    </div>

                                </div>

                            </div>


                            <!-- Shade Strip -->

                            <div class="pouch-shade-strip">

                                <div class="pouch-shade-strip__heading">

                                    <span>
                                        AVAILABLE IN 10 SHADES
                                    </span>

                                    <small>
                                        EVERY SHADE. EVERY CELEBRATION.
                                    </small>

                                </div>

                                <div class="pouch-shades">

                                    <div class="pouch-shade">
                                        <span style="--shade:#c92525;"></span>
                                        <strong>Red</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#ffd20a;"></span>
                                        <strong>Yellow</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#303c91;"></span>
                                        <strong>Royal Blue</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#f04d1c;"></span>
                                        <strong>Orange</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#c31968;"></span>
                                        <strong>Pink</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#076633;"></span>
                                        <strong>Green</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#345ca7;"></span>
                                        <strong>Sky Blue</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#71bd35;"></span>
                                        <strong>Parrot</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#bc2854;"></span>
                                        <strong>Rani Pink</strong>
                                    </div>

                                    <div class="pouch-shade">
                                        <span style="--shade:#64306f;"></span>
                                        <strong>Purple</strong>
                                    </div>

                                </div>

                            </div>


                            <!-- Product Character -->

                            <div class="pouch-character">

                                <div class="pouch-character__line"></div>

                                <div class="pouch-character__title">
                                    DARK <span>|</span> SCENTED <span>|</span> SMOOTH
                                </div>

                                <div class="pouch-character__line"></div>

                            </div>


                            <!-- Features -->

                            <div class="pouch-features">

                                <div class="pouch-feature">

                                    <div class="pouch-feature__icon">
                                        <i class="fa-solid fa-leaf"></i>
                                    </div>

                                    <strong>
                                        NON TOXIC
                                    </strong>

                                    <span>
                                        Carefully crafted for a better colour experience.
                                    </span>

                                </div>


                                <div class="pouch-feature">

                                    <div class="pouch-feature__icon">
                                        <i class="fa-solid fa-hand"></i>
                                    </div>

                                    <strong>
                                        NON IRRITANT
                                    </strong>

                                    <span>
                                        Designed with a smooth and comfortable feel.
                                    </span>

                                </div>


                                <div class="pouch-feature">

                                    <div class="pouch-feature__icon">
                                        <i class="fa-solid fa-hand-sparkles"></i>
                                    </div>

                                    <strong>
                                        NON STICKY
                                    </strong>

                                    <span>
                                        Smooth colour experience with a clean feel.
                                    </span>

                                </div>


                                <div class="pouch-feature">

                                    <div class="pouch-feature__icon">
                                        <i class="fa-solid fa-droplet-slash"></i>
                                    </div>

                                    <strong>
                                        STAIN PROOF
                                    </strong>

                                    <span>
                                        Designed for a cleaner colourful experience.
                                    </span>

                                </div>


                                <div class="pouch-feature">

                                    <div class="pouch-feature__icon">
                                        <i class="fa-solid fa-circle"></i>
                                    </div>

                                    <strong>
                                        UNIFORM SIZE
                                    </strong>

                                    <span>
                                        Consistent pouch format across the collection.
                                    </span>

                                </div>

                            </div>


                            <!-- White Rangoli -->

                            <div class="pouch-variant-block pouch-variant-block--white">

                                <div class="pouch-variant-heading">

                                    <div>

                                        <span class="rainbow-section-label">
                                            <i class="fa-solid fa-sparkles"></i>
                                            SPECIAL COLLECTION
                                        </span>

                                        <h2>
                                            WHITE
                                            <span>RANGOLI.</span>
                                        </h2>

                                    </div>

                                    <p>
                                        A clean white rangoli collection available in
                                        multiple pouch formats for distinctive colourful
                                        designs and celebrations.
                                    </p>

                                </div>


                                <div class="pouch-variant-grid">

                                    <!-- 100 GM -->

                                    <div class="pouch-variant-card">

                                        <div class="pouch-variant-card__heading">

                                            <span>25 KG BAG</span>

                                            <small>
                                                250 POUCHES / 100GM
                                            </small>

                                        </div>

                                        <div class="pouch-variant-card__image pouch-variant-card__image--white">

                                            <img src="{{ asset('assets/front/images/rainbow/pouch/100gm/white.png') }}"
                                                alt="White Rangoli 100 GM">

                                        </div>

                                    </div>


                                    <!-- 250 GM -->

                                    <div class="pouch-variant-card">

                                        <div class="pouch-variant-card__heading">

                                            <span>25 KG BAG</span>

                                            <small>
                                                100 POUCHES / 250GM
                                            </small>

                                        </div>

                                        <div class="pouch-variant-card__image pouch-variant-card__image--white">

                                            <img src="{{ asset('assets/front/images/rainbow/pouch/250gm/white.png') }}"
                                                alt="White Rangoli 250 GM">

                                        </div>

                                    </div>


                                    <!-- Source says 500 GM -->

                                    <div class="pouch-variant-card">

                                        <div class="pouch-variant-card__heading">

                                            <span>25 KG BAG</span>

                                            <small>
                                                50 POUCHES / 500GM
                                            </small>

                                        </div>

                                        <div class="pouch-variant-card__image pouch-variant-card__image--white">

                                            <img src="{{ asset('assets/front/images/rainbow/pouch/500gm/white.png') }}"
                                                alt="White Rangoli">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </section>

            </section>


            @include('front.layouts.footer')

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const pouchData = {

                "100gm": {

                    label: "100 GM",

                    packaging: {
                        pouch: "10 Pouch",
                        bunch: "1 KG Bunch",
                        carton: "25 Bunch",
                        cartonWeight: "25 KG Carton"
                    },

                    colours: {

                        red: {
                            name: "Red",
                            title: "VIBRANT RED",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/red.png') }}",
                            dot: "#E53935",
                            description: "A vibrant red shade designed to bring energy and excitement to every colourful celebration."
                        },

                        "sky-blue": {
                            name: "Sky Blue",
                            title: "SKY BLUE",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/sky-blue.png') }}",
                            dot: "#56CCF2",
                            description: "A fresh and uplifting blue shade that brings a cool and refreshing character to every celebration."
                        },

                        blue: {
                            name: "Blue",
                            title: "VIBRANT BLUE",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/blue.png') }}",
                            dot: "#287BEA",
                            description: "A bold blue shade created for vibrant celebrations and colourful expressions."
                        },

                        purple: {
                            name: "Purple",
                            title: "ROYAL PURPLE",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/purple.png') }}",
                            dot: "#7047B8",
                            description: "A rich purple shade that adds depth, character and a premium touch to every colour collection."
                        },

                        pink: {
                            name: "Pink",
                            title: "PLAYFUL PINK",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/pink.png') }}",
                            dot: "#F783B6",
                            description: "A bright and playful pink shade made for joyful and colourful celebrations."
                        },

                        "rani-pink": {
                            name: "Rani Pink",
                            title: "RANI PINK",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/rani-pink.png') }}",
                            dot: "#E83E8C",
                            description: "A rich and expressive pink shade that adds a beautiful festive character to every celebration."
                        },

                        green: {
                            name: "Green",
                            title: "FRESH GREEN",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/green.png') }}",
                            dot: "#36C96F",
                            description: "A lively green shade inspired by freshness, energy and colourful celebration."
                        },

                        orange: {
                            name: "Orange",
                            title: "BRIGHT ORANGE",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/orange.png') }}",
                            dot: "#FF7A00",
                            description: "A bright orange shade full of warmth, energy and festive spirit."
                        },

                        yellow: {
                            name: "Yellow",
                            title: "SUNNY YELLOW",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/yellow.png') }}",
                            dot: "#FDD200",
                            description: "A bright yellow shade that brings warmth, happiness and instant festive energy."
                        },

                        parrot: {
                            name: "Parrot",
                            title: "PARROT GREEN",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/parrot.png') }}",
                            dot: "#8BCF45",
                            description: "A lively parrot green shade that adds freshness and playful energy to every colour palette."
                        },

                        white: {
                            name: "White",
                            title: "PURE WHITE",
                            image: "{{ asset('assets/front/images/rainbow/pouch/100gm/white.png') }}",
                            dot: "#F4F4F4",
                            description: "A clean and pure white shade that completes the Rainbow colour collection."
                        }

                    }

                },


                "250gm": {

                    label: "250 GM",

                    packaging: {
                        pouch: "10 Pouch",
                        bunch: "2.5 KG Bunch",
                        carton: "10 Bunch",
                        cartonWeight: "25 KG Carton"
                    },

                    colours: {}

                },


                "500gm": {

                    label: "500 GM",

                    packaging: {
                        pouch: "5 Pouch",
                        bunch: "2.5 KG Bunch",
                        carton: "10 Bunch",
                        cartonWeight: "25 KG Carton"
                    },

                    colours: {}

                }

            };


            /*
             * Build 250 GM and 500 GM colours
             */

            Object.keys(pouchData["100gm"].colours).forEach(function(key) {

                const baseColour = pouchData["100gm"].colours[key];

                pouchData["250gm"].colours[key] = {
                    ...baseColour,
                    image: "{{ asset('assets/front/images/rainbow/pouch/250gm') }}/" +
                        key +
                        ".png"
                };

                pouchData["500gm"].colours[key] = {
                    ...baseColour,
                    image: "{{ asset('assets/front/images/rainbow/pouch/500gm') }}/" +
                        key +
                        ".png"
                };

            });


            /*
             * Elements
             */

            const sizeTabs =
                document.querySelectorAll('.pouch-size-tab');

            const colourGrid =
                document.getElementById('pouchColourGrid');

            const marqueeTrack =
                document.getElementById('pouchMarqueeTrack');

            const mainImage =
                document.getElementById('mainPouchImage');

            const mainColourName =
                document.getElementById('mainColourName');

            const mainColourDot =
                document.getElementById('mainColourDot');

            const mainColourTitle =
                document.getElementById('mainColourTitle');

            const mainColourDescription =
                document.getElementById('mainColourDescription');

            const mainSizeLabel =
                document.getElementById('mainSizeLabel');

            const metaSize =
                document.getElementById('metaSize');

            const shadeCount =
                document.getElementById('shadeCount');


            /*
             * Current state
             */

            let currentSize = '100gm';
            let currentColour = 'red';


            /*
             * Render colour buttons
             */

            function renderColours() {

                if (!colourGrid) {
                    return;
                }

                colourGrid.innerHTML = '';

                const colours =
                    pouchData[currentSize].colours;


                Object.keys(colours).forEach(function(key) {

                    const colour =
                        colours[key];


                    const button =
                        document.createElement('button');

                    button.type = 'button';

                    button.className =
                        'pouch-colour-option' +
                        (key === currentColour ? ' active' : '');

                    button.dataset.colour = key;


                    button.innerHTML = `
                <span
                    class="pouch-colour-option__dot"
                    style="--colour:${colour.dot}"
                ></span>

                <span class="pouch-colour-option__name">
                    ${colour.name}
                </span>
            `;


                    button.addEventListener('click', function() {

                        selectColour(key);

                    });


                    colourGrid.appendChild(button);

                });


                if (shadeCount) {

                    shadeCount.textContent =
                        Object.keys(colours).length + ' COLOURS';

                }

            }


            /*
             * Render all sizes in marquee
             */

            function renderMarquee() {

                if (!marqueeTrack) {
                    return;
                }

                marqueeTrack.innerHTML = '';


                const sizes = [

                    {
                        key: '100gm',
                        label: '100 GM'
                    },

                    {
                        key: '250gm',
                        label: '250 GM'
                    },

                    {
                        key: '500gm',
                        label: '500 GM'
                    }

                ];


                let items = [];


                sizes.forEach(function(size) {

                    const colours =
                        pouchData[size.key].colours;


                    Object.keys(colours).forEach(function(key) {

                        items.push({

                            sizeKey: size.key,

                            sizeLabel: size.label,

                            colourKey: key,

                            colour: colours[key]

                        });

                    });

                });


                /*
                 * Repeat collection for continuous marquee
                 */

                const repeatedItems = [
                    ...items,
                    ...items,
                    ...items
                ];


                repeatedItems.forEach(function(item) {

                    const colour =
                        item.colour;


                    const product =
                        document.createElement('button');


                    product.type = 'button';

                    product.className =
                        'pouch-marquee-item';


                    product.innerHTML = `

                <span
                    class="pouch-marquee-item__size"
                >
                    ${item.sizeLabel}
                </span>

                <span
                    class="pouch-marquee-item__dot"
                    style="--colour:${colour.dot}"
                ></span>

                <img
                    src="${colour.image}"
                    alt="${colour.name} ${item.sizeLabel} Rainbow Pouch"
                >

                <strong>
                    ${colour.name}
                </strong>

            `;


                    product.addEventListener('click', function() {

                        selectSize(
                            item.sizeKey,
                            item.colourKey,
                            true
                        );

                    });


                    marqueeTrack.appendChild(product);

                });

            }


            /*
             * Select colour
             */

            function selectColour(key) {

                const colours =
                    pouchData[currentSize].colours;


                const colour =
                    colours[key];


                if (!colour) {
                    return;
                }


                currentColour = key;


                if (mainImage) {

                    mainImage.classList.add('changing');

                }


                setTimeout(function() {

                    if (mainImage) {

                        mainImage.src =
                            colour.image;

                        mainImage.alt =
                            `Rainbow ${colour.name} ${pouchData[currentSize].label} Pouch`;

                    }


                    if (mainColourName) {

                        mainColourName.textContent =
                            colour.name;

                    }


                    if (mainColourTitle) {

                        mainColourTitle.textContent =
                            colour.title;

                    }


                    if (mainColourDescription) {

                        mainColourDescription.textContent =
                            colour.description;

                    }


                    if (mainColourDot) {

                        mainColourDot.style.background =
                            colour.dot;

                    }


                    if (mainImage) {

                        mainImage.classList.remove('changing');

                    }

                }, 120);


                /*
                 * Active colour button
                 */

                document
                    .querySelectorAll('.pouch-colour-option')
                    .forEach(function(button) {

                        button.classList.toggle(
                            'active',
                            button.dataset.colour === key
                        );

                    });

            }


            /*
             * Select size
             */

            function selectSize(
                size,
                requestedColour = null,
                scrollToShowcase = false
            ) {

                if (!pouchData[size]) {
                    return;
                }


                const colours =
                    pouchData[size].colours;


                const colourKeys =
                    Object.keys(colours);


                if (!colourKeys.length) {
                    return;
                }


                /*
                 * Change current size
                 */

                currentSize = size;


                /*
                 * Update active size tab
                 */

                sizeTabs.forEach(function(tab) {

                    tab.classList.toggle(
                        'active',
                        tab.dataset.size === size
                    );

                });


                /*
                 * Keep requested colour if available.
                 * Otherwise keep current colour.
                 * Otherwise use first colour.
                 */

                let nextColour =
                    requestedColour;


                if (
                    !nextColour ||
                    !colours[nextColour]
                ) {

                    if (colours[currentColour]) {

                        nextColour =
                            currentColour;

                    } else {

                        nextColour =
                            colourKeys[0];

                    }

                }


                currentColour =
                    nextColour;


                /*
                 * Update size labels
                 */

                if (mainSizeLabel) {

                    mainSizeLabel.textContent =
                        pouchData[size].label;

                }


                if (metaSize) {

                    metaSize.textContent =
                        pouchData[size].label;

                }


                /*
                 * Rebuild colour buttons
                 */

                renderColours();


                /*
                 * Update main product
                 */

                selectColour(nextColour);


                /*
                 * Optional scroll when marquee item clicked
                 */

                if (
                    scrollToShowcase &&
                    document.querySelector('.pouch-showcase')
                ) {

                    document
                        .querySelector('.pouch-showcase')
                        .scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });

                }

            }


            /*
             * Size tab clicks
             */

            sizeTabs.forEach(function(tab) {

                tab.addEventListener('click', function() {

                    const size =
                        tab.dataset.size;


                    if (!size) {
                        return;
                    }


                    selectSize(size);

                });

            });


            /*
             * Initial state
             */

            renderColours();

            renderMarquee();

            selectSize(
                '100gm',
                'red'
            );

        });
    </script>
@endsection
