@extends('front.layouts.head')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Contact Hero -->
            <section class="rainbow-page-hero rainbow-contact-hero">

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
                            <span>Contact</span>
                        </div>

                        <div class="rainbow-page-hero__heading-wrap">
                            <h1>
                                LET'S CREATE
                                <span>SOMETHING COLOURFUL.</span>
                            </h1>
                        </div>

                    </div>
                </div>

            </section>


            <!-- Contact Intro -->
            <section class="rainbow-contact-intro">

                <div class="container">

                    <div class="rainbow-products__heading">

                        <div>
                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                GET IN TOUCH
                            </span>

                            <h2>
                                WE'D LOVE TO
                                <span>HEAR FROM YOU.</span>
                            </h2>
                        </div>

                        <p>
                            Have a question, business enquiry or simply want
                            to know more about Rainbow? Get in touch with our team.
                        </p>

                    </div>


                    <div class="contact-info-grid">

                        <div class="contact-info-card">

                            <div class="contact-info-card__icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <span>EMAIL US</span>

                            <h3>General Enquiry</h3>

                            <a href="mailto:info.rainbowcolorss@gmail.com">
                                info.rainbowcolorss@gmail.com
                            </a>

                        </div>


                        <div class="contact-info-card">

                            <div class="contact-info-card__icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <span>CALL US</span>

                            <h3>Business Enquiry</h3>

                            <a href="tel:+917778884447">
                                +91-777-888-4447
                            </a>

                        </div>


                        <div class="contact-info-card">

                            <div class="contact-info-card__icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <span>VISIT US</span>

                            <h3>Our Units</h3>

                            <p>
                                Gujarat, India
                            </p>

                        </div>

                    </div>

                </div>

            </section>


            <!-- Contact Form + Map -->
            <section class="rainbow-contact-main">

                <div class="contact-main__glow contact-main__glow--yellow"></div>
                <div class="contact-main__glow contact-main__glow--pink"></div>

                <div class="container">

                    <div class="contact-main-grid">

                        <!-- Contact Form -->
                        <div class="contact-form-wrap" id="contact-form">

                            <div class="contact-form-heading">

                                <span class="rainbow-products__eyebrow">
                                    <i class="fa-solid fa-paper-plane"></i>
                                    SEND AN ENQUIRY
                                </span>

                                <h2>
                                    LET'S START
                                    <span>A CONVERSATION.</span>
                                </h2>

                                <p>
                                    Fill in your details and our team will
                                    get in touch with you.
                                </p>

                            </div>


                            <form class="rainbow-contact-form" action="#" method="POST">

                                @csrf

                                <div class="contact-form-grid">

                                    <div class="contact-form-field">
                                        <label for="contact_name">
                                            Full Name
                                        </label>

                                        <input type="text" id="contact_name" name="name" placeholder="Enter your name"
                                            required>
                                    </div>


                                    <div class="contact-form-field">
                                        <label for="contact_email">
                                            Email Address
                                        </label>

                                        <input type="email" id="contact_email" name="email"
                                            placeholder="Enter email address" required>
                                    </div>


                                    <div class="contact-form-field">
                                        <label for="contact_phone">
                                            Phone Number
                                        </label>

                                        <input type="tel" id="contact_phone" name="phone"
                                            placeholder="Enter phone number" required>
                                    </div>


                                    <div class="contact-form-field">
                                        <label for="contact_subject">
                                            Subject
                                        </label>

                                        <select id="contact_subject" name="subject">
                                            <option value="">
                                                Select enquiry type
                                            </option>

                                            <option value="general">
                                                General Enquiry
                                            </option>

                                            <option value="distributorship">
                                                Distributorship
                                            </option>

                                            <option value="products">
                                                Product Enquiry
                                            </option>

                                            <option value="business">
                                                Business Enquiry
                                            </option>

                                            <option value="other">
                                                Other
                                            </option>
                                        </select>
                                    </div>


                                    <div class="contact-form-field contact-form-field--full">

                                        <label for="contact_message">
                                            Message
                                        </label>

                                        <textarea id="contact_message" name="message" rows="6" placeholder="Write your message..."></textarea>

                                    </div>

                                </div>


                                <button type="submit" class="contact-form-submit">
                                    SEND MESSAGE

                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>

                            </form>

                        </div>


                        <!-- Map -->
                        <div class="contact-map-wrap">

                            <div class="contact-map-heading">

                                <span class="rainbow-products__eyebrow">
                                    <i class="fa-solid fa-location-dot"></i>
                                    FIND US
                                </span>

                                <h2>
                                    COME
                                    <span>VISIT US.</span>
                                </h2>

                                <p>
                                    Find Rainbow on the map and get directions
                                    to our location.
                                </p>

                            </div>


                            <div class="contact-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4377.832900679586!2d74.0177977!3d22.3293377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3960459aceeb58ad%3A0xfb99e8fed55d2f40!2sVarun%20Minerals!5e1!3m2!1sen!2sin!4v1790336648055!5m2!1sen!2sin"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="strict-origin-when-cross-origin" title="Varun Minerals Location">
                                </iframe>
                            </div>


                            <a href="https://maps.google.com/?cid=18129777956155633472&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF&hl=en-US&source=embed"
                                target="_blank" rel="noopener noreferrer" class="contact-map-link">
                                OPEN IN GOOGLE MAPS

                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </section>


            <!-- Our Units -->
            <section class="rainbow-contact-units">

                <div class="container">

                    <div class="rainbow-products__heading">

                        <div>
                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-building"></i>
                                OUR UNITS
                            </span>

                            <h2>
                                WHERE RAINBOW
                                <span>COMES TO LIFE.</span>
                            </h2>
                        </div>

                        <p>
                            Our operations are supported through our
                            manufacturing and packaging units in Gujarat.
                        </p>

                    </div>


                    <div class="contact-units-grid">

                        <!-- Unit 1 -->
                        <div class="contact-unit-card">

                            <span class="contact-unit-card__number">
                                01
                            </span>

                            <div class="contact-unit-card__icon">
                                <i class="fa-solid fa-industry"></i>
                            </div>

                            <small>
                                VARUN MINERALS
                            </small>

                            <h3>
                                Unit 1
                            </h3>

                            <div class="contact-unit-card__detail">

                                <i class="fa-solid fa-location-dot"></i>

                                <p>
                                    201/p, Vanar Jamla Road, Vasedi,<br>
                                    Chhota Udepur - 391165
                                </p>

                            </div>

                            <div class="contact-unit-card__detail">

                                <i class="fa-solid fa-envelope"></i>

                                <a href="mailto:info.varunminerals@gmail.com">
                                    info.varunminerals@gmail.com
                                </a>

                            </div>

                            <div class="contact-unit-card__detail">

                                <i class="fa-solid fa-phone"></i>

                                <a href="tel:+917778884447">
                                    +91-777-888-4447
                                </a>

                            </div>

                        </div>


                        <!-- Unit 2 -->
                        <div class="contact-unit-card contact-unit-card--accent">

                            <span class="contact-unit-card__number">
                                02
                            </span>

                            <div class="contact-unit-card__icon">
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>

                            <small>
                                VARUN COLOURS PVT LTD
                            </small>

                            <h3>
                                Unit 2
                            </h3>

                            <div class="contact-unit-card__detail">

                                <i class="fa-solid fa-location-dot"></i>

                                <p>
                                    Savita Hari Estate, Palaswada,<br>
                                    Dabhoi Road, Vadodara - 391107
                                </p>

                            </div>

                            <div class="contact-unit-card__detail">

                                <i class="fa-solid fa-envelope"></i>

                                <a href="mailto:info.rainbowcolourss@gamil.com">
                                    info.rainbowcolourss@gamil.com
                                </a>

                            </div>

                            <div class="contact-unit-card__detail">

                                <i class="fa-solid fa-phone"></i>

                                <a href="tel:+917778884447">
                                    +91-777-888-4447
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            @include('front.layouts.footer')

        </div>
    </div>
@endsection
