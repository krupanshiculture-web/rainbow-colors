@extends('frontend.layouts.app')

@section('title', 'Gallery')

@section('content')


 <main>
        <!-- Page banner area start here -->
        <section class="page-banner bg-image pt-50 pb-130" data-background="assets/images/banner/inner-banner.jpg">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Gallery</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="{{ route('home') }}" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>Gallery</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->



 </main>

@endsection
