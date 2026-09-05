    <!-- Header area start here -->
    <div class="top__header pt-30 pb-30">
        <div class="container">
            <div class="top__wrapper">
                <a href="{{ route('home') }}" class="main__logo">
                    <img src="{{ asset('frontend/assets/images/logo/YELLOWonlyRainbowtm.png') }}" height="50" alt="logo__image">
                </a>

                <div class="account__wrap">
                     <div class="search__wrp">
                    <input placeholder="Search for" aria-label="Search">
                    <button><i class="fa-solid fa-search"></i></button>
                </div>
                    <div class="account d-flex align-items-center">
                        <div class="user__icon">
                            <a href="#0">
                                <i class="fa-regular fa-user"></i>
                            </a>
                        </div>
                        <a href="#0" class="acc__cont">
                            <span>
                                My Account
                            </span>
                        </a>
                    </div>
                    {{-- <div class="cart d-flex align-items-center">
                        <span class="cart__icon">
                            <i class="fa-regular fa-cart-shopping"></i>
                        </span>
                        <a href="/" class="c__one">
                            <span>
                                $0.00
                            </span>
                        </a>
                        <span class="one">
                            0
                        </span>
                    </div>
                    <div class="flag__wrap">
                        <div class="flag">
                            <img src="{{ asset('frontend/assets/images/flag/us.png') }}" alt="flag">
                        </div>
                        <select name="flag">
                            <option value="0">
                                Usa
                            </option>
                            <option value="1">
                                Canada
                            </option>
                            <option value="2">
                                Australia
                            </option>
                            <option value="3">
                                Germany
                            </option>
                        </select>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                  <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="product-menu">
                        <a href="{{ route('products') }}">Our Products <i class="fa-regular fa-angle-down"></i></a>
                        @php
                            $productMenu = [
                                'Pouch' => [
                                    '100gm' => ['Red', 'Sky blue', 'Blue', 'Purple', 'Pink', 'Rani Pink', 'Green', 'Orange', 'Rose Pink', 'Yellow', 'Parrot', 'White'],
                                    '250gm' => ['Red', 'Sky blue', 'Blue', 'Purple', 'Pink', 'Rani Pink', 'Green', 'Orange', 'Rose Pink', 'Yellow', 'Parrot', 'White'],
                                    '500gm' => ['Red', 'Sky blue', 'Blue', 'Purple', 'Pink', 'Rani Pink', 'Green', 'Orange', 'Rose Pink', 'Yellow', 'Parrot', 'White'],
                                ],
                                'Container' => [
                                    '250gm - Sparsh' => ['Blue', 'Green', 'Orange', 'Parrot', 'Pink', 'Purple', 'Rani Pink', 'Red', 'Sky blue', 'Yellow'],
                                    '500gm - Signature' => ['Blue', 'Green', 'Orange', 'Parrot', 'Pink', 'Purple', 'Rani Pink', 'Red', 'Sky blue', 'Yellow', 'White', 'Black'],
                                    '1kg - Harmon' => ['Blue', 'Green', 'Orange', 'Parrot', 'Pink', 'Purple', 'Rani Pink', 'Red', 'Sky blue', 'Yellow', 'White', 'Black'],
                                    '2kg - Heritage' => ['Blue', 'Green', 'Orange', 'Parrot', 'Pink', 'Purple', 'Rani Pink', 'Red', 'Sky blue', 'Yellow'],
                                    '500gm - Neo P' => ['Fuzzy Lemon', 'Electric orange', 'Toxic Green', 'Pink Blast', 'Cosmic purple'],
                                    '250gm - Neo Pop' => ['Fuzzy Lemon', 'Electric orange', 'Toxic Green', 'Pink Blast'],
                                ],
                                'Box' => [
                                    '250 Sparsh' => ['4 Dabi', '8 Dabi', '10 Dabi'],
                                    '500 Signature' => ['2 Dabi', '4 Dabi', '5 Dabi'],
                                    'Neopop' => ['250 - 4 Dabi', '500 - 4 Dabi'],
                                ],
                            ];
                        @endphp
                        <ul class="sub-menu">
                            @foreach ($productMenu as $category => $sizes)
                                <li class="subtwohober">
                                    <a href="{{ route('products', ['category' => strtolower($category)]) }}">
                                        {{ $category }} <i class="fa-regular fa-angle-right"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        @foreach ($sizes as $size => $colours)
                                            <li class="subtwohober">
                                                <a href="{{ route('products', ['category' => strtolower($category), 'size' => $size]) }}">
                                                    {{ $size }} <i class="fa-regular fa-angle-right"></i>
                                                </a>
                                                <ul class="sub-menu">
                                                    @foreach ($colours as $colour)
                                                        <li class="subtwohober">
                                                            <a href="{{ route('products', ['category' => strtolower($category), 'size' => $size, 'colour' => strtolower($colour)]) }}">
                                                                {{ $colour }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Blog <i class="fa-regular fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="#">
                                    Blog Stander
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="#">
                                    Blog Grid
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="#">
                                    Blog List
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="#">
                                    Blog Single
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
                <div class="shipping__item d-none d-sm-flex align-items-center">
                    {{-- <div class="menu__right d-flex align-items-center">
                        <div class="thumb">
                            <img src="{{ asset('frontend/assets/images/flag/picking.png') }}" alt="image">
                        </div>
                        <div class="content">
                            <p>
                                Picking up?
                            </p>
                            <div class="items">
                                <select class="form__select p-0">
                                    <option value="1">
                                        Select Store
                                    </option>
                                    <option value="2">
                                        Store One
                                    </option>
                                    <option value="3">
                                        Store Two
                                    </option>
                                    <option value="3">
                                        Store Three
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div> --}}
                    <div class="menu__right d-flex align-items-center">
                        <div class="thumb">
                            <img src="{{ asset('frontend/assets/images/flag/shipping.png') }}" alt="image">
                        </div>
                        <div class="content">
                            <p>
                             <strong>Free Shipping <br> on order</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->
