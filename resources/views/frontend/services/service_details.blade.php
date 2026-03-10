@extends('frontend.master')
@section('title')
    {{ $service->service_title }}
@endsection
@section('content')
    <div class="content-wrapper">

        <!-- Hero / Banner -->
        <div class="service-hero-banner" style="background-image: url({{ asset($service->banner_image) }});">
            <div class="hero-overlay"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="hero-content">
                            {{-- small blue subtitle --}}
                            @if ($service->service_title)
                                <div class="hero-subtitle mb-3">{{ $service->service_title }}</div>
                            @endif

                            {{-- Large hero title --}}
                            <h1 class="hero-title mb-4">{!! $service->hero_title ? $service->hero_title : $service->service_title !!}</h1>

                            {{-- Short description --}}
                            @if ($service->service_details_small)
                                <div class="hero-description mb-4">{!! $service->service_details_small !!}</div>
                            @endif

                            {{-- CTA and logos --}}
                            <div class="hero-cta-wrapper d-flex flex-wrap align-items-center gap-4">
                                <a href="{{ route('contacts') }}" class="hero-cta-btn">Get Started Today</a>
                                <div class="hero-badges d-none d-md-flex align-items-center gap-3">
                                    <img src="{{ asset('frontend/images/google-logo.png') }}" alt="Google"
                                        onerror="this.style.display='none'">
                                    <img src="{{ asset('frontend/images/shopify.png') }}" alt="Shopify"
                                        onerror="this.style.display='none'">
                                    <img src="{{ asset('frontend/images/shopify-expert.png') }}" alt="Shopify Expert"
                                        onerror="this.style.display='none'">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .service-hero-banner {
                position: relative;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                padding: 120px 0;
                min-height: 600px;
                display: flex;
                align-items: center;
            }

            .hero-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(100, 90, 91, 0.358);
                background: linear-gradient(135deg, rgba(37, 3, 4, 0.6) 0%, rgba(62, 49, 49, 0.469) 100%);
            }

            .hero-content {
                position: relative;
                z-index: 10;
            }

            .hero-subtitle {
                color: #36d1dc;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: 1px;
                text-transform: uppercase;
            }

            .hero-title {
                color: #ffffff;
                font-size: clamp(1.8rem, 4.5vw, 3.2rem);
                font-weight: 700;
                line-height: 1.2;
                margin-bottom: 1.5rem;
                max-width: 850px;
            }

            .hero-description {
                color: rgba(255, 255, 255, 0.8);
                font-size: 18px;
                line-height: 1.6;
                max-width: 650px;
            }

            .hero-cta-wrapper {
                margin-top: 2.5rem;
            }

            .hero-cta-btn {
                display: inline-block;
                background: linear-gradient(90deg, #5865f2 0%, #741516 100%);
                color: #ffffff;
                padding: 18px 45px;
                border-radius: 50px;
                font-weight: 700;
                font-size: 15px;
                letter-spacing: 0.8px;
                text-transform: uppercase;
                text-decoration: none;
                transition: all 0.3s ease;
                box-shadow: 0 10px 30px rgba(54, 209, 220, 0.2);
            }

            .hero-cta-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 15px 40px rgba(54, 209, 220, 0.3);
                text-decoration: none;
                color: #ffffff;
            }

            .hero-badges img {
                height: 32px;
                width: auto;
                opacity: 0.9;
                transition: opacity 0.3s;
            }

            .hero-badges img:hover {
                opacity: 1;
            }

            @media (max-width: 991px) {
                .service-hero-banner {
                    padding: 80px 0;
                    min-height: 500px;
                }

                .hero-title {
                    font-size: clamp(1.6rem, 6vw, 2.8rem);
                }
            }

            @media (max-width: 576px) {
                .service-hero-banner {
                    padding: 60px 0;
                    min-height: 450px;
                }

                .hero-cta-btn {
                    padding: 14px 30px;
                    font-size: 13px;
                }

                .hero-description {
                    font-size: 16px;
                }
            }
        </style>

        <!-- Main Content -->
        <section class="service-details-wrap ptb-100">
            <div class="container">
                <div class="row gx-5">
                    <main class="col-lg-8">
                        <article class="service-desc">
                            {{-- Primary content block --}}
                            @if ($service->service_details1)
                                <div class="content-block mb-5 p-4 bg-light rounded">
                                    <h3 class="mb-3">Overview</h3>
                                    {!! $service->service_details1 !!}
                                </div>
                            @endif

                            {{-- Results/Statistics Section --}}
                            {{-- <div class="results-stats-section mb-5">
                                <h3 class="mb-4">Results That Matter</h3>
                                <div class="row g-4">
                                    <div class="col-md-3 col-6">
                                        <div class="stat-card text-center p-4 bg-gradient rounded h-100">
                                            <div class="stat-number">300%</div>
                                            <div class="stat-label">Average Growth</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="stat-card text-center p-4 bg-gradient rounded h-100">
                                            <div class="stat-number">500+</div>
                                            <div class="stat-label">Clients Served</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="stat-card text-center p-4 bg-gradient rounded h-100">
                                            <div class="stat-number">15x</div>
                                            <div class="stat-label">Average ROI</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="stat-card text-center p-4 bg-gradient rounded h-100">
                                            <div class="stat-number">91%</div>
                                            <div class="stat-label">Retention Rate</div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- Two column images gallery --}}
                            @if ($service->details_image1 || $service->details_image2)
                                <div class="gallery-section mb-5">
                                    <h3 class="mb-4">Visual Showcase</h3>
                                    <div class="row g-4">
                                        @if ($service->details_image1)
                                            <div class="col-md-6">
                                                <div class="gallery-item rounded overflow-hidden">
                                                    <a data-fancybox="gallery" href="{{ asset($service->details_image1) }}">
                                                        <img src="{{ asset($service->details_image1) }}" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($service->details_image2)
                                            <div class="col-md-6">
                                                <div class="gallery-item rounded overflow-hidden">
                                                    <a data-fancybox="gallery" href="{{ asset($service->details_image2) }}">
                                                        <img src="{{ asset($service->details_image2) }}" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- Secondary content --}}
                            @if ($service->service_details2)
                                <div class="content-block mb-5 p-4 bg-white border-left">
                                    <h3 class="mb-3">Key Features & Benefits</h3>
                                    {!! $service->service_details2 !!}
                                </div>
                            @endif

                            {{-- Large single image --}}
                            @if ($service->details_image3)
                                <div class="mb-5">
                                    <div class="full-width-gallery rounded overflow-hidden">
                                        <a data-fancybox="gallery" href="{{ asset($service->details_image3) }}">
                                            <img src="{{ asset($service->details_image3) }}" class="img-fluid w-100"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            @endif

                            {{-- Tertiary content --}}
                            @if ($service->service_details3)
                                <div class="content-block mb-5 p-4 bg-light rounded">
                                    <h3 class="mb-3">Implementation Strategy</h3>
                                    {!! $service->service_details3 !!}
                                </div>
                            @endif

                            <!-- Service Components Grid Section -->
                            {{-- <div class="service-components-section mb-5">
                                <h3 class="mb-4">Our Process & Components</h3>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="component-card p-4 rounded border-start border-primary">
                                            <div class="component-icon mb-3">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="20" cy="20" r="20" fill="#36d1dc"
                                                        fill-opacity="0.1" />
                                                    <path d="M20 10V30M10 20H30" stroke="#36d1dc" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </div>
                                            <h6>Comprehensive Audit</h6>
                                            <p class="text-muted small">In-depth analysis of your current performance and
                                                opportunities</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-card p-4 rounded border-start border-primary">
                                            <div class="component-icon mb-3">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="20" cy="20" r="20" fill="#36d1dc"
                                                        fill-opacity="0.1" />
                                                    <path d="M12 20L18 26L28 14" stroke="#36d1dc" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <h6>Strategic Planning</h6>
                                            <p class="text-muted small">Customized strategy aligned with your business
                                                goals</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-card p-4 rounded border-start border-primary">
                                            <div class="component-icon mb-3">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="20" cy="20" r="20" fill="#36d1dc"
                                                        fill-opacity="0.1" />
                                                    <path d="M20 12V28M12 20H28" stroke="#36d1dc" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </div>
                                            <h6>Expert Implementation</h6>
                                            <p class="text-muted small">Hands-on execution by experienced professionals</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="component-card p-4 rounded border-start border-primary">
                                            <div class="component-icon mb-3">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="20" cy="20" r="20" fill="#36d1dc"
                                                        fill-opacity="0.1" />
                                                    <path d="M14 24L20 18L26 24M20 18V28" stroke="#36d1dc"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <h6>Ongoing Optimization</h6>
                                            <p class="text-muted small">Continuous monitoring and improvement of results
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- Embedded Videos --}}
                            @if ($service->videos && $service->videos->count())
                                <div class="service-videos-section mb-5">
                                    <h3 class="mb-4">Video Resources</h3>
                                    <div class="row g-4">
                                        @foreach ($service->videos as $video)
                                            @php
                                                $yt = $video->youtube_url ?? '';
                                                $yt_id = null;
                                                if ($yt) {
                                                    if (strpos($yt, 'youtu.be/') !== false) {
                                                        $yt_id = substr($yt, strrpos($yt, '/') + 1);
                                                    } elseif (strpos($yt, 'watch?v=') !== false) {
                                                        parse_str(parse_url($yt, PHP_URL_QUERY) ?: '', $q);
                                                        $yt_id = $q['v'] ?? null;
                                                    } else {
                                                        $yt_id = $yt;
                                                    }
                                                }
                                            @endphp
                                            @if ($yt_id)
                                                <div class="col-md-6">
                                                    <div class="video-wrapper rounded overflow-hidden"
                                                        style="box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/{{ $yt_id }}"
                                                                title="{{ $video->title }}" frameborder="0"
                                                                allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    @if ($video->title)
                                                        <p class="mt-2 small text-muted">{{ $video->title }}</p>
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            {{-- FAQ Accordion --}}
                            @if ($service->faqs && $service->faqs->count())
                                <div class="service-faqs-section mb-5">
                                    <h3 class="mb-4">Frequently Asked Questions</h3>
                                    <div class="accordion accordion-flush" id="faqAccordion">
                                        @foreach ($service->faqs as $index => $faq)
                                            <div class="accordion-item border-bottom">
                                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                                    <button class="accordion-button {{ $index ? 'collapsed' : '' }} fw-600"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $faq->id }}"
                                                        aria-expanded="{{ $index ? 'false' : 'true' }}"
                                                        aria-controls="collapse{{ $faq->id }}">
                                                        {{ $faq->question }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $faq->id }}"
                                                    class="accordion-collapse collapse {{ $index ? '' : 'show' }}"
                                                    aria-labelledby="heading{{ $faq->id }}"
                                                    data-bs-parent="#faqAccordion">
                                                    <div class="accordion-body pt-0">
                                                        <p>{{ $faq->answer }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            {{-- Final CTA Section --}}
                            <div class="final-cta-section p-5 bg-gradient rounded text-white mb-4">
                                <h3 class="mb-3">Ready to Get Results?</h3>
                                <p class="mb-4">Let's discuss how we can help transform your business with this service.
                                </p>
                                <a href="{{ route('contacts') }}" class="btn btn-cta-primary btn-lg">Schedule Your Free
                                    Consultation</a>
                            </div>

                        </article>
                    </main>

                    <aside class="col-lg-4">
                        <!-- Quick Contact Card -->
                        <div class="sidebar-card mb-4 p-4 bg-gradient rounded text-white"
                            style="box-shadow: 0 8px 25px rgba(54, 209, 220, 0.15);">
                            <h5 class="mb-3">Quick Consultation</h5>
                            <p class="mb-4" style="color:aliceblue"> Get expert guidance on how this service can benefit
                                your business.</p>
                            <a href="{{ route('contacts') }}" class="btn btn-cta-light btn-sm w-100 mb-3">Schedule a
                                Call</a>
                            <p class="small mb-0" style="color:aliceblue">Free 30-minute consultation with our team
                            </p>
                        </div>

                        <!-- Key Benefits Card -->
                        @if ($service->service_details_small)
                            <div class="sidebar-card mb-4 p-4 bg-white rounded border">
                                <h6 class="mb-3">Key Highlights</h6>
                                <div class="highlights-content">{!! $service->service_details_small !!}</div>
                            </div>
                        @endif

                        <!-- Why Choose Us Card -->
                        <div class="sidebar-card mb-4 p-4 bg-light rounded">
                            <h6 class="mb-3">Why Choose Us?</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Award-Winning Team</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Proven Track Record</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 24/7 Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Data-Driven Results</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Custom Solutions</li>
                            </ul>
                        </div>

                        <!-- Contact Info Card -->
                        <div class="sidebar-card p-4 bg-white rounded border">
                            <h6 class="mb-3">Get In Touch</h6>
                            <p class="small text-muted mb-3">Have questions? We're here to help!</p>
                            <a href="{{ route('contacts') }}" class="btn btn-cta-outline btn-sm w-100">Contact Us</a>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- Enhanced Styling -->
        <style>
            /* Content Block Styles */
            .content-block {
                transition: all 0.3s ease;
                line-height: 1.8;
                color: #333;
            }

            .content-block h3,
            .content-block h4 {
                color: #0a0f1e;
                font-weight: 700;
                margin-bottom: 1rem;
            }

            .content-block.border-left {
                border-left: 4px solid #36d1dc !important;
            }

            .content-block p {
                margin-bottom: 1rem;
            }

            .content-block strong {
                color: #0a0f1e;
            }

            .content-block ul,
            .content-block ol {
                margin-bottom: 1rem;
                padding-left: 2rem;
            }

            .content-block li {
                margin-bottom: 0.5rem;
            }

            /* Results Stats Section */
            .results-stats-section {
                margin: 2rem 0;
            }

            .stat-card {
                background: linear-gradient(135deg, #36d1dc 0%, #5865f2 100%) !important;
                color: white;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                min-height: 180px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }

            .stat-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: -50%;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.1);
                transition: all 0.5s ease;
            }

            .stat-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 40px rgba(54, 209, 220, 0.3);
            }

            .stat-card:hover::before {
                left: 100%;
            }

            .stat-number {
                font-size: 2.5rem;
                font-weight: 700;
                line-height: 1;
                margin-bottom: 0.5rem;
                position: relative;
                z-index: 1;
            }

            .stat-label {
                font-size: 0.95rem;
                font-weight: 600;
                opacity: 0.95;
                position: relative;
                z-index: 1;
            }

            /* Gallery Section */
            .gallery-section {
                margin: 3rem 0 2rem 0;
            }

            .gallery-item {
                overflow: hidden;
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            .gallery-item:hover {
                box-shadow: 0 8px 25px rgba(54, 209, 220, 0.2);
                transform: translateY(-3px);
            }

            .gallery-item img {
                width: 100%;
                height: auto;
                display: block;
                transition: transform 0.3s ease;
            }

            .gallery-item:hover img {
                transform: scale(1.05);
            }

            .full-width-gallery {
                overflow: hidden;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            }

            .full-width-gallery:hover {
                box-shadow: 0 12px 35px rgba(54, 209, 220, 0.25);
            }

            /* Service Components Grid */
            .service-components-section {
                margin: 3rem 0 2rem 0;
            }

            .component-card {
                transition: all 0.3s ease;
                background: white;
                position: relative;
                overflow: hidden;
            }

            .component-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: linear-gradient(90deg, #36d1dc 0%, #5865f2 100%);
                transform: scaleX(0);
                transform-origin: left;
                transition: transform 0.3s ease;
            }

            .component-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 20px rgba(54, 209, 220, 0.15);
            }

            .component-card:hover::before {
                transform: scaleX(1);
            }

            .component-icon {
                display: inline-block;
            }

            .component-card h6 {
                color: #0a0f1e;
                font-weight: 700;
                margin-bottom: 0.75rem;
            }

            .component-card p {
                margin: 0;
                font-size: 0.9rem;
            }

            /* Videos Section */
            .service-videos-section {
                margin: 3rem 0 2rem 0;
            }

            .video-wrapper {
                position: relative;
                transition: all 0.3s ease;
                background: #000;
            }

            .video-wrapper:hover {
                box-shadow: 0 10px 30px rgba(54, 209, 220, 0.2) !important;
                transform: translateY(-3px);
            }

            /* FAQs Section */
            .service-faqs-section {
                margin: 3rem 0 2rem 0;
            }

            .accordion-button {
                border: none !important;
                background: white;
                color: #0a0f1e;
                font-size: 1rem;
                padding: 1.25rem;
                font-weight: 600;
                box-shadow: none !important;
            }

            .accordion-button:not(.collapsed) {
                background: linear-gradient(135deg, rgba(54, 209, 220, 0.1) 0%, rgba(88, 101, 242, 0.1) 100%);
                color: #36d1dc;
            }

            .accordion-body {
                padding: 1.25rem;
                color: #555;
                line-height: 1.8;
            }

            .accordion-item {
                background: white;
                border: none;
            }

            /* Final CTA Section */
            .final-cta-section {
                background: linear-gradient(135deg, #36d1dc 0%, #741516 100%) !important;
                margin-top: 3rem;
            }

            .final-cta-section h3 {
                color: white;
                font-weight: 700;
            }

            .final-cta-section p {
                color: rgba(255, 255, 255, 0.95);
                font-size: 1.05rem;
            }

            .btn-light:hover {
                background: white;
                color: #36d1dc;
                font-weight: 600;
            }

            /* Sidebar Cards */
            .sidebar-card {
                transition: all 0.3s ease;
            }

            .sidebar-card.bg-gradient {
                background: linear-gradient(135deg, #36d1dc 0%, #741516 100%) !important
            }

            .sidebar-card h5,
            .sidebar-card h6 {
                color: inherit;
                font-weight: 700;
            }

            .sidebar-card:not(.bg-gradient) h6 {
                color: #0a0f1e;
            }

            .sidebar-card:hover:not(.bg-gradient) {
                box-shadow: 0 8px 20px rgba(54, 209, 220, 0.1);
                transform: translateY(-3px);
            }

            .highlights-content {
                font-size: 0.95rem;
                line-height: 1.8;
            }

            .highlights-content ul,
            .highlights-content ol {
                padding-left: 1.5rem;
            }

            .highlights-content li {
                margin-bottom: 0.5rem;
            }

            /* General Improvements */
            main h3 {
                color: #0a0f1e;
                font-weight: 700;
                margin-bottom: 1.5rem;
                margin-top: 2rem;
            }

            main h4 {
                color: #0a0f1e;
                font-weight: 600;
                margin-bottom: 1rem;
            }

            .fw-600 {
                font-weight: 600;
            }

            /* Custom Button Styles */
            .btn-cta-primary {
                display: inline-block;
                background: #0e0808d4;
                color: #36d1dc;
                padding: 16px 40px;
                border-radius: 50px;
                font-weight: 700;
                font-size: 15px;
                letter-spacing: 0.6px;
                text-decoration: none;
                transition: all 0.3s ease;
                border: none;
                box-shadow: 0 4px 20px rgba(255, 255, 255, 0.2);
                position: relative;
                overflow: hidden;
            }

            .btn-cta-primary::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, #36d1dc 0%, #5865f2 100%);
                transition: all 0.3s ease;
                z-index: -1;
                border-radius: 50px;
            }

            .btn-cta-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 30px rgba(255, 255, 255, 0.3);
                color: white;
            }

            .btn-cta-primary:hover::before {
                left: 0;
            }

            .btn-cta-light {
                display: inline-block;
                background: #7272728b;
                color: #74d1dc;
                padding: 10px 25px;
                border-radius: 50px;
                font-weight: 700;
                font-size: 13px;
                letter-spacing: 0.5px;
                text-decoration: none;
                transition: all 0.3s ease;
                border: 2px solid white;
                box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
            }

            .btn-cta-light:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 25px rgba(255, 255, 255, 0.35);
                color: white;
                background: transparent;
            }

            .btn-cta-outline {
                display: inline-block;
                background: #741516;
                color: #36d1dc;
                padding: 10px 25px;
                border-radius: 50px;
                font-weight: 700;
                font-size: 13px;
                letter-spacing: 0.5px;
                text-decoration: none;
                transition: all 0.3s ease;
                border: 2px solid #36d1dc;
                position: relative;
                overflow: hidden;
            }

            .btn-cta-outline::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, #36d1dc 0%, #5865f2 100%);
                transition: all 0.3s ease;
                z-index: -1;
            }

            .btn-cta-outline:hover {
                color: white;
                border-color: transparent;
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(54, 209, 220, 0.3);
            }

            .btn-cta-outline:hover::before {
                left: 0;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .stat-number {
                    font-size: 1.8rem;
                }

                .stat-card {
                    min-height: 140px;
                }

                .final-cta-section {
                    padding: 2rem !important;
                    text-align: center;
                }

                .component-card {
                    text-align: center;
                }

                .btn-cta-primary {
                    padding: 14px 35px;
                    font-size: 14px;
                }
            }

            @media (max-width: 991px) {
                aside.col-lg-4 {
                    margin-top: 3rem;
                }
            }
        </style>

    </div>
@endsection
