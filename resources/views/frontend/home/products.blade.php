@extends('frontend.layouts.app')

@section('title', 'Products')

@section('content')
<main>
    <section class="banner-two" style="background: linear-gradient(90deg, rgba(0,0,0,.86), rgba(0,0,0,.3)), url('{{ asset('frontend/assets/images/banner/products-banner.svg') }}') center/cover; min-height: 420px;"><div class="container"><div class="banner-two__content" style="padding: 125px 0;"><h1>Our <span class="primary-color">Products</span></h1><p>Vibrant colour. Thoughtful packaging. Ready for celebration.</p></div></div></section>
    <section class="product-area pt-130 pb-100"><div class="container"><div class="section-header text-center mb-65"><span class="title-icon"></span><h2>Choose your format</h2></div><div class="row g-4">
        @foreach ([['Pouch', 'Flexible retail packs for everyday Rangoli and Holi moments.', '100 gm · 250 gm · 500 gm · 1 kg · 2 kg', 'product-image1.png'], ['Container', 'Practical, sturdy formats for easy storage and repeat use.', '250 gm · 500 gm · 1 kg', 'product-image3.png'], ['Box', 'Premium presentation for gifting, retail shelves and celebrations.', '250 gm · 500 gm · 1 kg · 2 kg', 'product-image5.png']] as [$name, $description, $sizes, $image])
            <div class="col-lg-4"><div class="sub-bg text-center p-4 h-100"><img src="{{ asset('frontend/assets/images/product/'.$image) }}" alt="{{ $name }} colour packaging" style="height: 230px; width: 100%; object-fit: contain"><h3 class="mt-20">{{ $name }}</h3><p class="mt-15">{{ $description }}</p><small class="primary-color">{{ $sizes }}</small></div></div>
        @endforeach
    </div></div></section>
    <section class="category-area pb-130" id="colours"><div class="container"><div class="section-header text-center mb-65"><span class="title-icon"></span><h2>Colour options</h2><p class="mt-15">Choose a shade to see its story.</p></div><div class="row g-3 justify-content-center">
        @foreach ([['Red', '#e63946', 'Love & Energy'], ['Sky Blue', '#62b6e8', 'Peace & Trust'], ['Blue', '#3d8bfd', 'Depth & Trust'], ['Purple', '#8b5cf6', 'Creativity & Magic'], ['Pink', '#ef6f9f', 'Friendship & Kindness'], ['Green', '#3aaa66', 'Growth & Harmony'], ['Orange', '#fa4f09', 'Courage & Celebration'], ['Yellow', '#f6c945', 'Happiness & Positivity'], ['Parrot', '#9acb34', 'Fresh beginnings'], ['White', '#f5f5f5', 'Peace & purity']] as [$name, $hex, $meaning])
            <div class="col-6 col-md-4 col-lg-2"><button class="sub-bg w-100 text-center p-3 colour-option" data-colour="{{ $name }}" data-meaning="{{ $meaning }}" style="border-bottom: 6px solid {{ $hex }}"><strong>{{ $name }}</strong></button></div>
        @endforeach
    </div><div class="sub-bg text-center p-5 mt-40" id="colour-detail"><h3>Red</h3><p class="mt-15">Love & Energy</p></div></div></section>
</main>
@push('scripts')<script>document.querySelectorAll('.colour-option').forEach(function (button) { button.addEventListener('click', function () { document.querySelector('#colour-detail h3').textContent = button.dataset.colour; document.querySelector('#colour-detail p').textContent = button.dataset.meaning; }); });</script>@endpush
@endsection
