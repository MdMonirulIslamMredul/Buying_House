@extends('frontend.master')
@section('title')
    About
@endsection
@section('content')
    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Hero Start -->
        <section class="modern-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="modern-hero-title">{{ $about->title ?? 'Why Choose Us?' }}</h1>
                        <p class="modern-hero-subtitle">
                            {!! Str::limit(strip_tags($about->page_details ?? ''), 250) !!}
                        </p>
                    </div>
                </div>
                {{-- @if ($about->image1)
                    <div class="row mt-5">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="hero-image-wrapper">
                                <img src="{{ asset($about->image1) }}" alt="About" class="img-fluid rounded-3 shadow-lg">
                            </div>
                        </div>
                    </div>
                @endif --}}
            </div>
        </section>
        <!-- Hero End -->

        <!-- Numbered Sections Start -->
        <section class="numbered-sections">
            <div class="container">
                <!-- Section 1: Image Left, Content Right -->
                @if ($about->details1)
                    <div class="numbered-section">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6">
                                @if ($about->image1)
                                    <div class="section-image">
                                        <img src="{{ asset($about->image1) }}" alt="Section 1" class="img-fluid rounded-3">
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <div class="section-content">

                                    <div class="section-text">
                                        {!! $about->details1 !!}
                                    </div>
                                    {{-- <div class="mt-4">
                                        <a href="{{ route('contacts') }}" class="btn-modern">Get In Touch</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Section 2: Content Left, Image Right -->
                @if ($about->details2)
                    <div class="numbered-section">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6">
                                <div class="section-content">

                                    <div class="section-text">
                                        {!! $about->details2 !!}
                                    </div>
                                    {{-- <div class="mt-4">
                                        <a href="{{ route('contacts') }}" class="btn-modern">Book A Free Consultation</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                @if ($about->image2)
                                    <div class="section-image">
                                        <img src="{{ asset($about->image2) }}" alt="Section 2" class="img-fluid rounded-3">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Section 3: Full Width Content Only -->
                @if ($about->details3)
                    <div class="numbered-section">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="section-content">

                                    <div class="section-text">
                                        {!! $about->details3 !!}
                                    </div>
                                    {{-- <div class="mt-4">
                                        <a href="{{ route('contacts') }}" class="btn-modern">Learn More</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Section 4: Full Width Content Only -->
                @if ($about->details4)
                    <div class="numbered-section">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="section-content">

                                    <div class="section-text">
                                        {!! $about->details4 !!}
                                    </div>
                                    {{-- <div class="mt-4">
                                        <a href="{{ route('contacts') }}" class="btn-modern">Get Started</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- Numbered Sections End -->

        <!-- CTA Banner Section -->
        <section class="cta-banner-section">
            <div class="container">
                <div class="cta-banner">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="cta-title">Still Comparing Options?</h3>
                            <p class="cta-text">When choosing a partner, ask yourself: Do they practice what they preach?
                                Are they leaders in their field? Can you trust them with your success? We're confident the
                                answer is right here 👋</p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a href="{{ route('contacts') }}" class="btn-modern btn-modern-light">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        {{-- <section class="testimonials-section">
            <div class="container">
                <div class="section-header-center" data-aos="fade-up" data-aos-duration="1200">
                    <h2 class="section-title-main">{{ $banner->title ?? 'What Our Clients Say' }}</h2>
                    <p class="section-subtitle-main">Don't just take our word for it</p>
                </div>

                <div class="testimonial-slider-two owl-carousel">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-card-modern" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="testimonial-quote-icon">
                                <i class="flaticon-straight-quotes"></i>
                            </div>

                            <div class="testimonial-review">
                                <p>{!! $testimonial->review !!}</p>
                            </div>

                            <div class="testimonial-rating mb-3">
                                @for ($i = 0; $i < $testimonial->star; $i++)
                                    <i class="ri-star-fill"></i>
                                @endfor
                            </div>

                            <div class="testimonial-author-modern">
                                <img src="{{ asset($testimonial->image) }}" class="testimonial-avatar-modern"
                                    alt="{{ $testimonial->name }}">
                                <div class="testimonial-author-info-modern">
                                    <h5>{{ $testimonial->name }}</h5>
                                    <p>{{ $testimonial->designation }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> --}}
        <!-- Testimonial Section End -->

    </div>
    <!-- Content wrapper end -->

    <style>
        /* Modern Hero Section */
        .modern-hero {
            padding: 80px 0 60px;
            background: var(--white);
        }

        .modern-hero-title {
            font-size: clamp(32px, 6vw, 56px);
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .modern-hero-subtitle {
            font-size: 18px;
            color: var(--text-muted);
            max-width: 800px;
            margin: 0 auto 0;
            line-height: 1.6;
        }

        .hero-image-wrapper {
            position: relative;
            overflow: hidden;
        }

        .hero-image-wrapper img {
            width: 100%;
            height: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
        }


        /* Numbered Sections */
        .numbered-sections {
            padding: 60px 0;
            background: var(--white);
        }

        .numbered-section {
            padding: 60px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .numbered-section:last-child {
            border-bottom: none;
        }

        .section-content {
            position: relative;
        }

        .section-number {
            font-size: 48px;
            font-weight: 700;
            color: var(--text-primary);
            display: block;
            margin-bottom: 20px;
            line-height: 1;
        }

        .section-text {
            font-size: 16px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        .section-text h3,
        .section-text h4,
        .section-text h5 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 15px;
            margin-top: 0;
        }

        .section-text p {
            margin-bottom: 15px;
        }

        .section-text ul,
        .section-text ol {
            margin: 15px 0;
            padding-left: 25px;
        }

        .section-text li {
            margin-bottom: 10px;
        }

        .section-image {
            position: relative;
        }

        .section-image img {
            width: 100%;
            height: auto;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        /* Modern Button */
        .btn-modern {
            display: inline-block;
            padding: 14px 32px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
            color: #fff;
        }

        .btn-modern-light {
            background: var(--white);
            color: #667eea;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-modern-light:hover {
            background: var(--light-bg);
            color: #667eea;
        }

        /* CTA Banner */
        .cta-banner-section {
            padding: 60px 0;
            background: var(--light-bg);
        }

        .cta-banner {
            background: linear-gradient(135deg, #343e6b 0%, #231036 100%);
            padding: 50px;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.2);
        }

        .cta-title {
            font-size: 32px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 15px;
        }

        .cta-text {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.6;
            margin: 0;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 80px 0;
            background: var(--white);
        }

        .section-header-center {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title-main {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            color: #111827;
            margin-bottom: 10px;
        }

        .section-subtitle-main {
            font-size: 18px;
            color: #6b7280;
        }

        .testimonial-card-modern {
            background: var(--white);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 40px;
            margin: 15px;
            position: relative;
            transition: all 0.3s ease;
        }

        .testimonial-card-modern:hover {
            border-color: #667eea;
            box-shadow: 0 10px 40px rgba(102, 126, 234, 0.15);
            transform: translateY(-5px);
        }

        .testimonial-quote-icon {
            position: absolute;
            top: 30px;
            left: 35px;
            opacity: 0.1;
        }

        .testimonial-quote-icon i {
            font-size: 60px;
            color: #667eea;
        }

        .testimonial-review {
            position: relative;
            z-index: 1;
            margin-bottom: 25px;
        }

        .testimonial-review p {
            font-size: 16px;
            color: var(--text-secondary);
            line-height: 1.7;
            margin: 0;
        }

        .testimonial-rating i {
            color: #fbbf24;
            font-size: 18px;
            margin-right: 3px;
        }

        .testimonial-author-modern {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .testimonial-avatar-modern {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--white);
        }

        .testimonial-author-info-modern h5 {
            font-size: 18px;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0 0 5px;
        }

        .testimonial-author-info-modern p {
            font-size: 14px;
            color: var(--text-muted);
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .modern-hero {
                padding: 60px 0 40px;
            }

            .numbered-section {
                padding: 40px 0;
            }

            .section-number {
                font-size: 36px;
            }

            .cta-banner {
                padding: 40px 30px;
            }

            .cta-title {
                font-size: 26px;
            }

            .cta-text {
                font-size: 16px;
            }

            .testimonial-card-modern {
                padding: 30px;
            }
        }

        @media (max-width: 767px) {
            .modern-hero {
                padding: 40px 0 30px;
            }

            .cta-banner {
                padding: 30px 20px;
                text-align: center;
            }

            .testimonial-card-modern {
                padding: 25px;
            }
        }
    </style>
@endsection
