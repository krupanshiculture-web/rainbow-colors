@extends('front.layouts.head')

@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- PAGE HERO START -->
        <section class="rainbow-page-hero rainbow-box-hero">

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
            </div>

            <div class="container">
                <div class="rainbow-page-hero__inner">

                    <div class="rainbow-page-hero__breadcrumb">
                        <a href="{{ url('/') }}">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="{{ url('/products') }}">Products</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <span>Box</span>
                    </div>

                    <div class="rainbow-page-hero__heading-wrap">
                        <h1>
                            COLOUR FOR
                            <span>EVERY CELEBRATION.</span>
                        </h1>
                    </div>

                </div>
            </div>

        </section>
        <!-- PAGE HERO END -->

        <!-- BOX CONFIGURATOR START -->
        <section class="rainbow-box-configurator" id="box-collection">

            <div class="box-configurator__glow box-configurator__glow--yellow"></div>
            <div class="box-configurator__glow box-configurator__glow--pink"></div>

            <div class="container">

                <div class="rainbow-products__heading">

                    <div>

                        <span class="rainbow-products__eyebrow">
                            <i class="fa-solid fa-sparkles"></i>
                            EXPLORE THE COLLECTION
                        </span>

                        <h2>
                            CHOOSE YOUR
                            <span>BOX FORMAT.</span>
                        </h2>

                    </div>

                    <p>
                        Select a Rainbow collection and explore the available
                        box configurations designed around different container
                        combinations.
                    </p>

                </div>


                <!-- COLLECTION TABS -->
                <div class="box-collection-tabs" id="boxCollectionTabs">

                    <button
                        type="button"
                        class="box-collection-tab active"
                        data-collection="sparsh"
                    >
                        <span>01</span>
                        <strong>Sparsh</strong>
                        <small>250</small>
                    </button>

                    <button
                        type="button"
                        class="box-collection-tab"
                        data-collection="signature"
                    >
                        <span>02</span>
                        <strong>Signature</strong>
                        <small>500</small>
                    </button>

                    <button
                        type="button"
                        class="box-collection-tab"
                        data-collection="neopop"
                    >
                        <span>03</span>
                        <strong>NeoPop</strong>
                        <small>Collection</small>
                    </button>

                </div>


                <!-- CONFIGURATOR -->
                <div class="box-configurator">

                    <!-- LEFT -->
                    <div class="box-configurator__visual">

                        <div class="box-configurator__visual-bg"></div>

                        <span class="box-configurator__floating-dot dot-one"></span>
                        <span class="box-configurator__floating-dot dot-two"></span>
                        <span class="box-configurator__floating-dot dot-three"></span>

                        <div class="box-configurator__rings">
                            <span></span>
                            <span></span>
                        </div>

                        <div class="box-configurator__image-wrap">

                            <img
                                id="boxMainImage"
                                src="{{ asset('assets/front/images/rainbow/box/sparsh-4.png') }}"
                                alt="Rainbow Sparsh 4 Container Box"
                            >

                        </div>

                        <div class="box-configurator__image-label">
                            <span id="boxImageCollection">SPARSH</span>
                            <strong id="boxImageFormat">4 PCS</strong>
                        </div>

                    </div>


                    <!-- RIGHT -->
                    <div class="box-configurator__content">

                        <div class="box-configurator__collection">

                            <span class="box-configurator__eyebrow">
                                SELECT COLLECTION
                            </span>

                            <h3 id="boxCollectionTitle">
                                250 Sparsh
                            </h3>

                            <p id="boxCollectionDescription">
                                Window-style Rainbow packaging designed
                                to present the Sparsh container collection
                                in a colourful and premium format.
                            </p>

                        </div>


                        <!-- OPTIONS -->
                        <div class="box-options">

                            <span class="box-options__label">
                                SELECT BOX FORMAT
                            </span>

                            <div
                                class="box-options__buttons"
                                id="boxFormatButtons"
                            ></div>

                        </div>


                        <!-- SELECTED INFO -->
                        <div class="box-selected">

                            <div class="box-selected__top">

                                <div>
                                    <small>SELECTED FORMAT</small>
                                    <strong id="boxSelectedTitle">
                                        4 Containers
                                    </strong>
                                </div>

                                <span id="boxSelectedBadge">
                                    SPARSH
                                </span>

                            </div>


                            <div class="box-selected__details">

                                <div>
                                    <span>COLLECTION</span>
                                    <strong id="boxMetaCollection">
                                        250 Sparsh
                                    </strong>
                                </div>

                                <div>
                                    <span>PACKING</span>
                                    <strong id="boxMetaPacking">
                                        4 Container in 1 Box
                                    </strong>
                                </div>

                            </div>

                        </div>


                        <!-- COLOUR DOTS -->
                        <div class="box-colours">

                            <div class="box-colours__head">
                                <span>COLOUR RANGE</span>
                                <strong>RAINBOW</strong>
                            </div>

                            <div class="box-colours__dots">

                                <i style="--dot:#E53935"></i>
                                <i style="--dot:#FDD200"></i>
                                <i style="--dot:#287BEA"></i>
                                <i style="--dot:#FF7A00"></i>
                                <i style="--dot:#FF4F9A"></i>
                                <i style="--dot:#36C96F"></i>
                                <i style="--dot:#20A4F3"></i>
                                <i style="--dot:#8BCF45"></i>
                                <i style="--dot:#E83E8C"></i>
                                <i style="--dot:#7047B8"></i>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- BOTTOM STATEMENT -->
                <div class="box-configurator__statement">

                    <span></span>

                    <div>
                        <small>RAINBOW BOX COLLECTION</small>
                        <strong>
                            OPEN THE BOX.
                            <em>REVEAL THE COLOUR.</em>
                        </strong>
                    </div>

                    <span></span>

                </div>

            </div>

        </section>
        <!-- BOX CONFIGURATOR END -->


        @include('front.layouts.footer')

    </div>
</div>

@endsection