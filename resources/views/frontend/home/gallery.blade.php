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
                </nav>
            </div>
        </section>

        <section class="gallery-page-area">
            <div class="container">
                <div class="gallery-page-grid">
                    <a href="https://rainbowcolors.in/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-22-at-12.11.37_7762155a.jpg" class="gallery-page-item" title="Rainbow Colors gallery image 1">
                        <img src="https://rainbowcolors.in/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-22-at-12.11.37_7762155a.jpg" alt="Rainbow Colors gallery image 1" loading="lazy">
                    </a>
                    <a href="https://rainbowcolors.in/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-22-at-12.11.37_97d8ae77.jpg" class="gallery-page-item" title="Rainbow Colors gallery image 2">
                        <img src="https://rainbowcolors.in/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-22-at-12.11.37_97d8ae77.jpg" alt="Rainbow Colors gallery image 2" loading="lazy">
                    </a>
                    <a href="https://rainbowcolors.in/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-22-at-12.11.38_9409ca73.jpg" class="gallery-page-item" title="Rainbow Colors gallery image 3">
                        <img src="https://rainbowcolors.in/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-22-at-12.11.38_9409ca73.jpg" alt="Rainbow Colors gallery image 3" loading="lazy">
                    </a>
                    <a href="https://rainbowcolors.in/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-22-at-12.11.31_01a01e67.jpg" class="gallery-page-item" title="Rainbow Colors gallery image 4">
                        <img src="https://rainbowcolors.in/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-22-at-12.11.31_01a01e67.jpg" alt="Rainbow Colors gallery image 4" loading="lazy">
                    </a>
                    <a href="https://rainbowcolors.in/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-01-at-19.26.26_86950a13.jpg" class="gallery-page-item" title="Rainbow Colors gallery image 5">
                        <img src="https://rainbowcolors.in/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-01-at-19.26.26_86950a13.jpg" alt="Rainbow Colors gallery image 5" loading="lazy">
                    </a>
                    <a href="https://rainbowcolors.in/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-01-at-19.20.31_938fb9fa.jpg" class="gallery-page-item" title="Rainbow Colors gallery image 6">
                        <img src="https://rainbowcolors.in/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-01-at-19.20.31_938fb9fa.jpg" alt="Rainbow Colors gallery image 6" loading="lazy">
                    </a>
                    <a href="https://rainbowcolors.in/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-01-at-19.20.31_0fb7c975.jpg" class="gallery-page-item" title="Rainbow Colors gallery image 7">
                        <img src="https://rainbowcolors.in/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-01-at-19.20.31_0fb7c975.jpg" alt="Rainbow Colors gallery image 7" loading="lazy">
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.gallery-page-item').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    titleSrc: function (item) {
                        return item.el.attr('title');
                    }
                },
                zoom: {
                    enabled: true,
                    duration: 300
                }
            });
        });
    </script>
@endpush
