 
 <!-- ==== footer start ==== -->
            <footer class="rainbow-footer">

                <div class="container">

                    {{-- Main footer grid --}}
                    <div class="rainbow-footer__main">

                        {{-- Brand --}}
                        <div class="footer-brand">

                            <a href="{{ url('/') }}" class="footer-brand__logo">
                                <img src="{{ asset('assets/front/images/rainbow/logo.png') }}" alt="Rainbow Colors">
                            </a>

                            <p>Premium Rangoli colours, rooted in tradition, made for the world.</p>

                            <div class="footer-brand__social">
                                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                            </div>

                        </div>


                        {{-- Explore --}}
                        <div class="footer-links">
                            <span class="footer-links__label">Explore</span>
                            <a href="#about">About Us</a>
                            <a href="#products">Products</a>
                            <a href="#why-rainbow">Why Rainbow</a>
                            <a href="#journey">Our Journey</a>
                            <a href="#gallery">Gallery</a>
                        </div>


                        {{-- Unit 1 --}}
                        <div class="footer-unit-card">
                            <span class="footer-unit-card__badge">Unit 01</span>
                            <h4>Varun Minerals</h4>
                            <a href="mailto:info.rainbowcolorss@gmail.com">info.rainbowcolorss@gmail.com</a>
                            <a href="tel:+917778884447">+91&ndash;777&ndash;888&ndash;4447</a>
                        </div>


                        {{-- Unit 2 --}}
                        <div class="footer-unit-card">
                            <span class="footer-unit-card__badge">Unit 02</span>
                            <h4>Varun Colours Pvt Ltd</h4>
                            <a href="mailto:varuncolourspvtltd@gmail.com">varuncolourspvtltd@gmail.com</a>
                            <a href="tel:+917778884447">+91&ndash;777&ndash;888&ndash;4447</a>
                        </div>

                    </div>


                    {{-- Presence strip --}}
                    <div class="rainbow-footer__presence">

                        <span class="presence-label">
                            <i class="fa-solid fa-location-dot"></i>
                            Operating Across India
                        </span>

                        <div class="presence-tags">
                            <span>Gujarat</span>
                            <span>Maharashtra</span>
                            <span>Telangana</span>
                            <span>Karnataka</span>
                            <span>Andhra Pradesh</span>
                            <span>Tamil Nadu</span>
                            <span>Rajasthan</span>
                            <span>Uttar Pradesh</span>
                            <span>Madhya Pradesh</span>
                            {{-- <span class="presence-more">+ Export Worldwide</span> --}}
                        </div>

                    </div>


                    {{-- Bottom bar --}}
                    <div class="rainbow-footer__bottom">
                        <p>&copy; {{ date('Y') }} Rainbow Colors. All rights reserved.</p>

                        <ul class="rainbow-footer__legal">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>

                </div>

            </footer>
            <!-- ==== / footer end ==== -->