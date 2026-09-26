@extends('front.layouts.head')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Blog Hero -->
            <section class="rainbow-page-hero rainbow-blog-hero">

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
                            <span>Blog</span>
                        </div>

                        <div class="rainbow-page-hero__heading-wrap">
                            <h1>
                                IDEAS,
                                <span>COLOUR &amp; STORIES.</span>
                            </h1>
                        </div>

                    </div>

                </div>

            </section>


            <!-- Blog Listing -->
            <section class="rainbow-blog-listing">

                <div class="blog-listing__glow blog-listing__glow--yellow"></div>
                <div class="blog-listing__glow blog-listing__glow--pink"></div>

                <div class="container">

                    <div class="rainbow-products__heading">

                        <div>

                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                RAINBOW STORIES
                            </span>

                            <h2>
                                EXPLORE OUR
                                <span>LATEST BLOGS.</span>
                            </h2>

                        </div>

                        <p>
                            Discover colourful ideas, product stories,
                            industry insights and everything happening
                            around Rainbow Colors.
                        </p>

                    </div>


                    <!-- Blog Grid -->
                    <div class="rainbow-blog-grid">

                        @forelse ($blogs as $blog)
                            <article class="rainbow-blog-card">

                                <a href="{{ route('blog.show', $blog->slug) }}" class="rainbow-blog-card__image">

                                    @if ($blog->featured_image)
                                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                                            loading="lazy">
                                    @else
                                        <div class="rainbow-blog-card__placeholder">
                                            <i class="fa-solid fa-palette"></i>
                                        </div>
                                    @endif

                                    <span class="rainbow-blog-card__image-arrow">
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </span>

                                </a>


                                <div class="rainbow-blog-card__content">

                                    <div class="rainbow-blog-card__meta">

                                        @if ($blog->category)
                                            <span>
                                                {{ $blog->category }}
                                            </span>

                                            <i></i>
                                        @endif

                                        <time>
                                            {{ $blog->published_at->format('d M Y') }}
                                        </time>

                                    </div>


                                    <h3>

                                        <a href="{{ route('blog.show', $blog->slug) }}">
                                            {{ $blog->title }}
                                        </a>

                                    </h3>


                                    @if ($blog->excerpt)
                                        <p>
                                            {{ $blog->excerpt }}
                                        </p>
                                    @endif


                                    <a href="{{ route('blog.show', $blog->slug) }}" class="rainbow-blog-card__read">
                                        READ ARTICLE
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                </div>

                            </article>

                        @empty

                            <div class="rainbow-blog-empty">

                                <div class="rainbow-blog-empty__icon">
                                    <i class="fa-solid fa-palette"></i>
                                </div>

                                <h3>
                                    New Stories Are Coming.
                                </h3>

                                <p>
                                    We are preparing colourful stories and
                                    celebration ideas for you.
                                </p>

                            </div>
                        @endforelse

                    </div>

                </div>

            </section>


            <!-- Final CTA -->
            <section class="rainbow-blog-final">

                <div class="container">

                    <div class="blog-final">

                        <div>

                            <span class="rainbow-products__eyebrow">
                                <i class="fa-solid fa-sparkles"></i>
                                RAINBOW COLORS
                            </span>

                            <h2>
                                KEEP EXPLORING.
                                <span>KEEP CELEBRATING.</span>
                            </h2>

                        </div>

                        <a href="{{ url('/contact') }}" class="blog-final__button">
                            GET IN TOUCH
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </section>


            @include('front.layouts.footer')

        </div>
    </div>
@endsection
