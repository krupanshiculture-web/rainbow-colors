@extends('front.layouts.head')

{{-- @section('title', 'Product Details') --}}

@section('content')

      <div id="smooth-wrapper">
         <div id="smooth-content">
            <!-- ==== main start ==== -->
            <main>
               <!-- ==== banner start ==== -->
               <section class="banner">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="banner__content">
                              <h1 class="text-uppercase text-start fw-9 mb-0 title-anim">
                                 WE CREATE
                                 <span class="text-stroke">Colours</span>
                                 <span class="interval">
                                    <i class="icon-arrow-top-right"></i>
                                 FOR CELEBRATION
                                 </span>
                              </h1>
                              <div class="banner__content-inner">
                                 <p>We create vibrant, high-quality colors that bring creativity,beauty and life to every product. Discover the world of Rainbow Colors, where every shade tells a story.</p>
                                 {{-- <div class="cta section__content-cta">
                                    <div class="single">
                                       <h5 class="fw-7">
                                          125+
                                       </h5>
                                       <p class="fw-5">Dealers</p>
                                    </div>
                                    <div class="single">
                                       <h5 class="fw-7">
                                          15+
                                       </h5>
                                       <p class="fw-5">Countries</p>
                                    </div>
                                 </div> --}}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- <img src={{ asset('assets/front/images/rainbow/main-bannner.jpg') }} alt="Image" class="banner-one-thumb d-none d-sm-block g-ban-one"> --}}
                  <img src={{ asset('assets/front/images/star.png') }} alt="Image" class="star">
                  <div class="banner-left-text banner-social-text d-none d-md-flex">
                     <a href="mailto:info@xpovio.com">mail : info.rainbowcolorss@gmail.com</a>
                     <a href="tel:99-2158-003-6980">Call : +99 777 888 4447</a>
                  </div>
                  <div class="banner-right-text banner-social-text d-none d-md-flex">
                     <a href="https://www.instagram.com/" target="_blank">
                        instagram
                     </a>
                     <a href="https://www.pinterest.com/" target="_blank">
                        Linkedin
                     </a>
                     <a href="https://www.facebook.com/" target="_blank">
                        facebook
                     </a>
                  </div>
                  {{-- <a class="video-frame video-btn" href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank">
                     <img src={{ asset('assets/front/images/video-frame.png') }} alt="Image">
                     <i class="fa-sharp fa-solid fa-play"></i>
                  </a> --}}
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / banner end ==== -->
               <!-- ==== agency start ==== -->
               <section class="section agency">
                  <div class="container">
                     <div class="row gaper align-items-center">
                        <div class="col-12 col-lg-6">
                           <div class="agency__thumb">
                              <img src={{ asset('assets/front/images/agency/thumb-one.png') }} alt="Image" class="thumb-one fade-left">
                              <img src={{ asset('assets/front/images/agency/thumb-two.png') }} alt="Image" class="thumb-two fade-right">
                           </div>
                        </div>
                        <div class="col-12 col-lg-6">
                           <div class="agency__content section__content">
                              <span class="sub-title">
                                 WELCOME
                                 <i class="fa-solid fa-arrow-right"></i>
                              </span>
                              <h2 class="title title-anim">
                                 We are digital creative
                                 agency in London
                              </h2>
                              <div class="paragraph">
                                 <p>Bring to the table win-win survival strategies to ensure proactive domination. At
                                    the end of the day, going forward, a new normal that has evolved from generation on
                                    the runway heading towards a streamlined cloud solution going forward porttitor
                                    dictum sapien.</p>
                              </div>
                              <div class="skill-wrap">
                                 <div class="skill-bar-single">
                                    <div class="skill-bar-title">
                                       <p class="primary-text">Website design</p>
                                    </div>
                                    <div class="skill-bar-wrapper" data-percent="75%">
                                       <div class="skill-bar">
                                          <div class="skill-bar-percent">
                                             <span class="percent-value"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="skill-bar-single">
                                    <div class="skill-bar-title">
                                       <p class="primary-text">Digital Marketing</p>
                                    </div>
                                    <div class="skill-bar-wrapper" data-percent="90%">
                                       <div class="skill-bar">
                                          <div class="skill-bar-percent">
                                             <span class="percent-value"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="section__content-cta">
                                 <a href="about-us.php" class="btn btn--primary">Know More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <img src={{ asset('assets/front/images/star.png') }} alt="Image" class="star">
                  <img src={{ asset('assets/front/images/agency/dot-large.png') }} alt="Image" class="dot-large">
               </section>
               <!-- ==== / agency end ==== -->
               <!-- ==== portfolio start ==== -->
               <section class="section portfolio pb-0 fade-wrapper position-relative">
                  <div class="portfolio__text-slider">
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.php">
                              digital portfolio
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.php">
                              digital portfolio
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.php">
                              digital portfolio
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.php">
                              digital portfolio
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.php">
                              digital portfolio
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.php">
                              digital portfolio
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="portfolio__text-slider-single">
                        <h2 class="h1">
                           <a href="portfolio.php">
                              digital portfolio
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row gaper">
                        <div class="col-12 col-sm-6 col-xl-3">
                           <div class="portfolio__single portfolio__single-active topy-tilt fade-top">
                              <a href="portfolio.php">
                                 <img src={{ asset('assets/front/images/portfolio/one.png') }} alt="Image">
                              </a>
                              <div class="portfolio__single-content">
                                 <a href="portfolio.php">
                                    <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                 </a>
                                 <h4>
                                    <a href="portfolio.php">Digital Marketing</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="portfolio.php">
                                 <img src={{ asset('assets/front/images/portfolio/two.png') }} alt="Image">
                              </a>
                              <div class="portfolio__single-content">
                                 <a href="portfolio.php">
                                    <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                 </a>
                                 <h4>
                                    <a href="portfolio.php">Digital Marketing</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="portfolio.php">
                                 <img src={{ asset('assets/front/images/portfolio/three.png') }} alt="Image">
                              </a>
                              <div class="portfolio__single-content">
                                 <a href="portfolio.php">
                                    <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                 </a>
                                 <h4>
                                    <a href="portfolio.php">Digital Marketing</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="portfolio.php">
                                 <img src={{ asset('assets/front/images/portfolio/four.png') }} alt="Image">
                              </a>
                              <div class="portfolio__single-content">
                                 <a href="portfolio.php">
                                    <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                 </a>
                                 <h4>
                                    <a href="portfolio.php">Digital Marketing</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="portfolio.php">
                                 <img src={{ asset('assets/front/images/portfolio/five.png') }} alt="Image">
                              </a>
                              <div class="portfolio__single-content">
                                 <a href="portfolio.php">
                                    <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                 </a>
                                 <h4>
                                    <a href="portfolio.php">Digital Marketing</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="portfolio.php">
                                 <img src={{ asset('assets/front/images/portfolio/six.png') }} alt="Image">
                              </a>
                              <div class="portfolio__single-content">
                                 <a href="portfolio.php">
                                    <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                 </a>
                                 <h4>
                                    <a href="portfolio.php">Digital Marketing</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                           <div class="portfolio__single-alt-wrapper fade-top">
                              <div class="portfolio__single-alt topy-tilt">
                                 <h4>
                                    <a href="portfolio.php">view all work</a>
                                 </h4>
                                 <a href="portfolio.php" class="arr">
                                    <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                 </a>
                                 <img src={{ asset('assets/front/images/portfolio/dot.png') }} alt="Image" class="dot-one">
                                 <img src={{ asset('assets/front/images/portfolio/dot.png') }} alt="Image" class="dot-two">
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                           <div class="portfolio__single topy-tilt fade-top">
                              <a href="portfolio.php">
                                 <img src={{ asset('assets/front/images/portfolio/seven.png') }} alt="Image">
                              </a>
                              <div class="portfolio__single-content">
                                 <a href="portfolio.php">
                                    <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                 </a>
                                 <h4>
                                    <a href="portfolio.php">Digital Marketing</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / portfolio end ==== -->
               <!-- ==== offer start ==== -->
               <section class="section offer fade-wrapper light">
                  <div class="container">
                     <div class="row gaper">
                        <div class="col-12 col-lg-5">
                           <div class="offer__content section__content">
                              <span class="sub-title">
                                 WHAT WE OFFER
                                 <i class="fa-solid fa-arrow-right"></i>
                              </span>
                              <h2 class="title title-anim">
                                 Giving Your Business Some Great Ideas
                              </h2>
                              <div class="paragraph">
                                 <p>Bring to the table win-win survival strategies to ensure proactive domination. At
                                    the end of the day, going forward, a new normal that has evolved from generation on
                                    the runway heading towards a streamlined cloud solution going forward porttitor
                                    dictum sapien.</p>
                              </div>
                              <div class="section__content-cta">
                                 <a href="our-services.php" class="btn btn--secondary">view all services</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-lg-7 col-xl-6 offset-xl-1">
                           <div class="offer__cta">
                              <div class="offer__cta-single fade-top">
                                 <span class="sub-title">
                                    01
                                    <i class="fa-solid fa-arrow-right"></i>
                                 </span>
                                 <h2>
                                    <a href="service-single.php">
                                       uI / uX experience
                                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                    </a>
                                 </h2>
                                 <div class="offer-thumb-hover d-none d-md-block"
                                    data-background={{ asset('assets/front/images/offer/blog-thumb.png') }}></div>
                              </div>
                              <div class="offer__cta-single fade-top">
                                 <span class="sub-title">
                                    02
                                    <i class="fa-solid fa-arrow-right"></i>
                                 </span>
                                 <h2>
                                    <a href="service-single.php">
                                       web development
                                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                    </a>
                                 </h2>
                                 <div class="offer-thumb-hover d-none d-md-block"
                                    data-background={{ asset('assets/front/images/offer/two.png') }}></div>
                              </div>
                              <div class="offer__cta-single fade-top">
                                 <span class="sub-title">
                                    03
                                    <i class="fa-solid fa-arrow-right"></i>
                                 </span>
                                 <h2>
                                    <a href="service-single.php">
                                       digital marketing
                                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                    </a>
                                 </h2>
                                 <div class="offer-thumb-hover d-none d-md-block"
                                    data-background={{ asset('assets/front/images/offer/three.png') }}></div>
                              </div>
                              <div class="offer__cta-single fade-top">
                                 <span class="sub-title">
                                    04
                                    <i class="fa-solid fa-arrow-right"></i>
                                 </span>
                                 <h2>
                                    <a href="service-single.php">
                                       product design
                                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                                    </a>
                                 </h2>
                                 <div class="offer-thumb-hover d-none d-md-block"
                                    data-background={{ asset('assets/front/images/offer/blog-thumb.png') }}></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <img src={{ asset('assets/front/images/offer/star.png') }} alt="Image" class="star">
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / offer end ==== -->
               <!-- ==== testimonial start ==== -->
               <section class="section testimonial pt-0 position-relative">
                  <div class="testimonial__text-slider">
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.php">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.php">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.php">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.php">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.php">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.php">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="testimonial__text-slider-single">
                        <h2 class="h1">
                           <a href="client-feedback.php">
                              client's testimonial
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                  </div>
                  <div class="container position-relative">
                     <div class="row">
                        <div class="col-12 col-xxl-10">
                           <div class="testimonial-s__slider">
                              <div class="testimonial-s__slider-single">
                                 <div class="row gaper align-items-center">
                                    <div class="col-12 col-lg-4 col-xxl-4">
                                       <div class="thumb">
                                          <img src={{ asset('assets/front/images/testimonial/s-thumb.png') }} alt="Image">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="44" height="322"
                                             viewBox="0 0 44 322" fill="none" class="d-none d-lg-block">
                                             <path d="M43 -0.000976562V151.999L2 192.999H43V321.999" stroke="#414141" />
                                          </svg>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-7 offset-lg-1 col-xxl-7 offset-xxl-1">
                                       <div class="testimonial-s__content">
                                          <div class="quote">
                                             <i class="fa-solid fa-quote-right"></i>
                                          </div>
                                          <div class="content">
                                             <h4>posuere luctus orci. Donec vitae mattis quam, vitae tempor arcu. Aenean
                                                non odio porttitor, convallis erat sit amet, facilisis velit. Nulla
                                                ornare convallis malesuada. Phasellus molestie, ipsum ac fringilla.</h4>
                                          </div>
                                          <div class="content-cta">
                                             <h5>Daniel Smith</h5>
                                             <p>Senior engineer</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="testimonial-s__slider-single">
                                 <div class="row gaper align-items-center">
                                    <div class="col-12 col-lg-4 col-xxl-4">
                                       <div class="thumb">
                                          <img src={{ asset('assets/front/images/testimonial/s-thumb-two.png') }} alt="Image">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="44" height="322"
                                             viewBox="0 0 44 322" fill="none" class="d-none d-lg-block">
                                             <path d="M43 -0.000976562V151.999L2 192.999H43V321.999" stroke="#414141" />
                                          </svg>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-7 offset-lg-1 col-xxl-7 offset-xxl-1">
                                       <div class="testimonial-s__content">
                                          <div class="quote">
                                             <i class="fa-solid fa-quote-right"></i>
                                          </div>
                                          <div class="content">
                                             <h4>posuere luctus orci. Donec vitae mattis quam, vitae tempor arcu. Aenean
                                                non odio porttitor, convallis erat sit amet, facilisis velit. Nulla
                                                ornare convallis malesuada. Phasellus molestie, ipsum ac fringilla.</h4>
                                          </div>
                                          <div class="content-cta">
                                             <h5>Daniel Smith</h5>
                                             <p>Senior engineer</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="testimonial-s__slider-single">
                                 <div class="row gaper align-items-center">
                                    <div class="col-12 col-lg-4 col-xxl-4">
                                       <div class="thumb">
                                          <img src={{ asset('assets/front/images/testimonial/s-thumb-three.png') }} alt="Image">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="44" height="322"
                                             viewBox="0 0 44 322" fill="none" class="d-none d-lg-block">
                                             <path d="M43 -0.000976562V151.999L2 192.999H43V321.999" stroke="#414141" />
                                          </svg>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-7 offset-lg-1 col-xxl-7 offset-xxl-1">
                                       <div class="testimonial-s__content">
                                          <div class="quote">
                                             <i class="fa-solid fa-quote-right"></i>
                                          </div>
                                          <div class="content">
                                             <h4>posuere luctus orci. Donec vitae mattis quam, vitae tempor arcu. Aenean
                                                non odio porttitor, convallis erat sit amet, facilisis velit. Nulla
                                                ornare convallis malesuada. Phasellus molestie, ipsum ac fringilla.</h4>
                                          </div>
                                          <div class="content-cta">
                                             <h5>Daniel Smith</h5>
                                             <p>Senior engineer</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slide-group justify-content-start">
                        <a href="javascript:void(0)" aria-label="previous item" class="slide-btn prev-testimonial-three">
                           <i class="fa-light fa-angle-left"></i>
                        </a>
                        <a href="javascript:void(0)" aria-label="next item" class="slide-btn next-testimonial-three">
                           <i class="fa-light fa-angle-right"></i>
                        </a>
                     </div>
                  </div>
                  <div class="other-section">
                     <img class="other-section-image" src={{ asset('assets/front/images/testimonial/s-thumb.png') }}
                        alt="Next Slide Image">
                  </div>
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / testimonial end ==== -->
               <!-- ==== blog start ==== -->
               <section class="section blog fade-wrapper">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                           <div class="section__header text-center">
                              <span class="sub-title">
                                 news & Blog
                                 <i class="fa-solid fa-arrow-right"></i>
                              </span>
                              <h2 class="title title-anim">what's new in blog</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row gaper">
                        <div class="col-12 col-md-6">
                           <div class="blog__single fade-top">
                              <div class="blog__single-thumb topy-tilt">
                                 <a href="blog-single.php">
                                    <img src={{ asset('assets/front/images/blog/one.png') }} alt="Image">
                                 </a>
                              </div>
                              <div class="blog__single-content">
                                 <h4>
                                    <a href="blog-single.php">A Simple Social Media Marketing Checklist</a>
                                 </h4>
                                 <div class="blog__single-meta">
                                    <a href="blog.php" class="sub-title">
                                       creative
                                       <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <p>MARCH 23, 2023</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="blog__single fade-top">
                              <div class="blog__single-thumb topy-tilt">
                                 <a href="blog-single.php">
                                    <img src={{ asset('assets/front/images/blog/two.png') }} alt="Image">
                                 </a>
                              </div>
                              <div class="blog__single-content">
                                 <h4>
                                    <a href="blog-single.php">Transforming Challenges into Opportunities</a>
                                 </h4>
                                 <div class="blog__single-meta">
                                    <a href="blog.php" class="sub-title">
                                       creative
                                       <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <p>MARCH 23, 2023</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / blog end ==== -->
               <!-- ==== sponsor start ==== -->
               <div class="sponsor section pb-0">
                  <div class="container-fluid">
                     <div class="row justify-content-center">
                        <div class="col-12">
                           <div class="sponsor__slider ">
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/one.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/two.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/three.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/four.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/five.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/six.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/one.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/two.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/three.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/four.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/five.png') }} alt="Image">
                              </div>
                              <div class="sponsor__slider-item">
                                 <img src={{ asset('assets/front/images/sponsor/six.png') }} alt="Image">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </div>
               <!-- ==== / sponsor end ==== -->
               <!-- ==== next page start ==== -->
               <section class="section next-page">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                           <div class="section__header text-center">
                              <a href="about-us.php" class="sub-title mb-0">
                                 Next Page
                                 <i class="fa-solid fa-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="next__text-slider">
                     <div class="next__text-slider-single">
                        <h2 class="h1">
                           <a href="about-us.php">
                              About Us
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="next__text-slider-single">
                        <h2 class="h1">
                           <a href="about-us.php">
                              About Us
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="next__text-slider-single">
                        <h2 class="h1">
                           <a href="about-us.php">
                              About Us
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="next__text-slider-single">
                        <h2 class="h1">
                           <a href="about-us.php">
                              About Us
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="next__text-slider-single">
                        <h2 class="h1">
                           <a href="about-us.php">
                              About Us
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="next__text-slider-single">
                        <h2 class="h1">
                           <a href="about-us.php">
                              About Us
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                     <div class="next__text-slider-single">
                        <h2 class="h1">
                           <a href="about-us.php">
                              About Us
                              <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
                           </a>
                        </h2>
                     </div>
                  </div>
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / next page end ==== -->
            </main>
            <!-- ==== / main end ==== -->
            <!-- ==== footer start ==== -->
            <footer class="footer section pb-0" data-background={{ asset('assets/front/images/footer/footer-bg.png') }}>
               <div class="container">
                  <div class="row gaper">
                     <div class="col-12 col-lg-5 col-xl-6">
                        <div class="footer__single">
                           <a href="index.php" class="logo">
                              <img src={{ asset('assets/front/images/logo.png') }} alt="Image">
                           </a>
                           <div class="footer__single-meta">
                              <a href="https://www.google.com/maps/d/viewer?mid=1UZ57Drfs3SGrTgh6mrYjQktu6uY&hl=en_US&ll=18.672105000000013%2C105.68673800000003&z=17"
                                 target="_blank">
                                 <i class="fa-sharp fa-solid fa-location-dot"></i>
                                 901 N Pitt Str., Suite 170
                                 Alexandria, USA
                              </a>
                              <a href="tel:406-555-0120">
                                 <i class="fa-sharp fa-solid fa-phone-volume"></i>
                                 (406) 555-0120
                              </a>
                              <a href="mailto:info@xpovio.com">
                                 <i class="fa-sharp fa-solid fa-envelope"></i>
                                 info@xpovio.com
                              </a>
                           </div>
                           <div class="footer__cta text-start">
                              <a href="contact-us.php" class="btn btn--secondary">book a call now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-lg-2 col-xl-2">
                        <div class="footer__single">
                           <div class="footer__single-intro">
                              <h5>discover</h5>
                           </div>
                           <div class="footer__single-content">
                              <ul>
                                 <li>
                                    <a href="about-us.php">About Us</a>
                                 </li>
                                 <li>
                                    <a href="client-feedback.php">Award Winning</a>
                                 </li>
                                 <li>
                                    <a href="blog.php">News & Blog</a>
                                 </li>
                                 <li>
                                    <a href="contact-us.php">careers</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-lg-5 col-xl-4">
                        <div class="footer__single">
                           <div class="footer__single-intro">
                              <h5>Subscribe our newsletter</h5>
                           </div>
                           <div class="footer__single-content">
                              <p>Welcome to our digital agency We specialize in helping business most like yours succeed
                                 online.</p>
                              <div class="footer__single-form">
                                 <form action="#" method="post">
                                    <div class="input-email">
                                       <input type="email" name="subscribe-news" id="subscribeNews"
                                          placeholder="Enter Your Email" required>
                                       <button type="submit" class="subscribe">
                                          <i class="fa-sharp fa-solid fa-paper-plane"></i>
                                       </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="footer__copyright">
                           <div class="row align-items-center gaper">
                              <div class="col-12 col-lg-8">
                                 <div class="footer__copyright-text text-center text-lg-start">
                                    <p>
                                       Copyright &copy;
                                       <span id="copyYear"></span>
                                       Xpovio by
                                       <a href="https://themeforest.net/user/pixel-plus/"
                                          target="_blank">pixel-plus</a>
                                       . All Rights Reserved
                                    </p>
                                 </div>
                              </div>
                              <div class="col-12 col-lg-4">
                                 <div class="social justify-content-center justify-content-lg-end">
                                    <a href="https://www.facebook.com/" target="_blank">
                                       <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com/" target="_blank">
                                       <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                       <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                       <i class="fa-brands fa-instagram"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
            <!-- ==== / footer end ==== -->
         </div>
      </div>
      <div class="line">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </div>
      <!-- video modal -->
      <div class="vid-m">
         <div class="vid-c">
            <a href="javascript:void(0)" aria-label="close video popup" class="close-v">
               <i class="fa-light fa-xmark-large"></i>
            </a>
            <video autoplay="autoplay" loop muted controls>
               <source src={{ asset('assets/front/images/popup-video.mp4') }} type="video/mp4">
            </video>
            <h5>Hello</h5>
         </div>
      </div>
   </div>

@endsection