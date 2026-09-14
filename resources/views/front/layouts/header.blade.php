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
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#why-rainbow">Why Rainbow</a></li>
                    <li><a href="#journey">Our Journey</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#get-in-touch">Contact</a></li>
                </ul>
            </nav>


            {{-- CTA --}}
            <a href="#get-in-touch" class="rainbow-header__cta">
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