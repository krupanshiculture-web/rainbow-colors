<!-- ==== header start ==== -->
<header class="rainbow-header" id="rainbowHeader">

    {{-- Mobile nav overlay --}}
    <div class="rainbow-nav-overlay" id="rainbowNavOverlay"></div>

    <div class="container">

        <div class="rainbow-header__inner">

            {{-- Brand wrapper: badge + logo saathe locked --}}
            <div class="rainbow-header__brand">

                <div class="rainbow-logo-badge">
                    <img src="{{ asset('assets/front/images/rainbow/favicon.png') }}" alt="Rainbow Colors Logo Mark">
                </div>

                <a href="{{ url('/') }}" class="rainbow-header__logo" aria-label="Rainbow Colors - Go to home">
                    <span class="rainbow-logo-text">
                        <img src="{{ asset('assets/front/images/rainbow/logo.png') }}" alt="Rainbow Colors - Let's Create Colourful Memories">
                    </span>
                </a>

            </div>


            {{-- Nav --}}
            <nav class="rainbow-header__nav" id="rainbowNav">

                <button class="rainbow-nav-close" id="rainbowNavClose" aria-label="Close Menu">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <ul>
                    <li><a href="{{ url('/') }}#home">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>

                    {{-- Products with dropdown --}}
                    <li class="has-dropdown">
                        <a href="{{ url('/products') }}">
                            Products
                            <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
                        </a>

                        <ul class="rainbow-dropdown">
                            <li>
                                <a href="{{ url('/products/pouch') }}">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    Pouch Range
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/products/container') }}">
                                    <i class="fa-solid fa-jar"></i>
                                    Container Range
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/products/box') }}">
                                    <i class="fa-solid fa-box-open"></i>
                                    Box Range
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="{{ url('/') }}#gallery">Gallery</a></li>
                    <li><a href="{{ url('/') }}#distributorship">Distributorship</a></li>
                    <li><a href="{{ url('/') }}#get-in-touch">Contact</a></li>
                </ul>
            </nav>


            {{-- CTA --}}
            <a href="{{ url('/') }}#get-in-touch" class="rainbow-header__cta">
                Enquire Now
                <i class="fa-solid fa-arrow-right"></i>
            </a>


            {{-- Mobile toggle --}}
            <button class="rainbow-header__toggle" id="rainbowNavToggle" aria-label="Open Menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

    </div>

</header>
<!-- ==== / header end ==== -->