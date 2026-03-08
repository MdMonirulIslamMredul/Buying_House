<section class="section-modern section-modern-light" id="about-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern">About Us</span>
            <h2 class="section-title-modern">{{ $about->title ?? null }}</h2>
        </div>

        @php
            $img1 = $about->image1 ? asset($about->image1) : asset('frontend/assets/img/about/about-img-1.jpg');
            $img2 = $about->image2 ? asset($about->image2) : asset('frontend/assets/img/about/promo-bg-2.jpg');
        @endphp

        <div class="row gx-5 align-items-center about-row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="about-image-wrap" style="position:relative;">
                    <img src="{{ $img1 }}" alt="About image" class="about-image">

                    <div class="experience-badge">
                        <div class="exp-number">{{ $about->years_experience }} +
                        </div>
                        <div class="exp-text">Years Experience</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                <div class="modern-card" style="padding: 2.5rem 2rem 1rem;">
                    <span class="section-subtitle-modern">About Us</span>
                    <h2 class="section-title-modern about-title">{{ $about->title ?? 'Company Overview' }}</h2>
                    <div class="content-description-modern about-text" style="font-size: 1.05rem; line-height: 1.8;">
                        {!! $about->page_details ?? null !!}
                    </div>

                    <div class="key-values-card" style="background-image: url('{{ $img2 }}')">
                        <div class="kv-overlay">
                            <h4 class="kv-title">Our Key Values</h4>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="kv-items">
                                        <li><i class="ri-arrow-right-s-line"></i> Craftsmanship</li>
                                        <li><i class="ri-arrow-right-s-line"></i> Innovation</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="kv-items">
                                        <li><i class="ri-arrow-right-s-line"></i> Sustainability</li>
                                        <li><i class="ri-arrow-right-s-line"></i> Customer-Centric</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* About section custom styles */
    .about-image {
        width: 100%;
        height: auto;
        border-radius: 14px;
        display: block;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .experience-badge {
        position: absolute;
        bottom: -28px;
        left: 28px;
        background: rgba(123, 27, 27, 0.95);
        color: #fff;
        padding: 18px 26px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        min-width: 190px;
    }

    .experience-badge .exp-number {
        font-size: 28px;
        font-weight: 700;
        line-height: 1;
    }

    .experience-badge .exp-text {
        font-size: 14px;
        opacity: 0.95;
        margin-top: 6px;
    }

    .about-title {
        color: #7b1b1b;
        font-size: 42px;
        margin-top: 8px;
        margin-bottom: 18px;
    }

    .key-values-card {
        margin-top: 28px;
        border-radius: 12px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        min-height: 170px;
        position: relative;
    }

    .key-values-card .kv-overlay {
        position: relative;
        z-index: 2;
        color: #fff;
        padding: 18px 22px;
    }

    .key-values-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.25));
    }

    .kv-title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 12px;
        color: #fff;
    }

    .kv-items {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .kv-items li {
        color: #fff;
        padding: 6px 0;
        font-size: 15px;
    }

    .kv-items li i {
        margin-right: 8px;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .experience-badge {
            position: relative;
            bottom: 0;
            left: 0;
            margin-top: 18px;
        }

        .about-title {
            font-size: 32px;
        }
    }
</style>
