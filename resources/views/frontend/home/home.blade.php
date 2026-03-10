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


    <!--Products Section Start -->
    @include('frontend.products.products')
    <!--Products Section End -->

    <!-- Service Section Start -->
    @include('frontend.services.services')
    <!-- Service Section End -->


    <section class="counter-section" aria-label="About / Counters"
        style="background-image: url('{{ $counter && $counter->bg_image ? asset($counter->bg_image) : asset('images/default-bg.jpg') }}')">
        <div class="counter-overlay"></div>

        <div class="container">
            <div class="counter-inner">
                <div class="counter-left">

                    <div class="description">
                        {{-- If description contains HTML from a WYSIWYG editor, render it as HTML (sanitize on save!) --}}
                        {!! $counter->description ?? 'Add your description here.' !!}
                    </div>
                </div>

                <div class="counter-right">
                    <div class="counters-grid">
                        <div class="counter-card">
                            <div class="counter-number" data-target="{{ $counter->doctors ?? 150 }}" data-suffix="+">0</div>
                            <div class="counter-label">Employees</div>
                        </div>

                        <div class="counter-card">
                            <div class="counter-number" data-target="{{ $counter->services ?? 18 }}" data-suffix="+">0</div>
                            <div class="counter-label">Projects Complete</div>
                        </div>

                        <div class="counter-card">
                            <div class="counter-number" data-target="{{ $counter->clients ?? 45 }}" data-suffix="+">0</div>
                            <div class="counter-label"> Nationwide Team</div>
                        </div>

                        <div class="counter-card">
                            <div class="counter-number" data-target="{{ $counter->awards ?? 7 }}" data-suffix="+">0</div>

                            <div class="counter-label">Years of Experience</div>
                        </div>

                        <!-- Establishment year big block (positioned lower-left over background) -->
                        <div class="establish-card">
                            <div class="establish-year">{{ $counter->establishment_year ?? '2010' }}</div>
                            <div class="establish-label">Establishment Year</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* Basic reset for this component only */
            .counter-section {
                position: relative;
                padding: 80px 0;
                background-size: cover;
                background-position: center;
                color: #fff;
            }

            .counter-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(90deg, rgba(8, 8, 8, 0.6) 0%, rgba(8, 8, 8, 0.45) 50%, rgba(8, 8, 8, 0.6) 100%);
                pointer-events: none;
            }

            .container {
                position: relative;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
                z-index: 2;
            }

            .counter-inner {
                display: flex;
                gap: 40px;
                align-items: flex-start;
            }

            /* Left content */
            .counter-left {
                flex: 1 1 50%;
                max-width: 55%;
            }

            .eyebrow {
                font-weight: 700;
                color: #fff;
                opacity: .95;
                margin-bottom: 18px;
                font-size: 20px;
            }

            .headline {
                font-size: 48px;
                line-height: 1.05;
                margin: 0 0 18px;
                font-weight: 800;
                letter-spacing: -0.02em;
            }

            .description {
                color: #ffffff !important;
                max-width: 560px;
                font-size: 16px;
                line-height: 1.7;
            }

            .description * {
                color: inherit !important;
            }

            /* Right counters */
            .counter-right {
                flex: 1 1 45%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .counters-grid {
                width: 100%;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 22px;
                position: relative;
            }

            .counter-card {
                background: rgba(0, 0, 0, 0.35);
                border-radius: 6px;
                padding: 30px 18px;
                text-align: center;
                backdrop-filter: blur(6px);
                box-shadow: 0 6px 18px rgba(0, 0, 0, 0.45);
            }

            .counter-number {
                font-size: 48px;
                font-weight: 800;
                line-height: 1;
                color: #fff;
            }

            .counter-label {
                margin-top: 6px;
                font-weight: 700;
                color: rgba(255, 255, 255, 0.95);
            }

            .establish-card {
                grid-column: 1 / span 1;
                grid-row: 3;
                align-self: end;
                justify-self: start;
                background: rgba(0, 0, 0, 0.45);
                padding: 34px 38px;
                border-radius: 6px;
                text-align: center;
                width: 220px;
                transform: translateY(24px);
            }

            .establish-year {
                font-size: 56px;
                font-weight: 900;
                color: #fff;
            }

            .establish-label {
                margin-top: 6px;
                font-weight: 700;
                color: rgba(255, 255, 255, 0.95);
            }

            /* Make the establishment card span visually below the grid on larger screens */
            @media (min-width: 900px) {
                .counters-grid {
                    grid-template-columns: repeat(3, 1fr);
                    grid-auto-rows: 1fr;
                }

                .counter-card {
                    padding: 28px;
                }

                .establish-card {
                    grid-column: 1 / 2;
                    grid-row: 2 / 3;
                    width: 260px;
                    transform: translateY(36px);
                }

                /* adjust layout so the establishment card sits bottom-left like design */
            }

            /* Responsive */
            @media (max-width: 880px) {
                .counter-inner {
                    flex-direction: column;
                }

                .counter-left {
                    max-width: 100%;
                    margin-bottom: 28px;
                }

                .counter-right {
                    width: 100%;
                }

                .counters-grid {
                    grid-template-columns: repeat(2, 1fr);
                }

                .establish-card {
                    grid-column: 1 / span 2;
                    transform: translateY(0);
                    width: 100%;
                }

                .headline {
                    font-size: 34px;
                }
            }
        </style>

        <script>
            // Simple count-up animation when section is visible
            (function() {
                function animateCounters() {
                    document.querySelectorAll('.counter-number').forEach(function(el) {
                        if (el.dataset.animated) return; // don't animate twice
                        var target = parseInt(el.getAttribute('data-target')) || 0;
                        var duration = 1400;
                        var start = 0;
                        var startTime = null;

                        function step(timestamp) {
                            if (!startTime) startTime = timestamp;
                            var progress = Math.min((timestamp - startTime) / duration, 1);
                            var value = Math.floor(progress * (target - start) + start);
                            el.textContent = value + (el.dataset.suffix || '');
                            if (progress < 1) {
                                requestAnimationFrame(step);
                            } else {
                                el.dataset.animated = 'true';
                            }
                        }
                        requestAnimationFrame(step);
                    });
                }

                // IntersectionObserver to start animation when visible
                var observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            animateCounters();
                        }
                    });
                }, {
                    threshold: 0.35
                });

                document.addEventListener('DOMContentLoaded', function() {
                    var section = document.querySelector('.counter-section');
                    if (section) observer.observe(section);
                });
            })();
        </script>
    </section>




    <!-- Pricing Section Start -->

    {{-- @include('frontend.package.package') --}}

    <!-- Pricing Section End -->








    <!-- Blog Section Start -->
    @include('frontend.blogs.blogs')
    <!-- Blog Section End -->


    <!-- Gallery Section Start -->
    @include('frontend.gallery.gallery')
    <!-- Gallery Section End -->



    <!-- Team Section Start -->

    {{-- @include('frontend.team.team') --}}

    <!-- Team Section End -->

    <!-- Testimonial Section Start -->
    @include('frontend.testimonial.testimonial')
    <!-- Testimonial Section End -->

    {{-- patner section start --}}
    <div class="row">
        <div class="col-md-12 ">
            <div class="section-title style1 text-center mb-40">

                <h2 style="color:#741516">Our Corporate Partners</h2>
                <hr>
                <section class="section-modern section-modern-light" style="padding: 60px 0;">
                    <div class="container">
                        <div class="section-header-modern text-center" data-aos="fade-up" data-aos-duration="1200">
                            {{-- <span class="section-subtitle-modern">Trusted Partners</span>
                            <h2 class="section-title-modern">Our Trusted Partners</h2> --}}
                        </div>

                        <div class="partner-carousel owl-carousel owl-theme">
                            @foreach ($partner as $pt)
                                <div class="partner-slide" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-delay="{{ $loop->index * 50 }}">
                                    <div class="partner-card"
                                        style="padding: 1.5rem; background: white; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); transition: all 0.3s ease; display:flex; align-items:center; justify-content:center;">
                                        <img src="{{ asset('partner/' . $pt->image) }}" alt="Partner"
                                            style="max-width: 100%; max-height: 80px; object-fit: contain;">
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
