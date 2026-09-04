@extends('frontend.layouts.app')

@section('title', 'About Us')

@section('content')
<main>
    <section class="banner-two" style="background: linear-gradient(90deg, rgba(0,0,0,.86), rgba(0,0,0,.3)), url('{{ asset('frontend/assets/images/banner/inner-banner.jpg') }}') center/cover; min-height: 420px;"><div class="container"><div class="banner-two__content" style="padding: 125px 0;"><h1>Our <span class="primary-color">Journey</span></h1><p>From minerals to moments of joy.</p></div></div></section>
    <section class="product-area pt-130 pb-130" id="journey"><div class="container"><div class="section-header mb-65"><span class="title-icon"></span><h2>Our journey</h2></div>
        @foreach ([['2007 — Rooted in Trust', 'The Foundation of Varun Minerals', 'Founded by Pareshbhai Patel in Chhota Udepur, Gujarat, Varun Minerals began as a dedicated dolomite powder manufacturer trusted by major paint and putty brands.'], ['2015 — A New Vision', 'Manav Patel Brings Innovation and Purpose', 'Manav Patel joined the business with a clear mission: build a path that celebrates tradition, colour and culture while staying rooted in quality, sustainability and community impact.'], ['2018–19 — Birth of Rainbow', 'A Journey from Tradition to Colour', 'Colour Rangoli and Holi Gulal experiments became the vibrant Rainbow brand in 2019. A 300 sq. ft. rented space grew through premium quality, skin-safe ingredients and eco-friendly production.'], ['2020 — Scaling New Heights', 'Rainbow’s Growth Across India and Beyond', 'Annual colour sales crossed 3,000 tons in 2020 and 5,000 tons in 2021. Today Rainbow serves every Indian state and international markets from an automated facility with in-house quality labs.'], ['2026 — Introducing Unit – 2', 'A Dedicated Premium Packaging Unit', 'Unit – 2 in Vadodara focuses on premium retail and smaller-size packaging, bringing superior presentation and an enhanced customer experience.']] as [$heading, $subheading, $body])
            <article class="sub-bg p-5 mb-25"><h3 class="primary-color">{{ $heading }}</h3><h4 class="mt-15">{{ $subheading }}</h4><p class="mt-15">{{ $body }}</p></article>
        @endforeach
    </div></section>
    <section class="category-area pb-130" id="values"><div class="container"><div class="section-header text-center mb-65"><span class="title-icon"></span><h2>Our vision & mission</h2></div><div class="row g-4"><div class="col-lg-6"><div class="sub-bg p-5 h-100"><h3 class="primary-color">Our Vision</h3><p class="mt-20">To bring vibrant, quality-driven colours into celebrations while continuously innovating for a better future.</p></div></div><div class="col-lg-6"><div class="sub-bg p-5 h-100"><h3 class="primary-color">Our Mission</h3><p class="mt-20">To create trusted colour products through quality, innovation, responsible manufacturing and a deep understanding of our customers.</p></div></div></div></div></section>
</main>
@endsection
