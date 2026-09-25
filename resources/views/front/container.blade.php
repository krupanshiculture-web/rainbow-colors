@extends('front.layouts.head')

@section('content')
    <div id="smooth-wrapper">

        <div id="smooth-content">

            <!-- PAGE HERO START -->

            <section class="rainbow-page-hero">

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

                            <a href="{{ url('/') }}">
                                Home
                            </a>

                            <i class="fa-solid fa-chevron-right"></i>

                            <span>
                                Product
                            </span>

                            <i class="fa-solid fa-chevron-right"></i>

                            <span>
                                Container
                            </span>

                        </div>

                        <div class="rainbow-page-hero__heading-wrap">

                            <h1>
                                COLOUR FOR
                                <span>EVERY COLLECTION.</span>
                            </h1>

                        </div>

                    </div>

                </div>

            </section>

            <!-- PAGE HERO END -->


            <!-- CONTAINER CLASSIC RANGE START -->

            <section class="rainbow-container-page">

                <div class="container-hero-glow container-hero-glow--yellow"></div>
                <div class="container-hero-glow container-hero-glow--pink"></div>

                <div class="container">

                    <!-- Heading -->

                    <div class="container-page-heading">

                        <div class="container-page-heading__left">

                            <span class="rainbow-section-label">

                                <i class="fa-solid fa-sparkles"></i>

                                RAINBOW CONTAINER RANGE

                            </span>

                            <h1>

                                COLOUR WITH

                                <span>EVERY CHARACTER.</span>

                            </h1>

                        </div>

                        <p>
                            Explore our premium container collections by size,
                            character and colour. Choose your collection,
                            discover your shade and experience the Rainbow difference.
                        </p>

                    </div>


                    <!-- Collection Tabs -->

                    <div class="container-collection-tabs" id="containerCollectionTabs">

                        <button type="button" class="container-collection-tab active" data-collection="sparsh">

                            <span>
                                250 GM
                            </span>

                            <strong>
                                SPARSH
                            </strong>

                        </button>


                        <button type="button" class="container-collection-tab" data-collection="signature">

                            <span>
                                500 GM
                            </span>

                            <strong>
                                SIGNATURE
                            </strong>

                        </button>


                        <button type="button" class="container-collection-tab" data-collection="harmony">

                            <span>
                                1 KG
                            </span>

                            <strong>
                                HARMONY
                            </strong>

                        </button>


                        <button type="button" class="container-collection-tab" data-collection="heritage">

                            <span>
                                2 KG
                            </span>

                            <strong>
                                HERITAGE
                            </strong>

                        </button>

                    </div>


                    <!-- Main Showcase -->

                    <div class="container-showcase">


                        <!-- LEFT VISUAL -->

                        <div class="container-showcase__visual">

                            <div class="container-showcase__circle container-showcase__circle--one"></div>

                            <div class="container-showcase__circle container-showcase__circle--two"></div>


                            <span class="container-floating-dot container-floating-dot--one"></span>
                            <span class="container-floating-dot container-floating-dot--two"></span>
                            <span class="container-floating-dot container-floating-dot--three"></span>


                            <!-- Collection Logo -->

                            <div class="container-collection-logo" id="containerCollectionLogo">
                                SPARSH
                            </div>


                            <!-- Product -->

                            <div class="container-product-stage">

                                <img id="mainContainerImage" src="{{ asset('assets/front/images/rainbow/container.png') }}"
                                    alt="Rainbow Sparsh Container">

                            </div>


                            <!-- Pack Size -->

                            <div class="container-product-size-badge">

                                <small>
                                    PACK SIZE
                                </small>

                                <strong id="containerSizeLabel">
                                    250 GM
                                </strong>

                            </div>

                        </div>


                        <!-- RIGHT CONTENT -->

                        <div class="container-showcase__content">

                            <span class="container-selected-label">
                                SELECTED COLLECTION
                            </span>


                            <h2 id="containerCollectionName">
                                Sparsh
                            </h2>


                            <div class="container-colour-line">

                                <span id="containerColourDot"></span>

                                <strong id="containerCollectionTitle">
                                    Blue
                                </strong>

                            </div>


                            <p id="containerCollectionDescription">

                                A vibrant colour collection designed to bring
                                energy, richness and a beautiful sensory experience
                                to every colourful celebration.

                            </p>


                            <!-- Product Meta -->

                            <div class="container-product-meta">

                                <div>

                                    <span>
                                        COLLECTION
                                    </span>

                                    <strong id="containerMetaCollection">
                                        Sparsh
                                    </strong>

                                </div>


                                <div>

                                    <span>
                                        AVAILABLE
                                    </span>

                                    <strong>
                                        12 Shades
                                    </strong>

                                </div>


                                <div>

                                    <span>
                                        PACK SIZE
                                    </span>

                                    <strong id="containerMetaSize">
                                        250 GM
                                    </strong>

                                </div>

                            </div>


                            <!-- Shade Selector -->

                            <div class="container-colour-selector">

                                <div class="container-colour-selector__heading">

                                    <span>
                                        AVAILABLE SHADES
                                    </span>

                                    <small>
                                        12 COLOURS
                                    </small>

                                </div>


                                <div class="container-colour-grid" id="containerColourGrid"></div>

                            </div>

                        </div>

                    </div>


                    <!-- Bottom Statement -->

                    <div class="container-page-bottom">

                        <span></span>

                        <p>
                            FOUR COLLECTIONS.
                            <strong>ONE COLOURFUL EXPERIENCE.</strong>
                        </p>

                        <span></span>

                    </div>

                </div>

            </section>

            <!-- CONTAINER CLASSIC RANGE END -->

            <!-- NEO POP COLLECTION START -->

            <section class="rainbow-neopop-section" id="neo-pop">

                <div class="neopop-bg-glow neopop-bg-glow--yellow"></div>
                <div class="neopop-bg-glow neopop-bg-glow--pink"></div>
                <div class="neopop-bg-glow neopop-bg-glow--blue"></div>

                <div class="container">

                    <!-- Heading -->

                    <div class="neopop-heading">

                        <div class="neopop-heading__left">

                            <span class="rainbow-section-label">

                                <i class="fa-solid fa-sparkles"></i>

                                NEW COLOUR COLLECTION

                            </span>

                            <h2>
                                MEET
                                <span>NEO POP.</span>
                            </h2>

                        </div>

                        <p>
                            A playful collection of vibrant shades created to bring
                            a fresh, expressive and colourful character to every celebration.
                        </p>

                    </div>


                    <!-- Pack Selector -->

                    <div class="neopop-pack-tabs" id="neopopPackTabs">

                        <button type="button" class="neopop-pack-tab active" data-pack="250gm">
                            {{-- <span>250 GM</span> --}}
                            <strong>250 GM</strong>
                        </button>


                        <button type="button" class="neopop-pack-tab" data-pack="500gm">
                            {{-- <span>500 GM</span> --}}
                            <strong>500 GM</strong>
                        </button>


                        <button type="button" class="neopop-pack-tab" data-pack="1kg">
                            {{-- <span>1 KG</span> --}}
                            <strong>1 KG</strong>
                        </button>


                        <button type="button" class="neopop-pack-tab" data-pack="2kg">
                            {{-- <span>2 KG</span> --}}
                            <strong>2 KG</strong>
                        </button>

                    </div>


                    <!-- Main Showcase -->

                    <div class="neopop-showcase">


                        <!-- Visual -->

                        <div class="neopop-showcase__visual">

                            <div class="neopop-circle neopop-circle--one"></div>
                            <div class="neopop-circle neopop-circle--two"></div>

                            <span class="neopop-dot neopop-dot--one"></span>
                            <span class="neopop-dot neopop-dot--two"></span>
                            <span class="neopop-dot neopop-dot--three"></span>


                            <div class="neopop-logo" id="neopopLogo">
                                NEO POP
                            </div>


                            <div class="neopop-product-stage">

                                <img id="mainNeoPopImage"
                                    src="{{ asset('assets/front/images/rainbow/250gm/fuzzy-lemon.png') }}"
                                    alt="Rainbow Neo Pop Fuzzy Lemon">

                            </div>


                            <div class="neopop-size-badge">

                                <small>
                                    PACK SIZE
                                </small>

                                <strong id="neopopSizeLabel">
                                    250 GM
                                </strong>

                            </div>

                        </div>


                        <!-- Content -->

                        <div class="neopop-showcase__content">

                            <span class="neopop-selected-label">
                                SELECTED COLLECTION
                            </span>


                            <h2>
                                NEO POP
                            </h2>


                            <div class="neopop-colour-line">

                                <span id="neopopColourDot" style="background:#DFFF00;"></span>

                                <strong id="neopopColourName">
                                    FUZZY LEMON
                                </strong>

                            </div>


                            <p id="neopopDescription">
                                A bright and playful Neo Pop shade designed to bring
                                a fresh burst of colour and personality to every celebration.
                            </p>


                            <!-- Meta -->

                            <div class="neopop-meta">

                                <div>

                                    <span>
                                        COLLECTION
                                    </span>

                                    <strong>
                                        Neo Pop
                                    </strong>

                                </div>


                                <div>

                                    <span>
                                        AVAILABLE
                                    </span>

                                    <strong id="neopopAvailable">
                                        4 Shades
                                    </strong>

                                </div>


                                <div>

                                    <span>
                                        PACK SIZE
                                    </span>

                                    <strong id="neopopMetaSize">
                                        250 GM
                                    </strong>

                                </div>

                            </div>


                            <!-- Shades -->

                            <div class="neopop-shades">

                                <div class="neopop-shades__heading">

                                    <span>
                                        AVAILABLE SHADES
                                    </span>

                                    <small id="neopopShadeCount">
                                        4 COLOURS
                                    </small>

                                </div>


                                <div class="neopop-colour-grid" id="neopopColourGrid"></div>

                            </div>

                        </div>

                    </div>


                    <!-- Bottom Statement -->

                    <div class="neopop-bottom">

                        <span></span>

                        <p>
                            FRESH SHADES.
                            <strong>NEW ENERGY.</strong>
                        </p>

                        <span></span>

                    </div>

                </div>

            </section>

            <!-- NEO POP COLLECTION END -->

            <section class="rainbow-container-packaging" id="container-packaging">

                <div class="container-packaging__glow container-packaging__glow--yellow"></div>
                <div class="container-packaging__glow container-packaging__glow--pink"></div>
                <div class="container-packaging__glow container-packaging__glow--blue"></div>

                <div class="container">

                    <!-- Section Heading -->

                    <div class="container-packaging__heading">

                        <div class="container-packaging__heading-left">

                            <span class="rainbow-section-label">
                                <i class="fa-solid fa-sparkles"></i>
                                CONTAINER PACKAGING
                            </span>

                            <h2>
                                PACKED FOR
                                <span>EVERY COLOUR.</span>
                            </h2>

                        </div>

                        <div class="container-packaging__heading-right">

                            <div class="container-packaging__heading-mark">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <p>
                                Practical pack sizes with carefully planned master
                                carton quantities for smooth handling, storage and distribution.
                            </p>

                        </div>

                    </div>


                    <!-- Creative Packaging Layout -->

                    <div class="container-packaging__layout">


                        <!-- Left Feature -->

                        <div class="container-packaging__feature">

                            <div class="container-packaging__feature-top">

                                <span class="container-packaging__feature-number">
                                    01
                                </span>

                                <span class="container-packaging__feature-label">
                                    STANDARD PACK
                                </span>

                            </div>


                            <div class="container-packaging__feature-visual">

                                <div class="container-packaging__feature-ring"></div>

                                <div class="container-packaging__feature-size">
                                    <strong>1</strong>
                                    <span>KG</span>
                                </div>

                                <span class="container-packaging__feature-dot"></span>

                            </div>


                            <div class="container-packaging__feature-content">

                                <h3>1 KG</h3>

                                <p>
                                    Compact and convenient packing
                                    for everyday colour requirements.
                                </p>

                                <div class="container-packaging__feature-info">

                                    <div>
                                        <span>MASTER CARTON</span>
                                        <strong>20 KG</strong>
                                    </div>

                                    <div>
                                        <span>PACKING</span>
                                        <strong>1 KG × 20 PCS</strong>
                                    </div>

                                </div>

                            </div>


                            <div class="container-packaging__shades">

                                <div class="container-packaging__shades-title">
                                    <i class="fa-solid fa-swatchbook"></i>
                                    <span>AVAILABLE IN ALL SHADES</span>
                                </div>

                                <div class="container-packaging__colour-list">

                                    <i style="--shade:#E53935"></i>
                                    <i style="--shade:#FDD200"></i>
                                    <i style="--shade:#287BEA"></i>
                                    <i style="--shade:#FF7A00"></i>
                                    <i style="--shade:#F783B6"></i>
                                    <i style="--shade:#E83E8C"></i>
                                    <i style="--shade:#36C96F"></i>
                                    <i style="--shade:#56CCF2"></i>
                                    <i style="--shade:#8BCF45"></i>
                                    <i style="--shade:#7047B8"></i>
                                    <i style="--shade:#F4F4F4"></i>

                                </div>

                            </div>

                        </div>



                        <!-- Right Side -->

                        <div class="container-packaging__right">


                            <!-- 2 KG -->

                            <div class="container-packaging__medium">

                                <div class="container-packaging__medium-number">
                                    02
                                </div>

                                <div class="container-packaging__medium-size">

                                    <strong>2</strong>
                                    <span>KG</span>

                                </div>

                                <div class="container-packaging__medium-content">

                                    <span>MASTER CARTON</span>
                                    <strong>20 KG</strong>

                                    <div></div>

                                    <span>PACKING</span>
                                    <strong>2 KG × 10 PCS</strong>

                                </div>

                                <div class="container-packaging__medium-shades">

                                    <span>ALL SHADES</span>

                                    <div>

                                        <i style="--shade:#E53935"></i>
                                        <i style="--shade:#FDD200"></i>
                                        <i style="--shade:#287BEA"></i>
                                        <i style="--shade:#FF7A00"></i>
                                        <i style="--shade:#F783B6"></i>
                                        <i style="--shade:#E83E8C"></i>
                                        <i style="--shade:#36C96F"></i>
                                        <i style="--shade:#56CCF2"></i>
                                        <i style="--shade:#8BCF45"></i>
                                        <i style="--shade:#7047B8"></i>

                                    </div>

                                </div>

                            </div>



                            <!-- 2.5 KG -->

                            <div class="container-packaging__large">

                                <div class="container-packaging__large-background">
                                    <span>2.5</span>
                                </div>

                                <div class="container-packaging__large-top">

                                    <span class="container-packaging__large-number">
                                        03
                                    </span>

                                    <span class="container-packaging__large-label">
                                        SPECIAL COMBO FORMAT
                                    </span>

                                </div>


                                <div class="container-packaging__large-main">

                                    <div class="container-packaging__large-size">

                                        <strong>2.5</strong>

                                        <span>KG</span>

                                    </div>


                                    <div class="container-packaging__large-details">

                                        <div>

                                            <span>MASTER CARTON</span>

                                            <strong>25 KG</strong>

                                        </div>

                                        <div>

                                            <span>PACKING</span>

                                            <strong>2.5 KG × 10 PCS</strong>

                                        </div>

                                    </div>

                                </div>


                                <div class="container-packaging__large-bottom">

                                    <div class="container-packaging__large-shades">

                                        <span>
                                            AVAILABLE IN ALL SHADES
                                        </span>

                                        <div>

                                            <i style="--shade:#E53935"></i>
                                            <i style="--shade:#FDD200"></i>
                                            <i style="--shade:#287BEA"></i>
                                            <i style="--shade:#FF7A00"></i>
                                            <i style="--shade:#F783B6"></i>
                                            <i style="--shade:#E83E8C"></i>
                                            <i style="--shade:#36C96F"></i>
                                            <i style="--shade:#56CCF2"></i>
                                            <i style="--shade:#8BCF45"></i>
                                            <i style="--shade:#7047B8"></i>
                                            <i style="--shade:#F4F4F4"></i>

                                        </div>

                                    </div>


                                    <div class="container-packaging__combo">

                                        <div class="container-packaging__combo-title">
                                            <i class="fa-solid fa-layer-group"></i>
                                            COMBO COLLECTION
                                        </div>

                                        <div class="container-packaging__combo-items">

                                            <span class="combo--yellow">
                                                SPARSH
                                            </span>

                                            <span class="combo--blue">
                                                SIGNATURE
                                            </span>

                                            <span class="combo--pink">
                                                NEO POP
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Bottom Statement -->

                    <div class="container-packaging__statement">

                        <span></span>

                        <div>
                            <small>CONTAINER RANGE</small>

                            <strong>
                                THREE SIZES.
                                <em>ONE COLOURFUL STANDARD.</em>
                            </strong>
                        </div>

                        <span></span>

                    </div>

                </div>

            </section>


            @include('front.layouts.footer')

        </div>

    </div>
@endsection
