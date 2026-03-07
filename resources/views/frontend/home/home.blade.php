@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- Hero Section Start -->
    <section class="hero-wrap style2" style="padding: 0px;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

            <div class="carousel-inner mt-5">
                @foreach ($banners as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="img-gradient">
                            {{--                    <img src="{{asset($banner->image1)}}" class="d-block w-100" style="height: 600px;object-fit: cover;" alt="..."> --}}
                            <img src="{{ asset($banner->image1) }}" class="d-block w-100 banner-img" alt="...">
                        </div>


                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <!-- Hero Section End -->


    <!-- About Section Start -->
    @include('frontend.about.about')
    <!-- About Section End -->


    <!-- Service Section Start -->


    <!-- Service Section End -->





    <!-- Pricing Section Start -->

    {{-- @include('frontend.package.package') --}}

    <!-- Pricing Section End -->





    <!-- Testimonial Section Start -->
    @include('frontend.testimonial.testimonial')
    <!-- Testimonial Section End -->


    <!-- Blog Section Start -->
    @include('frontend.blogs.blogs')
    <!-- Blog Section End -->


    <!-- Video Gallery will be rendered via the included blogs partial -->



    <!-- Team Section Start -->
    @include('frontend.team.team')
    <!-- Team Section End -->


    {{-- patner section start --}}
    <div class="row">
        <div class="col-md-12 ">
            <div class="section-title style1 text-center mb-40">

                <h2 style="color:#0cc0df">Our Corporate Partners</h2>
                <hr>
                <section class="section-modern section-modern-light" style="padding: 60px 0;">
                    <div class="container">
                        <div class="section-header-modern text-center" data-aos="fade-up" data-aos-duration="1200">
                            {{-- <span class="section-subtitle-modern">Trusted Partners</span>
                            <h2 class="section-title-modern">Our Trusted Partners</h2> --}}
                        </div>

                        <div class="row g-4 justify-content-center align-items-center">
                            @foreach ($partner as $pt)
                                <div class="col-lg-2 col-md-3 col-4 text-center" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-delay="{{ $loop->index * 50 }}">
                                    <div style="padding: 1.5rem; background: white; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); transition: all 0.3s ease;"
                                        onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(54, 209, 220, 0.15)';"
                                        onmouseout="this.style.transform=''; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)';">
                                        <img src="{{ asset('partner/' . $pt->image) }}" alt="Partner"
                                            style="width: 100%; height: auto; object-fit: contain;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    {{-- patner section end --}}



    {{-- CTA Section --}}
    <section class="cta-modern">
        <div class="container">
            <div class="cta-content-modern" data-aos="fade-up" data-aos-duration="1200">
                <h2>Ready to Experience Quality ?</h2>
                <p>Get in touch with our expert team today and take the first step towards better health</p>
                <a href="{{ route('contacts') }}" class="btn-modern-white">Contacts Us</a>
            </div>
        </div>
    </section>
@endsection
