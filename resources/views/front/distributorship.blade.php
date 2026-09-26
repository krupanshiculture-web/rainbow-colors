@extends('front.layouts.head')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Distributorship Hero -->
            <section class="rainbow-page-hero rainbow-distributor-hero">
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
                            <span>Distributorship</span>
                        </div>

                        <div class="rainbow-page-hero__heading-wrap">
                            <h1>
                                GROW WITH
                                <span>RAINBOW.</span>
                            </h1>
                        </div>

                    </div>
                </div>
            </section>


            <!-- Why Rainbow -->
            <section class="rainbow-distributor-intro">
                <div class="container">

                    <div class="rainbow-products__heading">
                        <div>
                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                WHY RAINBOW
                            </span>

                            <h2>
                                BUILD A BUSINESS
                                <span>FULL OF COLOUR.</span>
                            </h2>
                        </div>

                        <p>
                            Partner with Rainbow and bring a vibrant brand
                            and colourful product experience to your market.
                        </p>
                    </div>


                    <div class="distributor-benefits">

                        <div class="distributor-benefit">
                            <span class="distributor-benefit__number">01</span>

                            <div class="distributor-benefit__icon">
                                <i class="fa-solid fa-award"></i>
                            </div>

                            <h3>Trusted Brand</h3>

                            <p>
                                Build your business with the Rainbow brand
                                and its colourful product identity.
                            </p>
                        </div>


                        <div class="distributor-benefit">
                            <span class="distributor-benefit__number">02</span>

                            <div class="distributor-benefit__icon">
                                <i class="fa-solid fa-box-open"></i>
                            </div>

                            <h3>Wide Product Range</h3>

                            <p>
                                Explore multiple Rainbow formats and
                                collections under one brand.
                            </p>
                        </div>


                        <div class="distributor-benefit">
                            <span class="distributor-benefit__number">03</span>

                            <div class="distributor-benefit__icon">
                                <i class="fa-solid fa-store"></i>
                            </div>

                            <h3>Market Opportunity</h3>

                            <p>
                                Take Rainbow products into new markets,
                                stores and regional customer networks.
                            </p>
                        </div>


                        <div class="distributor-benefit">
                            <span class="distributor-benefit__number">04</span>

                            <div class="distributor-benefit__icon">
                                <i class="fa-solid fa-handshake"></i>
                            </div>

                            <h3>Business Partnership</h3>

                            <p>
                                Create a long-term business relationship
                                around colourful products and celebrations.
                            </p>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Distributor Enquiry -->
            <section class="rainbow-distributor-enquiry" id="distributorship-enquiry">

                <div class="distributor-enquiry__glow distributor-enquiry__glow--yellow"></div>
                <div class="distributor-enquiry__glow distributor-enquiry__glow--pink"></div>

                <div class="container">

                    <div class="distributor-enquiry">

                        <div class="distributor-enquiry__content">

                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-paper-plane"></i>
                                DISTRIBUTOR ENQUIRY
                            </span>

                            <h2>
                                READY TO
                                <span>GROW WITH US?</span>
                            </h2>

                            <p>
                                Tell us about your business and market.
                                Our team can connect with you to discuss
                                Rainbow distributorship.
                            </p>

                            <div class="distributor-enquiry__contact">

                                <div>
                                    <i class="fa-solid fa-envelope"></i>

                                    <span>EMAIL</span>

                                    <strong>
                                        info.rainbowcolorss@gmail.com
                                    </strong>
                                </div>


                                <div>
                                    <i class="fa-solid fa-phone"></i>

                                    <span>CALL</span>

                                    <strong>
                                        +91-777-888-4447
                                    </strong>
                                </div>

                            </div>

                        </div>


                        <div class="distributor-enquiry__form">

                            <form action="#" method="POST">

                                @csrf

                                <div class="distributor-form-grid">

                                    <div class="distributor-form-field">
                                        <label for="distributor_name">
                                            Full Name
                                        </label>

                                        <input type="text" id="distributor_name" name="name"
                                            placeholder="Enter your name" required>
                                    </div>


                                    <div class="distributor-form-field">
                                        <label for="distributor_company">
                                            Company Name
                                        </label>

                                        <input type="text" id="distributor_company" name="company"
                                            placeholder="Enter company name">
                                    </div>


                                    <div class="distributor-form-field">
                                        <label for="distributor_phone">
                                            Mobile Number
                                        </label>

                                        <input type="tel" id="distributor_phone" name="phone"
                                            placeholder="Enter mobile number" required>
                                    </div>


                                    <div class="distributor-form-field">
                                        <label for="distributor_email">
                                            Email Address
                                        </label>

                                        <input type="email" id="distributor_email" name="email"
                                            placeholder="Enter email address" required>
                                    </div>


                                    <div class="distributor-form-field">
                                        <label for="distributor_city">
                                            City
                                        </label>

                                        <input type="text" id="distributor_city" name="city" placeholder="Enter city">
                                    </div>


                                    <div class="distributor-form-field">
                                        <label for="distributor_state">
                                            State
                                        </label>

                                        <input type="text" id="distributor_state" name="state"
                                            placeholder="Enter state">
                                    </div>


                                    <div class="distributor-form-field distributor-form-field--full">
                                        <label for="distributor_business">
                                            Business Type
                                        </label>

                                        <select id="distributor_business" name="business_type">
                                            <option value="">
                                                Select business type
                                            </option>

                                            <option value="distributor">
                                                Distributor
                                            </option>

                                            <option value="dealer">
                                                Dealer
                                            </option>

                                            <option value="wholesaler">
                                                Wholesaler
                                            </option>

                                            <option value="retailer">
                                                Retailer
                                            </option>

                                            <option value="business-owner">
                                                Business Owner
                                            </option>

                                            <option value="other">
                                                Other
                                            </option>
                                        </select>
                                    </div>


                                    <div class="distributor-form-field distributor-form-field--full">
                                        <label for="distributor_message">
                                            Message
                                        </label>

                                        <textarea id="distributor_message" name="message" rows="5"
                                            placeholder="Tell us about your business and market"></textarea>
                                    </div>

                                </div>


                                <button type="submit" class="distributor-form-submit">
                                    SUBMIT DISTRIBUTOR ENQUIRY

                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </section>


            <!-- How It Works -->
            <section class="rainbow-distributor-process">
                <div class="container">

                    <div class="rainbow-products__heading">
                        <div>
                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                HOW IT WORKS
                            </span>

                            <h2>
                                FROM ENQUIRY
                                <span>TO PARTNERSHIP.</span>
                            </h2>
                        </div>

                        <p>
                            A simple journey to start a conversation
                            about Rainbow distributorship.
                        </p>
                    </div>


                    <div class="distributor-process">

                        <div class="distributor-process__item">
                            <div class="distributor-process__number">01</div>

                            <div>
                                <h3>Send Enquiry</h3>

                                <p>
                                    Share your business and contact details
                                    with our team.
                                </p>
                            </div>
                        </div>


                        <div class="distributor-process__line"></div>


                        <div class="distributor-process__item">
                            <div class="distributor-process__number">02</div>

                            <div>
                                <h3>Business Discussion</h3>

                                <p>
                                    Discuss your market, product interests
                                    and business requirements.
                                </p>
                            </div>
                        </div>


                        <div class="distributor-process__line"></div>


                        <div class="distributor-process__item">
                            <div class="distributor-process__number">03</div>

                            <div>
                                <h3>Partnership Setup</h3>

                                <p>
                                    Explore the suitable distributorship
                                    structure for your market.
                                </p>
                            </div>
                        </div>


                        <div class="distributor-process__line"></div>


                        <div class="distributor-process__item">
                            <div class="distributor-process__number">04</div>

                            <div>
                                <h3>Grow With Rainbow</h3>

                                <p>
                                    Take Rainbow products into your market
                                    and build your customer network.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>


            @include('front.layouts.footer')

        </div>
    </div>
@endsection
