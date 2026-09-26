@extends('front.layouts.head')

@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">

        {{-- Blog Detail Hero --}}
        <section class="rainbow-blog-detail-hero">

            <div class="rainbow-blog-detail-hero__glow glow-one"></div>
            <div class="rainbow-blog-detail-hero__glow glow-two"></div>

            <div class="rainbow-blog-detail-hero__dots">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="container">

                <div class="rainbow-blog-detail-hero__inner">

                    <div class="rainbow-blog-detail-hero__breadcrumb">

                        <a href="{{ url('/') }}">
                            Home
                        </a>

                        <i class="fa-solid fa-chevron-right"></i>

                        <a href="{{ route('blog.index') }}">
                            Blog
                        </a>

                        <i class="fa-solid fa-chevron-right"></i>

                        <span>
                            Article
                        </span>

                    </div>


                    <div class="rainbow-blog-detail-hero__meta">

                        @if ($blog->category)

                            <span>
                                {{ $blog->category }}
                            </span>

                        @endif

                        @if ($blog->published_at)

                            <i></i>

                            <time>
                                {{ $blog->published_at->format('d M Y') }}
                            </time>

                        @endif

                    </div>


                    <h1>
                        {{ $blog->title }}
                    </h1>


                    @if ($blog->excerpt)

                        <p>
                            {{ $blog->excerpt }}
                        </p>

                    @endif

                </div>

            </div>

        </section>


        {{-- Blog Article --}}
        <section class="rainbow-blog-detail">

            <div class="container">

                <div class="rainbow-blog-detail__layout">

                    <main class="rainbow-blog-detail__main">

                        @if ($blog->featured_image)

                            <div class="rainbow-blog-detail__featured">

                                <img
                                    src="{{ asset('storage/' . $blog->featured_image) }}"
                                    alt="{{ $blog->title }}"
                                >

                            </div>

                        @endif


                        <div class="rainbow-blog-detail__info">

                            @if ($blog->author)

                                <div class="rainbow-blog-detail__author">

                                    <span class="info-icon">
                                        <i class="fa-solid fa-user"></i>
                                    </span>

                                    <div>
                                        <small>WRITTEN BY</small>
                                        <strong>{{ $blog->author }}</strong>
                                    </div>

                                </div>

                            @endif


                            @if ($blog->published_at)

                                <div class="rainbow-blog-detail__date">

                                    <span class="info-icon">
                                        <i class="fa-regular fa-calendar"></i>
                                    </span>

                                    <div>
                                        <small>PUBLISHED</small>
                                        <strong>
                                            {{ $blog->published_at->format('d M Y') }}
                                        </strong>
                                    </div>

                                </div>

                            @endif

                        </div>


                        <article class="rainbow-blog-detail__content">

                            {!! $blog->content !!}

                        </article>


                        <div class="rainbow-blog-detail__back">

                            <a href="{{ route('blog.index') }}">

                                <i class="fa-solid fa-arrow-left"></i>

                                BACK TO ALL STORIES

                            </a>

                        </div>

                    </main>


                    {{-- Sidebar --}}
                    <aside class="rainbow-blog-detail__sidebar">

                        <div class="rainbow-blog-detail__side-card">

                            <span>
                                RAINBOW JOURNAL
                            </span>

                            <h3>
                                MORE COLOURFUL STORIES.
                            </h3>

                            <p>
                                Explore more stories, colourful ideas
                                and inspiration from Rainbow Colors.
                            </p>

                            <a href="{{ route('blog.index') }}">

                                VIEW ALL STORIES

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>


                        @if ($latestBlogs->count())

                            <div class="rainbow-blog-latest">

                                <div class="rainbow-blog-latest__heading">

                                    <span>
                                        LATEST STORIES
                                    </span>

                                </div>


                                @foreach ($latestBlogs as $latest)

                                    <a
                                        href="{{ route('blog.show', $latest->slug) }}"
                                        class="rainbow-blog-latest__item"
                                    >

                                        <div class="rainbow-blog-latest__image">

                                            @if ($latest->featured_image)

                                                <img
                                                    src="{{ asset('storage/' . $latest->featured_image) }}"
                                                    alt="{{ $latest->title }}"
                                                    loading="lazy"
                                                >

                                            @else

                                                <i class="fa-solid fa-palette"></i>

                                            @endif

                                        </div>


                                        <div class="rainbow-blog-latest__text">

                                            <h4>
                                                {{ $latest->title }}
                                            </h4>

                                            <small>
                                                {{ $latest->published_at->format('d M Y') }}
                                            </small>

                                        </div>

                                    </a>

                                @endforeach

                            </div>

                        @endif

                    </aside>

                </div>

            </div>

        </section>

        @include('front.layouts.footer')

    </div>
</div>
@endsection