@extends('frontend.master')
@section('title')
    Gallery
@endsection
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/css/magnific-popup.css') }}">
    <div class="content-wrapper">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-modern" style="background-image: url({{ asset($banner->image) }});">
            <h1>Gallery</h1>
            <div class="breadcrumb-nav-modern">
                <a href="{{ route('front.page') }}">Home</a>
                <span>/</span>
                <span>Gallery</span>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Gallery Section Start -->
        <section class="section-modern">
            <div class="container">
                <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
                    <span class="section-subtitle-modern">Our Moments</span>
                    <h2 class="section-title-modern">Explore Our Gallery</h2>
                </div>

                <div class="row g-4">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="{{ $loop->index * 50 }}">
                            <div class="gallery-item-modern">
                                <img src="{{ asset($gallery->image) }}" class="gallery-img-modern" alt="Gallery Image">
                                <div class="gallery-overlay-modern">
                                    <a class="image-popup gallery-icon-modern" href="{{ asset($gallery->image) }}">
                                        <i class="ri-search-line"></i>
                                        <i class="sr-only">{{ $gallery->image_title ?? 'Image' }}</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Gallery Section End -->
    </div>

    <script src="{{ asset('frontend/gallery-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/gallery-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.image-popup').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300
                }
            });
        });
    </script>
@endsection
